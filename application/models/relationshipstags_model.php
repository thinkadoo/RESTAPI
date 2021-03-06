<?php defined('BASEPATH') OR exit('No direct script access allowed');

class RelationshipsTags_model extends CI_Model {

    private $relationships_tags = 'relationships_tags';

    public function __construct()
    {
        parent::__construct();
    }


    public function list_all()
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->relationships_tags);
    }


    public function count_all()
    {
        return $this->db->count_all($this->relationships_tags);
    }


    public function get_paged_list($limit = 10, $offset = 0)
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->relationships_tags, $limit, $offset);
    }


    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->relationships_tags);
    }


    public function save($relationships_tags)
    {
        $this->db->insert($this->relationships_tags, $relationships_tags);
        return $this->db->insert_id();
    }


    public function update($id, $relationships_tags)
    {
        $this->db->where('id', $id);
        $this->db->update($this->relationships_tags, $relationships_tags);
        return $id;
    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->relationships_tags);
        return $id;
    }


}