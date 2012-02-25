<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class RelationshipsAssets extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('RelationshipsAssets_model','',TRUE);
    }


    function put_put()
    {
        $data = array(
            'media_id' => $this->put('media_id'),
            'asset_id' => $this->put('asset_id')
        );


        $id = $this->RelationshipsAssets_model->save($data);


        $return = $this->RelationshipsAssets_model->get_by_id($id)->row();


        if($return)
        {
            $this->response($return, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be created'), 404);
        }
    }


    function post_post()
    {
        $data = array(
            'media_id' => $this->put('media_id'),
            'asset_id' => $this->put('asset_id')
        );


        $id = $this->RelationshipsAssets_model->update($this->post('id'),$data);


        $return = $this->RelationshipsAssets_model->get_by_id($this->post('id'))->row();


        if($return)
        {
            $this->response($return, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be created'), 404);
        }
    }


    function delete_delete()
    {
        $data = $this->RelationshipsAssets_model->delete($this->get('id'));


        $message = array(
            'data' => $data,
            'message' => 'DELETED!'
        );


        if($data)
        {
            $this->response($message, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be created'), 404);
        }
    }


    function get_get()
    {
        if(!$this->get('id'))
        {
            $this->response(NULL, 400);
        }


        $data = $this->RelationshipsAssets_model->get_by_id($this->get('id'))->row();


        if($data)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be found'), 404);
        }
    }


    function getsome_get()
    {
        $data = $this->RelationshipsAssets_model->get_paged_list($this->get('limit'),$this->get('offset'))->result();


        if($data)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be found'), 404);
        }
    }


    function getall_get()
    {
        $data = $this->RelationshipsAssets_model->list_all()->result();


        if($data)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be found'), 404);
        }
    }


}