<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cso extends CI_Controller {

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

		if ($this->session->userdata('user_type') == 'admin' ) {
        	$data['title'] = 'CSO';       
			$this->load->view('admin/cso/cso',$data);
        }else {
        	echo 'error';
        }
        
	}


	public function sample()
	{   
        $data['title'] = 'CSO';
       
	require_once(APPPATH.'helpers/TCPDF/tcpdf.php');



	$this->load->view('sample',$data);

	}


		public function add_trans2(){

		 $data['title'] = $this->GetModel->get($this->cso,array('cso_id' => $_GET['id']))[0]['cso_name'];
		$this->load->view('admin/cso/view/add_section/add',$data);
	}





	public function add_trans(){

		 $data['title'] = $this->GetModel->get($this->cso,array('cso_id' => $_GET['id']))[0]['cso_name'];
		 $data['activities'] = $this->GetModel->getALL($this->type_of_activity,$this->order_by_asc,$this->order_key_name); 
		 $data['under_type_activies'] = $this->GetModel->getALL($this->under_type_of_activity,$this->order_by_asc,$this->order_under_type_act_name);
		 $data['responsibility_centers'] = $this->GetModel->getALL($this->responsibility_center,$this->order_by_asc,$this->order_key_code); 
		 $data['responsible'] =  $this->GetModel->getALL($this->responsible_section,$this->order_by_asc,$this->order_key);
		$this->load->view('admin/cso/view/add_section/add1',$data);
	}



	public function view_transactions(){

		$data['title'] = $this->GetModel->get($this->cso,array('cso_id' => $_GET['id']))[0]['cso_name'];
     
		$this->load->view('admin/cso/view/transactions',$data);

	}


	public function view_profile(){

		if ($this->session->userdata('user_type') == 'admin' ) {
        	$data['title'] = 'View Profile';
		$data['data'] = $this->GetModel->get($this->cso,array('cso_id' => $_GET['id']))[0];
		$this->load->view('admin/cso/view/view_profile',$data);
        }else {
        	echo 'error';
        }
		

	}

	public function print(){


		$data['title'] = 'CSO';
		require_once(APPPATH.'helpers/TCPDF/tcpdf.php');
		$this->load->view('sample',$data);

	}


	public function get_profile(){

		$data = [];

		$data['data'] = $this->GetModel->get($this->cso,array('cso_id' => $_POST['id']))[0];
		echo json_encode($data);

	}

	public function add_transaction() {

		$data = array(

					'pmas_no' => date('Y', time()).'-'.date('m', time()).'-'.$this->input->post('pmas_number'),
					// 'date_and_time_filed' => $this->input->post('date_and_time_filed'),
					'date_and_time_filed' =>  date("Y/m/d H:i:s", strtotime($this->input->post('date_and_time_filed'))),
					'type_of_monitoring_id' => $this->input->post('type_of_monitoring_id'),
					'type_of_activity_id' => $this->input->post('type_of_activity_id'),
					'under_type_of_activity_id' => $this->input->post('under_type_of_activity_id'),
					'date_time' =>  date("Y/m/d H:i:s", strtotime($this->input->post('date_time'))),
					'responsibility_center_id' =>   $this->input->post('responsibility_center_id'),
					'cso_id' => $this->input->post('cso_id')
					
					
		);

		
		
		$result  = $this->AddModel->addData($this->transactions,$data);
		$params = array('cond' => $result, 'message' => 'Successfully Added');
		$this->load->library('Condition', $params);


	}



	public function add() {
		$data = array(

					'cso_name' => $this->input->post('cso'),
					'address' => $this->input->post('address'),
					'contact_person' => $this->input->post('contact_person'),
					'contact_number' => $this->input->post('contact_number'),
					'email' => $this->input->post('email'),
					'created' =>  date('Y-m-d H:i:s', time()),
					'cor' => ($_FILES['cor']['tmp_name'] === '' ) ? '' : $this->upload_cor(),
					'by_laws' =>  ($_FILES['bylaws']['tmp_name'] === '' ) ? '' : $this->upload_bylaws(),
					'article' => ($_FILES['article']['tmp_name'] === '' ) ? '' : $this->upload_articles(),
					
		);

	

		$result  = $this->AddModel->addData($this->cso,$data);
		$params = array('cond' => $result, 'message' => 'Successfully Added');
		$this->load->library('Condition', $params);

		
	}



	                            // 'profile_picture' => ($_FILES['userfile']['tmp_name'] === '' ) ? $this->input->post('image_name') : $this->upload_image(),



	function upload_cor(){

    if (isset($_FILES['cor'])) {

        $extension = explode('.', $_FILES['cor']['name']);
        $new_name = rand().'.' . $extension[1];
        $destination = './uploads/cso_files/cor/'. $new_name;
        move_uploaded_file($_FILES['cor']['tmp_name'], $destination);
        return $new_name;
      # code...
    }

}


	function upload_bylaws(){

    if (isset($_FILES['bylaws'])) {

        $extension = explode('.', $_FILES['bylaws']['name']);
        $new_name = rand().'.' . $extension[1];
        $destination = './uploads/cso_files/bylaws/'. $new_name;
        move_uploaded_file($_FILES['bylaws']['tmp_name'], $destination);
        return $new_name;
      # code...
    }

}

	function upload_articles(){

    if (isset($_FILES['article'])) {

        $extension = explode('.', $_FILES['article']['name']);
        $new_name = rand().'.' . $extension[1];
        $destination = './uploads/cso_files/articles/'. $new_name;
        move_uploaded_file($_FILES['article']['tmp_name'], $destination);
        return $new_name;
      # code...
    }

}



	private function do_upload_bylaws()
        {
               $config['upload_path']          = './uploads/cso_files/articles/';//file save path
            	$config['allowed_types']        = 'pdf';
            	$config['max_size']             = 100000;


            	 $this->load->library('upload', $config);


                if ($this->upload->do_upload('bylaws'))
                {
                        
                         $file = array('upload_data' => $this->upload->data());

                         $data = array(
													'message' => 'Uploaded Successfully',
													'response' => true,
													'file_name' => date('Y-m-d H:i:s', time()).'_'. $file['upload_data']['file_name'].'.'.rand()
													);
                      
                }
                else
                {
                       
                    $data = array(
													'message' => $this->upload->display_errors(),
													'response' => false,
													'file_name' =>''
													);   
                	
                        
                }

                return $data;

        }




	private function do_upload_articles()
        {
               $config['upload_path']          = './uploads/cso_files/articles/';//file save path
            	$config['allowed_types']        = 'pdf';
            	$config['max_size']             = 100000;


            	 $this->load->library('upload', $config);


                if ($this->upload->do_upload('article'))
                {
                        
                         $file = array('upload_data' => $this->upload->data());

                         $data = array(
													'message' => 'Uploaded Successfully',
													'response' => true,
													'file_name' => date('Y-m-d H:i:s', time()).'_'. $file['upload_data']['file_name'].'.'.rand()
													);
                      
                }
                else
                {
                       
                    $data = array(
													'message' => $this->upload->display_errors(),
													'response' => false,
													'file_name' =>''
													);   
                	
                        
                }

                return $data;

        }








	public function do_upload_cor()
        {
               $config['upload_path']          = './uploads/cso_files/cor/';//file save path
            	$config['allowed_types']        = 'pdf';
            	$config['max_size']             = 100000;


            	 $this->load->library('upload', $config);


                if ($this->upload->do_upload('cor'))
                {
                        
                         $file = array('upload_data' => $this->upload->data());

                         $data = array(
													'message' => 'Uploaded Successfully',
													'response' => true,
													'file_name' => date('Y-m-d H:i:s', time()).'_'. $file['upload_data']['file_name'].'.'.rand()
													);
                      
                }
                else
                {
                       
                    $data = array(
													'message' => $this->upload->display_errors(),
													'response' => false,
													'file_name' =>''
													);   
                	
                        
                }

                return $data;

        }



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

					'cso_name' => $this->input->post('update_cso'),
					'address' => $this->input->post('update_address'),
					'contact_person' => $this->input->post('update_contact_person'),
					'contact_number' => $this->input->post('update_contact_number'),
					'email' => $this->input->post('update_email'),
		);

		$where = array('cso_id'=>$this->input->post('cso_id'));

		$update = $this->UpdateModel->update1($where,$data,$this->cso);
		$params = array('cond' => $update, 'message' => 'Successfully Updated');
		$this->load->library('Condition', $params);


	}



	public function update_cor(){


		$data = array(

					
					'cor' => ($_FILES['update_cor']['tmp_name'] === '' ) ? $this->input->post('cor_name') : $this->upload_update_cor(),
					
					
		);

	
		$where = array('cso_id'=>$this->input->post('cor_cso_id'));

		$update = $this->UpdateModel->update1($where,$data,$this->cso);
		$params = array('cond' => $update, 'message' => 'Successfully Updated');
		$this->load->library('Condition', $params);




	}

	function upload_update_cor(){

    if (isset($_FILES['update_cor'])) {

        $extension = explode('.', $_FILES['update_cor']['name']);
        $new_name = rand().'.' . $extension[1];
        $destination = './uploads/cso_files/cor/'. $new_name;
        move_uploaded_file($_FILES['update_cor']['tmp_name'], $destination);
        return $new_name;
      # code...
    }

}


    public function update_bylaws(){


		$data = array(

					
					'by_laws' => ($_FILES['update_bylaws']['tmp_name'] === '' ) ? $this->input->post('bylaws_name') : $this->upload_update_bylaws(),
					
					
		);

	
		$where = array('cso_id'=>$this->input->post('bylaws_cso_id'));

		$update = $this->UpdateModel->update1($where,$data,$this->cso);
		$params = array('cond' => $update, 'message' => 'Successfully Updated');
		$this->load->library('Condition', $params);




	}




function upload_update_bylaws(){

    if (isset($_FILES['update_bylaws'])) {

        $extension = explode('.', $_FILES['update_bylaws']['name']);
        $new_name = rand().'.' . $extension[1];
        $destination = './uploads/cso_files/bylaws/'. $new_name;
        move_uploaded_file($_FILES['update_bylaws']['tmp_name'], $destination);
        return $new_name;
      # code...
    }


}



 public function update_article(){


		$data = array(

					
					'article' => ($_FILES['update_article']['tmp_name'] === '' ) ? $this->input->post('article_name') : $this->upload_update_article(),
					
					
		);

	
		$where = array('cso_id'=>$this->input->post('article_cso_id'));

		$update = $this->UpdateModel->update1($where,$data,$this->cso);
		$params = array('cond' => $update, 'message' => 'Successfully Updated');
		$this->load->library('Condition', $params);




	}




function upload_update_article(){

    if (isset($_FILES['update_article'])) {

        $extension = explode('.', $_FILES['update_article']['name']);
        $new_name = rand().'.' . $extension[1];
        $destination = './uploads/cso_files/articles/'. $new_name;
        move_uploaded_file($_FILES['update_article']['tmp_name'], $destination);
        return $new_name;
      # code...
    }


}


}