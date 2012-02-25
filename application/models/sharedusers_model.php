<?php defined('BASEPATH') OR exit('No direct script access allowed');

class SharedUsers_model extends CI_Model {

    private $shared_users = 'shared_users';

    public function __construct()
    {
        parent::__construct();
    }


    public function list_all()
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->shared_users);
    }


    public function count_all()
    {
        return $this->db->count_all($this->shared_users);
    }


    public function get_paged_list($limit = 10, $offset = 0)
    {
        $this->db->order_by('id','asc');
        return $this->db->get($this->shared_users, $limit, $offset);
    }


    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->shared_users);
    }


    public function save($shared_users)
    {
        $this->db->insert($this->shared_users, $shared_users);
        return $this->db->insert_id();
    }


    public function update($id, $shared_users)
    {
        $this->db->where('id', $id);
        $this->db->update($this->shared_users, $shared_users);
        return $id;
    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->shared_users);
        return $id;
    }


}
