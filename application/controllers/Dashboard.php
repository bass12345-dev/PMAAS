<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public $transactions = 'transactions';


	public function __construct()
    {
        parent::__construct();

         if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }
    
	public function index()
	{
		 $data['title'] = 'Dahboard';
		 $data['count'] = $this->CountModel->count($this->transactions);
		$this->load->view('admin/dashboard/dashboard',$data);
	}


	
}
