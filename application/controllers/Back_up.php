<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');


class Back_up extends CI_Controller {



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
           $data['title'] = 'Back Up Database';
        $this->load->view('admin/back_up_database/back_up',$data);
        }else {
            $data['heading']  = 'heading';
            $data['message']  = '1232';
           $this->load->view('errors/error',$data);
        }
		
	}

    function get_database(){

        $dir = FCPATH . '/database/';
        $data = [];
        $file_data = scandir($dir);

        foreach ($file_data as $file) {

            if ($file === '.' OR $file === '..') {

                continue;
                // code...
            }else {
                
                $data[] = array(

                    'database' => $file
                );
            }
        }

        echo json_encode($data);
    }


	public function save(){

		 // Load the DB utility class
        $this->load->dbutil();

        // get all the table
        $tables = $this->db->list_tables();

        // data preferences
        $prefs = array(
            'tables'             => $tables,   // Array of tables to backup.
            'ignore'             => array(),   // List of tables to omit from the backup
            'format'             => 'sql',     // gzip, zip, txt
            'add_drop'           => true,      // Whether to add DROP TABLE statements to backup file
            'add_insert'         => true,      // Whether to add INSERT data to backup file
            'newline'            => "\n",      // Newline character used in backup file
            'foreign_key_checks' => false,
        );

        // Backup your entire database and assign it to a variable
        $backup   = $this->dbutil->backup($prefs);
        $filename = date("Y-m-d h.i.s") . ' ' . $this->db->database . '.sql';

        if (write_file(FCPATH . '/database/' . $filename, $backup)) {
            $data = array(
                'response' => true,
                'message' => 'Database Exported.');

            $log = array(
                'user_id' =>  $this->session->userdata('user_id'),
                'description' => 'Back Up Record',
                'date' =>  date('Y-m-d H:i:s', time()),
            );  
            // $this->logs_model->add_log($log);
        } else {
            $data = array(
                'response' => false,
                'message'  => $this->db->error()['message']);
            // 'message'  => 'asdsdsd';
        }  

        echo json_encode($data);
		
	}
}
