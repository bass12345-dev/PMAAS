<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');


class View extends CI_Controller {



	public function __construct()
    {
        parent::__construct();

         if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }

	public function user_profile()
	{

      
       
      $where = array('user_id' => $_GET['id']);
      $data['user'] = $this->GetModel->get('users',$where)[0];
      $data['title'] = $data['user']['first_name'].' '.$data['user']['middle_name'].' '.$data['user']['last_name'].' '.$data['user']['extension'];  
      $this->load->view('admin/myprofile/my_profile',$data);
		
	}

}
