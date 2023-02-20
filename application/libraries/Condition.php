<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Condition {

        public function __construct($params)
        {

                        
                	if ($params['cond']) {


			$data = array(
				'message' => $params['message'],
				'response' => true
			);
			# code...
		}else {

			$data = array(
				'message' => 'Error',
				'response' => false
			);

		}

		echo json_encode($data);
        }
}



?>