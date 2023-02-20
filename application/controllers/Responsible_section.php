<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Responsible_section extends CI_Controller {


	public $responsible_section = 'type_of_monitoring';
	public $order_by_desc = 'desc';
	public $order_by_asc = 'asc';
	public $order_key = 'created';

	public function __construct()
    {
        parent::__construct();

         if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }


	public function index()
	{	
		$data['title'] = 'Responsible Section';
		$this->load->view('admin/responsible_section/responsible_section',$data);
	}


	public function add() {

		$data = array(

					'type_mon_name' => $this->input->post('responsible_section'),
					'created' =>  date('Y-m-d H:i:s', time())
		);

		$add  = $this->AddModel->addData($this->responsible_section,$data);
		$params = array('cond' => $add, 'message' => 'Data Added Successfully');
		$this->load->library('Condition', $params);

	}

	public function get(){

		$data = [];

		$data = $this->GetModel->getALL($this->responsible_section,$this->order_by_asc,$this->order_key); 
		echo json_encode($data);
	}

	public function delete(){

		$where = 'type_mon_id ='.$_POST['id'];
		$delete = $this->DeleteModel->delete($this->responsible_section,$where);
		$params = array('cond' => $delete, 'message' => 'Successfully Deleted');
		$this->load->library('Condition', $params);
	}


	public function update(){


		$data = array(

				'type_mon_name' => $_POST['update_responsible'],
			
		);

		$where = array('type_mon_id'=>$_POST['responsible_id']);

		$update = $this->UpdateModel->update1($where,$data,$this->responsible_section);
		$params = array('cond' => $update, 'message' => 'Successfully Updated');
		$this->load->library('Condition', $params);

	}
}
