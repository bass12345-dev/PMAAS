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
		 if ($this->session->userdata('user_type') == 'admin') {
		 	$data['count'] = $this->CountModel->count($this->transactions);
		 	$data['count_admin_pending'] = $this->CountModel->count1($this->transactions,array('status' => 'pending'));
		 	$data['count_admin_completed'] = $this->CountModel->count1($this->transactions,array('status' => 'completed'));
		 }else {

		 	$data['count_user_pending'] = $this->CountModel->countUserTran($this->transactions,array('created_by' => $this->session->userdata('user_id')),array('status' => 'pending'));
		 	$data['count_user_completed'] = $this->CountModel->countUserTran($this->transactions,array('created_by' => $this->session->userdata('user_id')),array('status' => 'completed'));

		 }
		 
		
		$this->load->view('admin/dashboard/dashboard',$data);
	}


	
}
