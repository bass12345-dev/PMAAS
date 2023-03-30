<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');

class Users extends CI_Controller {


	public $users = 'users';
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
        $data['title'] = 'Users';
       	
		$this->load->view('admin/users/users',$data);
	}




	


		public function add() {

	
		$data = array(

					'first_name' => $this->input->post('first_name'),
					'middle_name' => ($this->input->post('middle_name') == '') ?  '' : $this->input->post('first_name') ,
					'last_name' => $this->input->post('last_name'),
					'extension' => ($this->input->post('extension') == '') ?  '' : $this->input->post('extension') ,
					'user_type' => $this->input->post('user_type'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'created' =>  date('Y-m-d H:i:s', time()),
				  	'profile_pic' => ($_FILES['profile_pic']['tmp_name'] === '' ) ? '' : $this->upload_image(),
				  	'user_status' => 'active',


					
					
		);


			//check username

		if ($this->GetModel->get($this->users,array('username' => $data['username']))) {

				$data = array(
				'message' => 'Error Duplicate Username',
				'response' => false
				
				);
		}else {
			
			$result  = $this->AddModel->addData($this->users,$data);

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


		function upload_image(){

    if (isset($_FILES['profile_pic'])) {

        $extension = explode('.', $_FILES['profile_pic']['name']);
        $new_name = rand().'.' . $extension[1];
        $destination = './uploads/profile_pic/'. $new_name;
        move_uploaded_file($_FILES['profile_pic']['tmp_name'], $destination);
        return $new_name;
      # code...
    }

}



	public function get(){

		$data = [];
		$where = array('user_status' => 'active');
		$item = $this->GetModel->get($this->users,$where); 

		foreach ($item as $row) {


			$a = '';

			if ($row['user_type'] == 'admin') {
				$a = '';
			}else {
				$a = '<ul class="d-flex justify-content-center"><li><a href="'.base_url().'View/user_profile?id='.$row['user_id'].'" data-id="'.$row['user_id'].'"   class="text-secondary action-icon"><i class="ti-eye"></i></a></li><li><a href="javascript:;" data-id="'.$row['user_id'].'"  id="delete-user" data-set="inactive" class="text-danger action-icon"><i class="ti-close"></i></a></li></ul>';
			}

				
				$data[] = array(

						'name' => $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].' '.$row['extension'],
						'user_type' => $row['user_type'],
						'username' => $row['username'],
						'user_id' => $row['user_id'],
						
						'action' => $a

				);
		}

		echo json_encode($data);
	}


	public function get_inactive(){

		$data = [];
		$where = array('user_status' => 'inactive');
		$item = $this->GetModel->get($this->users,$where); 

		foreach ($item as $row) {


			$a = '';

			if ($row['user_type'] == 'admin') {
				$a = '';
			}else {
				$a = '<ul class="d-flex justify-content-center"><li><a href="javascript:;" data-id="'.$row['user_id'].'"  id="delete-user"  class="text-secondary action-icon"><i class="ti-eye"></i></a></li><li><a href="javascript:;" data-id="'.$row['user_id'].'" data-set="active" id="active-user"  class="text-success action-icon"><i class="ti-check"></i></a></li></ul>';
			}

				
				$data[] = array(

						'name' => $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].' '.$row['extension'],
						'user_type' => $row['user_type'],
						'username' => $row['username'],
						'user_id' => $row['user_id'],
						// 'action2' => ($this->session->userdata('user_type') == 'admin') ? '<li><a href="javascript:;" data-id="'.$row['user_id'].'"  id="delete-user"  class="text-danger action-icon"><i class="ti-trash"></i></a></li>' : ' ',
						// 'action1' => ($this->session->userdata('user_type') == 'admin') ? '<li><a href="javascript:;" data-id="'.$row['user_id'].'"  id="delete-user"  class="text-secondary action-icon"><i class="ti-edit"></i></a></li>' : '<li><a href="javascript:;" data-id="'.$row['user_id'].'"  id="view-user"  class="text-secondary action-icon"><i class="ti-eye"></i></a></li>',
						'action' => $a

				);
		}

		echo json_encode($data);
	}



	public function update_user_status(){

		$data = array(

				'user_status' => $this->input->post('status'),
			
		);

		$where = 'user_id ='.$_POST['id'];

		$update = $this->UpdateModel->update1($where,$data,$this->users);
		$params = array('cond' => $update, 'message' => 'Success');
		$this->load->library('Condition', $params);
		

	}

	// public function delete(){



	// 	$data = array(

	// 			'user_status' => 'inactive',
			
	// 	);

	// 	$where = 'user_id ='.$_POST['id'];

	// 	$update = $this->UpdateModel->update1($where,$data,$this->users);
	// 	$params = array('cond' => $update, 'message' => 'Success');
	// 	$this->load->library('Condition', $params);
	// 	// $where = 'user_id ='.$_POST['id'];
	// 	// $delete = $this->DeleteModel->delete($this->users,$where);
	// 	// $params = array('cond' => $delete, 'message' => 'Successfully Deleted');
	// 	// $this->load->library('Condition', $params);
	// }



	// public function set_to_active(){



	// 	$data = array(

	// 			'user_status' => 'active',
			
	// 	);

	// 	$where = 'user_id ='.$_POST['id'];

	// 	$update = $this->UpdateModel->update1($where,$data,$this->users);
	// 	$params = array('cond' => $update, 'message' => 'Success');
	// 	$this->load->library('Condition', $params);
	// 	// $where = 'user_id ='.$_POST['id'];
	// 	// $delete = $this->DeleteModel->delete($this->users,$where);
	// 	// $params = array('cond' => $delete, 'message' => 'Successfully Deleted');
	// 	// $this->load->library('Condition', $params);
	// }



}
