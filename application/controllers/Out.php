<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Out extends CI_Controller {

	public function sign_out(){
		 $this->load->library('session');
     $this->session->unset_userdata('user_id');
        // delete_cookie('SESSION_TOKEN',);
      redirect('login');
	}
	
}
