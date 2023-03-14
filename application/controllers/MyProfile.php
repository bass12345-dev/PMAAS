<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyProfile extends CI_Controller {

	public $users = 'users';

	public function __construct()
    {
        parent::__construct();

         if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }
    


	public function index()
	{
		$data['title'] = 'My Profile';
		
		$this->load->view('admin/myprofile/my_profile',$data);
	}

	public function check_old_password(){
		$password = $this->input->post('pass');
		$where = array('user_id' => $this->session->userdata('user_id'));
		$user = $this->GetModel->get($this->users,$where)[0];

		if ($password == $user['password']) {

			$data = array(
				'message' => "Success",
				'response' => true
				
				);
			// code...
		}else {
			

				$data = array(
				'message' => "Dont't Match",
				'response' => false
				);
			
		}
	
		echo json_encode($data);
	}
	public function update_password(){


		$data = array(
				'password' =>  $this->input->post('pass')
		);

		$where = array('user_id'=> $this->session->userdata('user_id'));

		$update = $this->UpdateModel->update1($where,$data,$this->users);
		$params = array('cond' => $update, 'message' => 'Successfully Updated');
		$this->load->library('Condition', $params);
	}

	public function get_my_profile(){

		$data = [];
		$item = $this->GetModel->get($this->users,array('user_id' => $this->session->userdata('user_id')))[0];
		$data['name'] = $item['first_name'].' '.$item['middle_name'].' '.$item['last_name'].' '.$item['extension'];
		$data['first_name'] = $item['first_name'];
		$data['middle_name'] = $item['middle_name'];
		$data['last_name'] = $item['last_name'];
		$data['extension'] = $item['extension'];
		$data['username'] = $item['username'];
		$data['user_type'] = $item['user_type'];
		$data['profile_pic'] = base_url().'uploads/profile_pic/'.$item['profile_pic'];
		echo json_encode($data);
	}
	public function update_profile_pic(){

		// $data = array(

		// 				'profile_pic' => ($_FILES['profile_pic']['tmp_name'] === '' ) ? '' : $this->upload_image(),
						
					
		// 		);

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
	public function update_personal_info() {


			$data = array(

						'first_name' => $this->input->post('first_name'),
						'middle_name' => $this->input->post('middle_name'),
						'last_name' => $this->input->post('last_name'),
						'extension' => $this->input->post('extension'),
						'username' => $this->input->post('username'),
					
				);

			$where = array('user_id'=>$this->session->userdata('user_id'));

			

				//check username

						
						$update = $this->UpdateModel->update1($where,$data,$this->users);

						if ($update) {

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
			
					
				
					echo json_encode($data);


	}

}
