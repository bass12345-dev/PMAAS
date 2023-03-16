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


    public function get_last_pmas_number(){

            $this->db->from('transactions');
            $this->db->order_by('pmas_no','desc');
            return $this->db->get()->result_array()[0];
      }



    public function getAllunderTYPE(){

             $this->db->from('under_type_of_activity');
            $this->db->join('type_of_activity','type_of_activity.type_act_id = under_type_of_activity.typ_ac_id');
            $this->db->order_by('under_type_act_name','ASC');
            return $this->db->get()->result_array();
      }

        /*================================
    Get Transactions
    ==================================*/

        public function getTransactions($table,$order_by,$order_key){

            $this->db->from($table);
             $this->db->join('type_of_monitoring','type_of_monitoring.type_mon_id = transactions.type_of_monitoring_id');
             $this->db->join('type_of_activity','type_of_activity.type_act_id = transactions.type_of_activity_id');
              $this->db->join('responsibility_center','responsibility_center.res_center_id = transactions.responsibility_center_id');
            $this->db->join('users','users.user_id = transactions.created_by');
             $this->db->where('transactions.status','completed');
            $this->db->order_by('transactions.pmas_no','desc');
            return $this->db->get()->result_array();
      }


       public function getTransaction_data($table,$where){

            $this->db->from($table);
             $this->db->join('type_of_monitoring','type_of_monitoring.type_mon_id = transactions.type_of_monitoring_id');
             $this->db->join('type_of_activity','type_of_activity.type_act_id = transactions.type_of_activity_id');
              $this->db->join('responsibility_center','responsibility_center.res_center_id = transactions.responsibility_center_id');
             // $this->db->join('trainings','trainings.transact_id = transactions.transaction_id');
              $this->db->join('users','users.user_id = transactions.created_by');
              $this->db->where($where);
            $this->db->order_by('transactions.pmas_no','desc');
            return $this->db->get()->result_array();
      }



      public function getUserPendingTransactions($table,$where){

            $this->db->from($table);
             $this->db->join('type_of_monitoring','type_of_monitoring.type_mon_id = transactions.type_of_monitoring_id');
             $this->db->join('type_of_activity','type_of_activity.type_act_id = transactions.type_of_activity_id');
              $this->db->join('responsibility_center','responsibility_center.res_center_id = transactions.responsibility_center_id');
             // $this->db->join('trainings','trainings.transact_id = transactions.transaction_id');
              $this->db->join('users','users.user_id = transactions.created_by');
              $this->db->where($where);
               $this->db->where('transactions.status','pending');
            $this->db->order_by('transactions.pmas_no','desc');
            return $this->db->get()->result_array();
      }

      public function getAdminPendingTransactions($table){

            $this->db->from($table);
             $this->db->join('type_of_monitoring','type_of_monitoring.type_mon_id = transactions.type_of_monitoring_id');
             $this->db->join('type_of_activity','type_of_activity.type_act_id = transactions.type_of_activity_id');
              $this->db->join('responsibility_center','responsibility_center.res_center_id = transactions.responsibility_center_id');
             // $this->db->join('trainings','trainings.transact_id = transactions.transaction_id');
              $this->db->join('users','users.user_id = transactions.created_by');
           
               $this->db->where('transactions.status','pending');
            $this->db->order_by('transactions.pmas_no','desc');
            return $this->db->get()->result_array();
      }

      public function getUserCompletedTransactions($table,$where){


         $this->db->from($table);
             $this->db->join('type_of_monitoring','type_of_monitoring.type_mon_id = transactions.type_of_monitoring_id');
             $this->db->join('type_of_activity','type_of_activity.type_act_id = transactions.type_of_activity_id');
              $this->db->join('responsibility_center','responsibility_center.res_center_id = transactions.responsibility_center_id');
             // $this->db->join('trainings','trainings.transact_id = transactions.transaction_id');
              $this->db->join('users','users.user_id = transactions.created_by');
              $this->db->where($where);
               $this->db->where('transactions.status','completed');
            $this->db->order_by('transactions.pmas_no','desc');
            return $this->db->get()->result_array();


      }


      public function getTransactionTraining_data($where){

         $this->db->from('transactions');
         $this->db->join('trainings','trainings.transact_id = transactions.transaction_id');
         $this->db->where($where);
         return $this->db->get()->result_array();
      }



        public function getTransactionProject_data($where){

         $this->db->from('transactions');
         $this->db->join('project_monitoring','project_monitoring.transac_id = transactions.transaction_id');
         $this->db->where($where);
         return $this->db->get()->result_array();
      }




    public function get_user_chart($table,$m,$y,$where){

         $this->db->from($table);
         $this->db->where('MONTH(date_and_time_filed)',$m);
          $this->db->where('YEAR(date_and_time_filed)',$y);
          $this->db->where('transactions.status','completed');
           $this->db->where($where);
          return $this->db->get()->num_rows();
      }



   } 
 ?>