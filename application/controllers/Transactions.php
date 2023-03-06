<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transactions extends CI_Controller {


	public $cso = 'cso';
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




	public function add() {

		$data = array(

					'pmas_no' => date('Y', time()).'-'.date('m', time()).'-'.$this->input->post('pmas_number'),
					// 'date_and_time_filed' => $this->input->post('date_and_time_filed'),
					'date_and_time_filed' =>  date("Y/m/d H:i:s", strtotime($this->input->post('date_and_time_filed'))),
					'type_of_monitoring_id' => $this->input->post('type_of_monitoring_id'),
					'type_of_activity_id' => $this->input->post('type_of_activity_id'),
					'under_type_of_activity_id' => $this->input->post('under_type_of_activity_id'),
					'date_time' =>  date("Y/m/d H:i:s", strtotime($this->input->post('date_time'))),
					'responsibility_center_id' =>   $this->input->post('responsibility_center_id'),
					'cso_id' => $this->input->post('cso_id'),

					
					
		);


		



		$result  = $this->AddModel->addData($this->transactions,$data);
		if ($result) {

				$id = $this->db->insert_id();
				$type_act_name =  $this->GetModel->get($this->type_of_activity,array('type_act_id' => $data['type_of_activity_id']))[0]['type_act_name'];




				if (strtolower($type_act_name) == 'training' ) {
						$where = array('transaction_id'=>$id);
						$data = array('is_training' => 1);
						$this->UpdateModel->update1($where,$data,$this->transactions);
				}else if (strtolower($type_act_name) == 'regular monthly project monitoring') {
						$where = array('transaction_id'=>$id);
						$data = array('is_project_monitoring' => 1);
						$this->UpdateModel->update1($where,$data,$this->transactions);
				}
		}




		// $params = array('cond' => $result, 'message' => 'Successfully Added');
		// $this->load->library('Condition', $params);


	}
}
