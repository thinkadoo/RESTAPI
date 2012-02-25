<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Visitors_model extends CI_Model {

    private $visitors = 'visitors';

    public function __construct()
    {
        parent::__construct();
    }


    public function list_all()
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->visitors);
    }


    public function count_all()
    {
        return $this->db->count_all($this->visitors);
    }


    public function get_paged_list($limit = 10, $offset = 0)
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->visitors, $limit, $offset);
    }


    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->visitors);
    }


    public function save($visitors)
    {
        $this->db->insert($this->visitors, $visitors);
        return $this->db->insert_id();
    }


    public function update($id, $visitors)
    {
        $this->db->where('id', $id);
        $this->db->update($this->visitors, $visitors);
        return $id;
    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->visitors);
        return $id;
    }


}