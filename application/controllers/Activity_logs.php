<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');

class Activity_logs extends CI_Controller {

	public $transactions = 'transactions';
	public $users = 'users';
	public $order_by_desc = 'desc';
	public $order_key = 'created';
	public $limit5 = 5; 
	public $logs = 'activity_logs';


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


	public function get_logs(){

		$data = [];


		if ($this->session->userdata('user_type') == 'admin') {

		$items = $this->GetModel->getALLlogs($this->logs)->result_array(); 

		$i = 0;
		foreach ($items as $row ) {

		$i++;
            	$data[] = array(
            				'n' => $i,
            				'action' => $row['action'],
            				'user' => $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].' '.$row['extension'],
            				'date_and_time' => date('M,d Y', strtotime($row['created'])).' '.date('h:i a', strtotime($row['created']))
            				

            	);
            # code...
        }

        echo json_encode($data);
     }else {


     		
		$items = $this->GetModel->getALLlogsUser($this->logs)->result_array(); 

		$i = 0;
		foreach ($items as $row ) {

		$i++;
            	$data[] = array(
            				'n' => $i,
            				'action' => $row['action'],
            				'user' => $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].' '.$row['extension'],
            				'date_and_time' => date('M,d Y', strtotime($row['created_'])).' '.date('h:i a', strtotime($row['created_']))
            				

            	);
            # code...
        }

     		echo json_encode($data);
     }

	}

	
}
