<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Error {

        public function __construct()
        {

                       
			$data = array(
				'message' => 'Error',
				'response' => false
			);

	

		echo json_encode($data);
        }
}



?>