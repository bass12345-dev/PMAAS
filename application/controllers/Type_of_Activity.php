<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_of_activity extends CI_Controller {

	public $type_of_activity = 'type_of_activity';
	public $under_type_of_activity = 'under_type_of_activity';
	public $order_by_desc = 'desc';
	public $order_by_asc = 'asc';
	public $order_key = 'created';
	public $order_key_name = 'type_act_name';
	public $order_under_type_act_name = 'type_act_name';

	public function __construct()
    {
        parent::__construct();

         if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }
	
	public function index()
	{   
        $data['title'] = 'Type of Activity';
		$this->load->view('admin/type_of_activity/type_of_activity',$data);
	}


	public function add() {

		$data = array(
					'type_act_name' => $this->input->post('activity'),
					'created' =>  date('Y-m-d H:i:s', time())
		);

		$add  = $this->AddModel->addData($this->type_of_activity,$data);
		$params = array('cond' => $add, 'message' => 'Data Added Successfully');
		$this->load->library('Condition', $params);
	}


	public function add_(){
		$data = array(

				'under_type_act_name' => $_POST['under_type_activity'],
				'typ_ac_id' => $_POST['act_id'],
				'created' =>  date('Y-m-d H:i:s', time())
		);
		$add  = $this->AddModel->addData($this->under_type_of_activity,$data);
		$params = array('cond' => $add, 'message' => 'Data Added Successfully');
		$this->load->library('Condition', $params);
	}


	public function get_under_type(){

		$data = [];
		$where = array('typ_ac_id' => $_GET['id']);
		$data = $this->GetModel->get($this->under_type_of_activity,$where); 
		echo json_encode($data);
	}

	public function get_type(){

		$data = [];

		$data = $this->GetModel->getALL($this->type_of_activity,$this->order_by_asc,$this->order_key_name); 
		echo json_encode($data);
	}

	public function delete(){

		$where = 'type_act_id ='.$_POST['id'];
		$delete = $this->DeleteModel->delete($this->type_of_activity,$where);
		$params = array('cond' => $delete, 'message' => 'Successfully Deleted');
		$this->load->library('Condition', $params);
	}

	public function update(){


		$data = array(

				'type_act_name' => $_POST['update_activity'],
			
		);

		$where = array('type_act_id'=>$_POST['activity_id']);

		$update = $this->UpdateModel->update1($where,$data,$this->type_of_activity);
		$params = array('cond' => $update, 'message' => 'Successfully Updated');
		$this->load->library('Condition', $params);

	}
}
