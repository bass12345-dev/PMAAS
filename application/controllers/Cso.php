<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cso extends CI_Controller {

	public $cso = 'cso';
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
        $data['title'] = 'CSO';
       
		$this->load->view('admin/cso/cso',$data);
	}


	public function sample()
	{   
        $data['title'] = 'CSO';
       
	require_once(APPPATH.'helpers/TCPDF/tcpdf.php');



	$this->load->view('sample',$data);

	}





	public function add_trans(){

		 $data['title'] = $this->GetModel->get($this->cso,array('cso_id' => $_GET['id']))[0]['cso_name'];
		$this->load->view('admin/cso/view/add_section/add',$data);
	}



	public function view_transactions(){

		 $data['title'] = $this->GetModel->get($this->cso,array('cso_id' => $_GET['id']))[0]['cso_name'];
       
		$this->load->view('admin/cso/view/transactions',$data);

	}



	public function add() {

		// $s = $this->do_upload();




	
		$data = array(

					'cso_name' => $this->input->post('cor'),
					'created' =>  date('Y-m-d H:i:s', time()),
					'cor' => $this->do_upload(),
					
		);

		echo json_encode($data);

		// $result  = $this->AddModel->addData($this->cso,$data);
		// $params = array('cond' => $result, 'message' => 'Successfully Added');
		// $this->load->library('Condition', $params);

		
	}



	                            // 'profile_picture' => ($_FILES['userfile']['tmp_name'] === '' ) ? $this->input->post('image_name') : $this->upload_image(),

	function upload_image(){

    if (isset($_FILES['userfile'])) {

        $extension = explode('.', $_FILES['userfile']['name']);
        $new_name = rand().'.' . $extension[1];
        $destination = './uploads/profile_pic/'. $new_name;
        move_uploaded_file($_FILES['userfile']['tmp_name'], $destination);
        return $new_name;
      # code...
    }

}




	// public function do_upload()
   //      {
   //             $config['upload_path']          = './cso_files/';//file save path
   //          	$config['allowed_types']        = 'pdf';
   //          	$config['max_size']             = 100000;


   //          	 $this->load->library('upload', $config);


   //              if ($this->upload->do_upload($file))
   //              {
                        
   //                       $file = array('upload_data' => $this->upload->data());

   //                       $data = array(
	// 												'message' => 'Uploaded Successfully',
	// 												'response' => true,
	// 												'file_name' => date('Y-m-d H:i:s', time()).'_'. $file['upload_data']['file_name']
	// 												);
                      
   //              }
   //              else
   //              {
                       
   //                  $data = array(
	// 												'message' => $this->upload->display_errors(),
	// 												'response' => false,
	// 												'file_name' =>''
	// 												);   
                	
                        
   //              }

   //              return $data;

   //      }



	public function get(){

		$data = [];

		$data = $this->GetModel->getALL($this->cso,$this->order_by_asc,$this->order_key); 
		echo json_encode($data);
	}




	public function delete(){


		if (is_array($_POST['id'])) {

			foreach ($_POST['id'] as $row) {
					$where = 'cso_id ='.$row;
					$delete = $this->DeleteModel->delete($this->cso,$where);
			}
			$params = array('cond' => $delete, 'message' => 'Successfully Deleted');
			$this->load->library('Condition', $params);

		}else {
			$where = 'cso_id ='.$_POST['id'];
			$delete = $this->DeleteModel->delete($this->cso,$where);
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
