<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pending_transactions extends CI_Controller {


	public $cso = 'cso';
	public $trainings = 'trainings';
	public $project_monitoring = 'project_monitoring';
	public $type_of_activity = 'type_of_activity';
	public $under_type_of_activity = 'under_type_of_activity';
	public $responsibility_center = 'responsibility_center';
	public $responsible_section = 'type_of_monitoring';
	public $transactions = 'transactions';
	public $order_by_desc = 'desc';
	public $order_by_asc = 'asc';
	public $order_key = 'created';
	public $order_key_code = 'res_center_code';
	public $order_key_name = 'type_act_name';
	public $order_under_type_act_name = 'under_type_act_name';

	public function __construct()
    {
        parent::__construct();

         if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }


	public function index()
	{	
		$data['title'] = 'Pending Transactions';
		$this->load->view('admin/transactions/pending_transactions/pending_transactions',$data);
	}



	public function add_transactions(){

		$data['title'] = 'Add Transactions';
		$data['activities'] = $this->GetModel->getALL($this->type_of_activity,$this->order_by_asc,$this->order_key_name); 
		$data['under_type_activies'] = $this->GetModel->getALL($this->under_type_of_activity,$this->order_by_asc,$this->order_under_type_act_name);
		$data['responsibility_centers'] = $this->GetModel->getALL($this->responsibility_center,$this->order_by_asc,$this->order_key_code); 
		$data['responsible'] =  $this->GetModel->getALL($this->responsible_section,$this->order_by_asc,$this->order_key);
		$data['cso'] = $this->GetModel->getALL($this->cso,$this->order_by_asc,$this->order_key);
		$data['last'] = $this->GetModel->get_last_pmas_number();
		$this->load->view('admin/transactions/add_section/add_section',$data);
	}


	public function get_pending_transactions(){
		$data = [];

		if ($this->session->userdata('user_type') == 'admin') {
		
	
		$items = $this->GetModel->getAdminPendingTransactions($this->transactions); 

		foreach ($items as $row ) {

            	$data[] = array(
            				'transaction_id' => $row['transaction_id'],
            				'pmas_no' => date('Y', strtotime($row['date_and_time_filed'])).' - '.date('m', strtotime($row['date_and_time_filed'])).' - '.$row['number'],
            				'date_and_time_filed' => date('M,d Y', strtotime($row['date_and_time_filed'])).' '.date('h:i a', strtotime($row['date_and_time_filed'])),
            				'type_mon_name' => $row['type_mon_name'],
            				'type_act_name' => $row['type_act_name'],
            				'responsibility_center' => $row['res_center_code'].' - '.$row['res_center_name'],
            				'date_time' => date('M,d Y', strtotime($row['date_time'])).' '.date('h:i a', strtotime($row['date_time'])),
            				'is_training' => $row['is_training'] == 1 ? true : false,
            				'is_project_monitoring' =>  $row['is_project_monitoring'] == 1 ? true : false,
            				'name' => $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].' '.$row['extension']

            	);
            # code...
        }

      

	}else{
		$items1 = $this->GetModel->getUserPendingTransactions($this->transactions,array('created_by' => $this->session->userdata('user_id'))); 
		foreach ($items1 as $row ) {

            	$data[] = array(
            				'transaction_id' => $row['transaction_id'],
            				'pmas_no' => date('Y', strtotime($row['date_and_time_filed'])).' - '.date('m', strtotime($row['date_and_time_filed'])).' - '.$row['number'],
            				'date_and_time_filed' => date('M,d Y', strtotime($row['date_and_time_filed'])).' '.date('h:i a', strtotime($row['date_and_time_filed'])),
            				'type_mon_name' => $row['type_mon_name'],
            				'type_act_name' => $row['type_act_name'],
            				'responsibility_center' => $row['res_center_code'].' - '.$row['res_center_name'],
            				'date_time' => date('M,d Y', strtotime($row['date_time'])).' '.date('h:i a', strtotime($row['date_time'])),
            				'is_training' => $row['is_training'] == 1 ? true : false,
            				'is_project_monitoring' =>  $row['is_project_monitoring'] == 1 ? true : false,
            				'name' => $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].' '.$row['extension']


            	);
            # code...
        }

        
	}

	echo json_encode($data);
}
	
}
