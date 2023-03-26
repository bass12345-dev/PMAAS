<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');

class Activity_logs extends CI_Controller {

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
		 	$data['title'] = 'Activity Logs';
		 	$this->load->view('admin/activity_logs/activity_logs',$data);
		 		
	}


	
}
