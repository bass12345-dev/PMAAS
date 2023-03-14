<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pending_transactions extends CI_Controller {


	public $cso = 'cso';
	public $trainings = 'trainings';
	public $project_monitoring = 'project_monitoring';
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
		$data['title'] = 'Pending Transactions';
		$this->load->view('admin/transactions/transactions',$data);
	}


	
}
