<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Responsibility_center extends CI_Controller {

	public $responsibility_center = 'responsibility_center';
	public $order_by_desc = 'desc';
	public $order_by_asc = 'asc';
	public $order_key = 'created';
	public $order_key_code = 'res_center_code';

	public function __construct()
    {
        parent::__construct();

         if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }
	
	public function index()
	{   
        $data['title'] = 'Responsibility Center';
       
		$this->load->view('admin/responsibility_center/responsibility_center',$data);
	}

	public function view_transactions(){

		 $data['title'] = $this->GetModel->get($this->responsibility_center,array('res_center_id' => $_GET['id']))[0]['res_center_name'];
       
		$this->load->view('admin/responsibility_center/view/transactions',$data);

	}

	public function add_t(){

		 $data['title'] = $this->GetModel->get($this->responsibility_center,array('res_center_id' => $_GET['id']))[0]['res_center_name'];
		$this->load->view('admin/responsibility_center/view/add_section/add',$data);
	}


	public function add() {

		$data = array(

					'res_center_code' => $this->input->post('res_code'),
					'res_center_name' => $this->input->post('center_name'),
					'created' =>  date('Y-m-d H:i:s', time())
		);

		//check code

		if ($this->GetModel->get($this->responsibility_center,array('res_center_code' => $data['res_center_code']))) {

				$data = array(
				'message' => 'Error Duplicate Code',
				'response' => false
				
				);
		}else {
			
			$result  = $this->AddModel->addData($this->responsibility_center,$data);

			if ($result) {

				$data = array(
				'message' => 'Data Saved Successfully',
				'response' => true
				);
			}else {

				$data = array(
				'message' => 'Error',
				'response' => false
				);
			}
		}
		
		


		echo json_encode($data);



		
	}

	public function get_center(){

		$data = [];

		$data = $this->GetModel->getALL($this->responsibility_center,$this->order_by_asc,$this->order_key_code); 
		echo json_encode($data);
	}

	// public function delete(){

	// 	$where = 'res_center_id ='.$_POST['id'];
	// 	$delete = $this->DeleteModel->delete($this->responsibility_center,$where);
	// 	$params = array('cond' => $delete, 'message' => 'Successfully Deleted');
	// 	$this->load->library('Condition', $params);
	// }


	public function delete(){


		if (is_array($_POST['id'])) {

			foreach ($_POST['id'] as $row) {
					$where = 'res_center_id ='.$row;
					$delete = $this->DeleteModel->delete($this->responsibility_center,$where);
			}
			$params = array('cond' => $delete, 'message' => 'Successfully Deleted');
			$this->load->library('Condition', $params);

		}else {
			$where = 'res_center_id ='.$_POST['id'];
			$delete = $this->DeleteModel->delete($this->responsibility_center,$where);
			$params = array('cond' => $delete, 'message' => 'Successfully Deleted');
			$this->load->library('Condition', $params);
		}
	}

	public function update(){


		$data = array(

				// 'res_center_code' => $_POST['update_center_code'],
				'res_center_name' =>$_POST['update_center_name']
		);

		$where = array('res_center_id'=>$_POST['res_center_id']);

		$update = $this->UpdateModel->update1($where,$data,$this->responsibility_center);
		$params = array('cond' => $update, 'message' => 'Successfully Updated');
		$this->load->library('Condition', $params);

		// if ($this->GetModel->get($this->responsibility_center,array('res_center_code' => $data['res_center_code']))) {

		// 		$data = array(
		// 		'message' => 'Error Duplicate Code',
		// 		'response' => false
				
		// 		);
		// }else {
			
		// 	$result = $this->UpdateModel->update1($where,$data,$this->responsibility_center);

		// 	if ($result) {

		// 		$data = array(
		// 		'message' => 'Data Updated Successfully',
		// 		'response' => true
		// 		);
		// 	}else {

		// 		$data = array(
		// 		'message' => 'Error',
		// 		'response' => false
		// 		);
		// 	}
		// }
		
		


		// echo json_encode($data);

	}
}
