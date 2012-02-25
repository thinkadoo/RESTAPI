<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Media_model extends CI_Model {

    private $media = 'media';

    public function __construct()
    {
        parent::__construct();
    }


    public function list_all()
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->media);
    }


    public function count_all()
    {
        return $this->db->count_all($this->media);
    }


    public function get_paged_list($limit = 10, $offset = 0)
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->media, $limit, $offset);
    }


    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->media);
    }


    public function save($media)
    {
        $this->db->insert($this->media, $media);
        return $this->db->insert_id();
    }


    public function update($id, $media)
    {
        $this->db->where('id', $id);
        $this->db->update($this->media, $media);
        return $id;
    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->media);
        return $id;
    }


}