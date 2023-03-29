<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');

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


		public function view_info() {

		$data['title'] = 'Transactions';
		$data['transaction_data'] = $this->GetModel->getTransaction_data($this->transactions,array('transaction_id' => $_GET['id']))[0];
		$data['activities'] = $this->GetModel->getALL($this->type_of_activity,$this->order_by_asc,$this->order_key_name); 
		$data['under_type_activies'] = $this->GetModel->getALL($this->under_type_of_activity,$this->order_by_asc,$this->order_under_type_act_name);
		$data['responsibility_centers'] = $this->GetModel->getALL($this->responsibility_center,$this->order_by_asc,$this->order_key_code); 
		$data['responsible'] =  $this->GetModel->getALL($this->responsible_section,$this->order_by_asc,$this->order_key);
		$data['cso'] = $this->GetModel->getALL($this->cso,$this->order_by_asc,$this->order_key);
		$this->load->view('admin/transactions/view/view_pmas',$data);

	}



	public function add_transactions(){

		$data['title'] = 'Add Transactions';
		$data['activities'] = $this->GetModel->getALL($this->type_of_activity,$this->order_by_asc,$this->order_key_name); 
		$data['under_type_activies'] = $this->GetModel->getALL($this->under_type_of_activity,$this->order_by_asc,$this->order_under_type_act_name);
		$data['responsibility_centers'] = $this->GetModel->getALL($this->responsibility_center,$this->order_by_asc,$this->order_key_code); 
		$data['responsible'] =  $this->GetModel->getALL($this->responsible_section,$this->order_by_asc,$this->order_key);
		$data['cso'] = $this->GetModel->getALL($this->cso,$this->order_by_asc,$this->order_key);
		
		$this->load->view('admin/transactions/add_section/add_section',$data);
	}


		public function count_pending_transactions(){

		$number = $this->CountModel->count1($this->transactions,array('status' => 'pending')); 
		echo $number;

	}


	public function get_pending_transactions(){
		$data = [];

		if ($this->session->userdata('user_type') == 'admin') {
		
	
		$items = $this->GetModel->getAdminPendingTransactions($this->transactions); 

		foreach ($items as $row ) {

				$a = '';
				$b = '';

				if ($row['remarks'] == '' AND $row['action_taken'] == null) {
					$b = '<div class="btn-group dropleft">
                                              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               <i class="ti-settings" style="font-size : 15px;"></i>
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:;" data-id="'.$row['transaction_id'].'" id="add-remarks">Add Remarks</a>
                                                <hr>
                                                <a class="dropdown-item" href="#" data-id="'.$row['transaction_id'].'">View Information</a>
                                              </di>';
					$a = '<a href="javascript:;" class="btn btn-danger btn-rounded p-1 pl-2 pr-2">no remarks</a>';
					// code...
				}else if ($row['remarks'] != '' AND $row['action_taken'] == null) {
					$b = '';
					$a = '<a href="javascript:;" class="btn btn-success btn-rounded p-1 pl-2 pr-2">remarks added</a>';
				}
				else if ($row['remarks'] != '' AND $row['action_taken'] != null) {
					$b = '<a href="javascript:;" id="completed" data-id="'.$row['transaction_id'].'" class="btn sub-button btn-rounded p-1 pl-2 pr-2"><i class="ti-check"></i></a>';
					$a = '<a href="javascript:;" class="btn btn-success btn-rounded p-1 pl-2 pr-2">Action Taken</a><br><a href="javascript:;" >'.date('M, d Y', strtotime($row['action_taken'])).'</a>';
				}

				// 

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
            				'name' => $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].' '.$row['extension'],
            				's' => $a,
            				'action' => $b,
            	);
            # code...
        }

      

	}else{
		$items1 = $this->GetModel->getUserPendingTransactions($this->transactions,array('created_by' => $this->session->userdata('user_id'))); 
		foreach ($items1 as $row ) {


				$a = '';
				$b = '';

				if ($row['remarks'] == '' AND $row['action_taken'] == null) {
					$b = '<ul class="d-flex justify-content-center">
                                <li class="mr-3 "><a href="javascript:;" class="text-secondary action-icon" data-id="'.$row['transaction_id'].'" data-a="" data-b=""  id="view_more_transaction"><i class="fa fa-eye"></i></a></li>
                                <li><a href="javascript:;" data-id=""  id="delete-activity"  class="text-danger action-icon"><i class="ti-trash"></i></a></li>
                                </ul>';
					$a = '<a href="javascript:;" class="btn btn-secondary btn-rounded p-1 pl-2 pr-2">Waiting for Remarks....</a>';
					
				}else if ($row['remarks'] != '' AND $row['action_taken'] == null) {
					$b = '<ul class="d-flex justify-content-center">
                                <li class="mr-3 "><a href="javascript:;" class="text-secondary action-icon" data-id="'.$row['transaction_id'].'" data-a="" data-b=""  id="view_more_transaction"><i class="fa fa-eye"></i></a></li>
                                </ul>';
					$a = '<a href="javascript:;" class="btn btn-danger btn-rounded p-1 pl-2 pr-2">remarks added</a><br><a href="javascript:;"  data-id="'.$row['transaction_id'].'" id="view-remarks">View Remarks</a>';
					
				}
				else if ($row['remarks'] != '' AND $row['action_taken'] != null) {
					$b = '<ul class="d-flex justify-content-center">
                                <li class="mr-3 "><a href="javascript:;" class="text-secondary action-icon" data-id="'.$row['transaction_id'].'" data-a="" data-b=""  id="view_more_transaction" ><i class="fa fa-eye"></i></a></li>
                                </ul>';
					$a = '<a href="javascript:;" class="btn btn-success btn-rounded p-1 pl-2 pr-2">Waiting for Confirmation</a>';
				}


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
            				'name' => $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].' '.$row['extension'],
            				's' => $a,
            				'action' => $b,
            				// 'action' => '<ul class="d-flex justify-content-center">
                //                 <li class="mr-3 "><a href="javascript:;" class="text-secondary action-icon" data-id="" data-a="" data-b=""  id="view_more_transaction"><i class="fa fa-eye"></i></a></li>
                //                 <li><a href="javascript:;" data-id=""  id="delete-activity"  class="text-danger action-icon"><i class="ti-trash"></i></a></li>
                //                 </ul>',
            				// 'action' => $row['remarks'] == '' ? '<div class="btn-group dropleft">
                //                               <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                //                                <i class="ti-settings" style="font-size : 15px;"></i>
                //                               </button>
                //                               <div class="dropdown-menu">
                //                                 <a class="dropdown-item" href="javascript:;" data-id="'.$row['transaction_id'].'" id="add-remarks">Add Remarks</a>
                //                                 <hr>
                //                                 <a class="dropdown-item" href="#">View Information</a>
                //                               </di' : '',


            	);
            # code...
        }

        
	}

	echo json_encode($data);
}



	public function load_admin_pending_l($show){


		
		$data = [];	 
		if ($this->session->userdata('user_type') == 'admin') {
		$items = $this->GetModel->getAdminPendingTransactionslimit($this->transactions,$show);
		foreach ($items as $row ) {


				$a = '';
				$b = '';

				if ($row['remarks'] == '' AND $row['action_taken'] == null) {
					$b = '<div class="btn-group dropleft">
                                              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               <i class="ti-settings" style="font-size : 15px;"></i>
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:;" data-id="'.$row['transaction_id'].'" id="add-remarks">Add Remarks</a>
                                                <hr>
                                                <a class="dropdown-item" href="#">View Information</a>
                                              </di>';
					$a = '<a href="javascript:;" class="btn btn-danger btn-rounded p-1 pl-2 pr-2">no remarks</a>';
					// code...
				}else if ($row['remarks'] != '' AND $row['action_taken'] == null) {
					$b = '';
					$a = '<a href="javascript:;" class="btn btn-success btn-rounded p-1 pl-2 pr-2">remarks added</a>';
				}
				else if ($row['remarks'] != '' AND $row['action_taken'] != null) {
					$b = '<a href="javascript:;" id="completed" data-id="'.$row['transaction_id'].'" class="btn sub-button btn-rounded p-1 pl-2 pr-2 mt-2"><i class="ti-check"></i></a>';
					$a = '<a href="javascript:;" class="btn btn-success btn-rounded p-1 pl-2 pr-2 mb-1">Action Taken</a><br>
					<a href="javascript:;" >'.date('M, d Y', strtotime($row['action_taken'])).'</a>';
				}

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
            				'name' => $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].' '.$row['extension'],
            				's' => $a,
            				'actions' => $b,

            	);
            # code...
        }

    }

        echo json_encode($data);
	}



public function view_remarks(){


		$data = [];
		$where = array('transaction_id' => $_POST['id']);
		$data['remarks'] = $this->GetModel->get($this->transactions,$where)[0]['remarks']; 
		$data['transaction_id'] = $this->GetModel->get($this->transactions,$where)[0]['transaction_id']; 
		echo json_encode($data);
		
	}
	
}
