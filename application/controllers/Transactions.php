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

	public function add_transactions(){

		$data['title'] = 'Add Transactions';
		$data['activities'] = $this->GetModel->getALL($this->type_of_activity,$this->order_by_asc,$this->order_key_name); 
		$data['under_type_activies'] = $this->GetModel->getALL($this->under_type_of_activity,$this->order_by_asc,$this->order_under_type_act_name);
		$data['responsibility_centers'] = $this->GetModel->getALL($this->responsibility_center,$this->order_by_asc,$this->order_key_code); 
		$data['responsible'] =  $this->GetModel->getALL($this->responsible_section,$this->order_by_asc,$this->order_key);
		$data['cso'] = $this->GetModel->getALL($this->cso,$this->order_by_asc,$this->order_key);
		$this->load->view('admin/transactions/add_section/add_section',$data);
	}




	public function get_transactions(){

		$data = [];
		$items = $this->GetModel->getTransactions($this->transactions,$this->order_by_desc,'date_and_time_filed'); 


		if ($this->session->userdata('user_type') == 'admin') {
			// code...
	

		foreach ($items as $row ) {

            	$data[] = array(
            				'transaction_id' => $row['transaction_id'],
            				'pmas_no' => $row['pmas_no'],
            				'date_and_time_filed' => date('M,d Y', strtotime($row['date_and_time_filed'])).' '.date('h:i a', strtotime($row['date_and_time_filed'])),
            				'type_mon_name' => $row['type_mon_name'],
            				'type_act_name' => $row['type_act_name'],
            				'responsibility_center' => $row['res_center_code'].' - '.$row['res_center_name'],
            				'date_time' => date('M,d Y', strtotime($row['date_time'])).' '.date('h:i a', strtotime($row['date_time'])),
            				'is_training' => $row['is_training'] == 1 ? true : false,
            				'is_project_monitoring' =>  $row['is_project_monitoring'] == 1 ? true : false,

            	);
            # code...
        }

      

	}else {
		$data = [];
	}

	  echo json_encode($data);

}




	public function add() {

		$data = array(

					'pmas_no' => date('Y', time()).'-'.date('m', time()).'-'.$this->input->post('pmas_number'),
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
