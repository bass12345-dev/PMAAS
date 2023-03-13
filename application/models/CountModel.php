 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class CountModel extends CI_Model {

        public function __construct()
    {
        parent::__construct();
    }



    public function  count($table) {
      $this->db->from($table);
    
        return $this->db->get()->num_rows();
    }


     public function  count1($table,$where) {
      $this->db->from($table);
      $this->db->where($where);
        return $this->db->get()->num_rows();
    }



   } 
 ?>