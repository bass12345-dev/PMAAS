<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');

class Dashboard extends CI_Controller {

	public $transactions = 'transactions';
	public $users = 'users';
	public $order_by_desc = 'desc';
	public $order_key = 'created';
	public $limit5 = 5; 


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
		 	$data['pending_transactions_limit'] = $this->GetModel->getAdminPendingTransactionslimit($this->transactions,$this->limit5);
		 	$data['users'] = $this->GetModel->getALL($this->users,'asc',$this->order_key);
		 	$this->load->view('admin/dashboard/admin_content/admin_dashboard',$data);
		 }else {

		 	$data['count_user_pending'] = $this->CountModel->countUserTran($this->transactions,array('created_by' => $this->session->userdata('user_id')),array('status' => 'pending'));
		 	$data['count_user_completed'] = $this->CountModel->countUserTran($this->transactions,array('created_by' => $this->session->userdata('user_id')),array('status' => 'completed'));
		 	$data['users'] = $this->GetModel->getALL($this->users,'asc',$this->order_key);
		 	$this->load->view('admin/dashboard/user_content/user_dashboard',$data);
		 }
		 
		
		
	}


	
}
