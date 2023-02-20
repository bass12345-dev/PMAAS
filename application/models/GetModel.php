 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class GetModel extends CI_Model {

        public function __construct()
    {
       
    }


    public function get($table,$where){
        $this->db->from($table);
        $this->db->where($where);
        return $this->db->get()->result_array();

    }

    public function getALL($table,$order_by,$order_key){

            $this->db->from($table);
            $this->db->order_by($order_key,$order_by);
            return $this->db->get()->result_array();
      }



      /*================================
    Responsibility Center
    ==================================*/
    



    /*================================
    Under Type of Activity
    ==================================*/


    public function getAllunderTYPE(){

             $this->db->from('under_type_of_activity');
            $this->db->join('type_of_activity','type_of_activity.type_act_id = under_type_of_activity.typ_ac_id');
            $this->db->order_by('under_type_act_name','ASC');
            return $this->db->get()->result_array();
      }

   } 
 ?>