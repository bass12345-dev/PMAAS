<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');


class Wallpaper extends CI_Controller {



	public function __construct()
    {
        parent::__construct();

         if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }

	public function index()
	{
           $data['title'] = 'wallpaper';
        $this->load->view('admin/wallpaper/wallpaper',$data);
		
	}

}
