<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateModel extends CI_Model
{
	


    public function __construct()
    {
        parent::__construct();
    }


public function update1($where1,$data,$table){

       return $this->db->where($where1)
    ->update($table, $data);

}


public function update2($where1,$where2,$data,$table){

       return $this->db->where($where1)
       ->where($where2)
    ->update($table, $data);

}



}

?>