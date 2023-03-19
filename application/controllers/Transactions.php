<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transactions extends CI_Controller {


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
		$data['title'] = 'Transactions';
		$this->load->view('admin/transactions/transactions',$data);
	}


	public function view_info() {

		$data['title'] = 'Transactions';
		$data['transaction_data'] = $this->GetModel->getTransaction_data($this->transactions,array('transaction_id' => $_GET['id']))[0];
		$data['responsible'] =  $this->GetModel->getALL($this->responsible_section,$this->order_by_asc,$this->order_key);
		$this->load->view('admin/transactions/view/view_more',$data);

	}

	


	public function get_last_pmas_no(){

		$last = $this->GetModel->get_last_pmas_number();

		echo $last['number'] + 1;

	}


	



	public  function load_user_chart(){

			$year = $this->input->post('year');
			$months = array();
			$transactions = array();

			for ($m = 1; $m <= 12; $m++) {

				$transaction = $this->GetModel->get_user_chart($this->transactions,$m,$year,array('created_by' => $this->session->userdata('user_id')));
				array_push($transactions, $transaction);
				$month =  date('M', mktime(0, 0, 0, $m, 1));
				array_push($months, $month);

			}

			$data['label'] = $months;
			$data['data'] = $transactions;
			echo json_encode($data);
	}



	public  function load_admin_chart(){

			$year = $this->input->post('year');
			$months = array();
			$transactions = array();

			for ($m = 1; $m <= 12; $m++) {

				$transaction = $this->GetModel->get_admin_chart($this->transactions,$m,$year);
				array_push($transactions, $transaction);
				$month =  date('M', mktime(0, 0, 0, $m, 1));
				array_push($months, $month);

			}

			$data['label'] = $months;
			$data['data'] = $transactions;
			echo json_encode($data);
	}



	public function load_admin_pending_l($show){


		
		$data = [];	 
		$items = $this->GetModel->getAdminPendingTransactionslimit($this->transactions,$show);
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
            				'name' => $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].' '.$row['extension'],
            				's' => $row['remarks'] == '' ? '<a href="javascript:;" class="btn btn-danger btn-rounded p-1 pl-2 pr-2">no remarks</a>' : '<a href="javascript:;" class="btn btn-success btn-rounded p-1 pl-2 pr-2">remarks added</a>',
            				'actions' => $row['remarks'] == '' ? '<td class="py-1 px-2"><div class="btn-group dropleft">
                                              <button type="button" class="btn btn-secondary btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               <i class="ti-settings" style="font-size : 15px;"></i>
                                              </button>
                                              <div class="dropdown-menu ">
                                                <a class="dropdown-item" href="#" id="add-remarks" data-id="'.$row['transaction_id'].'"><i class="ti-plus mr-2" style="font-size : 15px;"></i>Add Remarks</a>
                                              </div>
                                            </div></td>' : '',

            	);
            # code...
        }

        echo json_encode($data);
	}
	


	public function get_transactions(){

		$data = [];



		if ($this->session->userdata('user_type') == 'admin') {
		
	
		$items = $this->GetModel->getTransactions($this->transactions,$this->order_by_desc,'date_and_time_filed'); 

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

      

	}else {
		$items1 = $this->GetModel->getUserCompletedTransactions($this->transactions,array('created_by' => $this->session->userdata('user_id'))); 
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


public function get_user_transactions_num(){


			$data = [];
            
          $num_transactions =  $this->GetModel->getUserCompletedTransactions($this->transactions,array('created_by' => $this->session->userdata('user_id'))); 
            foreach ($num_transactions as $count) {
                $data[] = $count;
            }
        
        echo json_encode($data);
}


	public function add_remarks(){


		$data = array(
					'remarks' => $this->input->post('content'),
					
		);
		$where = array('transaction_id'=>$this->input->post('id'));
		$update = $this->UpdateModel->update1($where,$data,$this->transactions);
		$params = array('cond' => $update, 'message' => 'Successfully Updated');
		$this->load->library('Condition', $params);


		
	}



	public function add() {

		// $last = $this->GetModel->get_last_pmas_number();

		// // echo date('Y', time()).date('m', time()) ;
		// // echo date('Y', strtotime($last['pmas_no'])).date('m', strtotime($last['pmas_no'])) ;

		// $number = 0;

		// if (date('Y', strtotime($last['pmas_no'])).date('m', strtotime($last['pmas_no'])) < date('Y', time()).date('m', time())) {
				

		// 		$number = 1;
		// }else {

		// 	$number =  $last['number'] + 1;
		// }


		
		$data = array(
					'pmas_no' => date('Y', time()).'-'.date('m', time()).'-'.$this->input->post('pmas_number'),
					'number' => $this->input->post('pmas_number'),
					// 'date_and_time_filed' => $this->input->post('date_and_time_filed'),
					// 'date_and_time_filed' =>  date("Y/m/d H:i:s", strtotime($this->input->post('date_and_time_filed'))),
					'date_and_time_filed' =>  date('Y-m-d H:i:s', time()),
					'type_of_monitoring_id' => $this->input->post('type_of_monitoring_id'),
					'type_of_activity_id' => $this->input->post('type_of_activity_id'),
					'under_type_of_activity_id' => $this->input->post('under_type_of_activity_id'),
					'date_time' =>  date("Y/m/d H:i:s", strtotime($this->input->post('date_time'))),
					'responsibility_center_id' =>   $this->input->post('responsibility_center_id'),
					'cso_id' => $this->input->post('cso_id'),
					'created_by' => $this->session->userdata('user_id')		
		);


		if (!$this->GetModel->get($this->transactions,array('pmas_no' => $data['pmas_no']))) {



		$result  = $this->AddModel->addData($this->transactions,$data);
		if ($result) {

				$id = $this->db->insert_id();
				$type_act_name =  $this->GetModel->get($this->type_of_activity,array('type_act_id' => $data['type_of_activity_id']))[0]['type_act_name'];
				$resp = [];

				$training_data = array(

							'transact_id' => $id,
							'title_of_training' => $this->input->post('title_of_training'),
							'no_of_participants' => $this->input->post('number_of_participants'),
							'female'  => $this->input->post('female'),
							'over_all_ratings'  => $this->input->post('over_all_ratings'),
							'name_of_trainor'  => $this->input->post('name_of_trainor'),
				);

				$project_data = array(

						'transac_id' => $id,
						'project_title' => $this->input->post('project_title'),
						'period' => date("Y/m/d", strtotime($this->input->post('period'))),
						'attendance_present' => $this->input->post('present'),
						'attendance_absent' => $this->input->post('absent'),
						'nom_borrowers_delinquent' => $this->input->post('deliquent'),
						'nom_borrowers_overdue' => $this->input->post('overdue'),
						'total_production' => $this->input->post('total_production'),
						'total_collection_sales' => $this->input->post('total_collection'),
						'total_released_purchases' => $this->input->post('total_released'),
						'total_delinquent_account' => $this->input->post('total_deliquent'),
						'total_over_due_account' => $this->input->post('total_overdue'),
						'cash_in_bank' => $this->input->post('cash_in_bank'),
						'cash_on_hand' => $this->input->post('cash_on_hand'),
						'inventories' => $this->input->post('inventories'),

				);




				if (strtolower($type_act_name) == 'training' ) {
						$where = array('transaction_id'=>$id);
						$data = array('is_training' => 1);
						$update_training = $this->UpdateModel->update1($where,$data,$this->transactions);
						if ($update_training) {
								$add_training = $this->AddModel->addData($this->trainings,$training_data);
								if ($add_training) {

									$resp = array(
											'message' => 'Success',
											'response' => true
										);


									// code...
								}else {

									$resp = array(
											'message' => 'error add training',
											'response' => false
										);

								}
							// code...
						}else {

								$resp = array(
											'message' => 'Error Update',
											'response' => false
										);
						}
						
				}else if (strtolower($type_act_name) == 'regular monthly project monitoring') {
						$where = array('transaction_id'=>$id);
						$data = array('is_project_monitoring' => 1);
						$update_project = $this->UpdateModel->update1($where,$data,$this->transactions);
						if ($update_project) {
								$add_project = $this->AddModel->addData($this->project_monitoring,$project_data);
								if ($add_project) {

									$resp = array(
											'message' => 'Success',
											'response' => true
										);


									// code...
								}else {

									$resp = array(
											'message' => 'error add project',
											'response' => false
										);

								}
							// code...
						}else {

								$resp = array(
											'message' => 'Error Update',
											'response' => false
										);
						}
				}



		$resp = array(
				'message' => 'Successfully Added',
				'response' => true
			);
		}else {

			$resp = array(
				'message' => 'Error',
				'response' => false
			);

		}

	}else {


		$resp = array(
				'message' => 'Error Duplicate PMAS NO',
				'response' => false
			);

	}


		echo json_encode($resp);





	}
}
