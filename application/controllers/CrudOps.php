<?php
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
ini_set('display_errors', true);
defined('BASEPATH') OR exit('No direct script access allowed');
class CrudOps extends CI_Controller {


   public $CrudOps;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('MyModel');
      $this->load->helper('url');


      $this->CrudOps = new MyModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
      $data['data'] = $this->CrudOps->get_CrudOps();


       $this->load->view('list',$data);

     }
 


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create()
   {
      $this->load->view('new_entry');  
   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('crudops/create'));
            die();
        }else{
           $this->CrudOps->insert_item();
           redirect(base_url('crudops'));
           die();
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $item = $this->CrudOps->find_item($id);
       $this->load->view('edit',array('item'=>$item));
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('crudopsEdit/'.$id));
            die();
        }else{ 
          $this->CrudOps->update_item($id);
          redirect(base_url('crudops'));
          die();
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->CrudOps->delete_item($id);
       redirect(base_url());
       die();
   }
}