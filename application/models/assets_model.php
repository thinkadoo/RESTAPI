<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Assets_model extends CI_Model {

    private $assets = 'assets';

    public function __construct()
    {
        parent::__construct();
    }


    public function list_all()
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->assets);
    }


    public function count_all()
    {
        return $this->db->count_all($this->assets);
    }


    public function get_paged_list($limit = 10, $offset = 0)
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->assets, $limit, $offset);
    }


    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->assets);
    }


    public function save($assets)
    {
        $this->db->insert($this->assets, $assets);
        return $this->db->insert_id();
    }


    public function update($id, $assets)
    {
        $this->db->where('id', $id);
        $this->db->update($this->assets, $assets);
        return $id;
    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->assets);
        return $id;
    }


}