<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tags_model extends CI_Model {

    private $tags = 'tags';

    public function __construct()
    {
        parent::__construct();
    }


    public function list_all()
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->tags);
    }


    public function count_all()
    {
        return $this->db->count_all($this->tags);
    }


    public function get_paged_list($limit = 10, $offset = 0)
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->tags, $limit, $offset);
    }


    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->tags);
    }


    public function save($tags)
    {
        $this->db->insert($this->tags, $tags);
        return $this->db->insert_id();
    }


    public function update($id, $tags)
    {
        $this->db->where('id', $id);
        $this->db->update($this->tags, $tags);
        return $id;
    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tags);
        return $id;
    }


}