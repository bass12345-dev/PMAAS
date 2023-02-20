<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteModel extends CI_Model
{
	


    public function __construct()
    {
        parent::__construct();
    }




public function delete($table,$where)
    {
            $this->db->where($where);
            $query = $this->db->delete($table);
            return $this->db->affected_rows();
    }

public function delete1($table,$where1,$where2)
    {
         $this->db->where($where1);
          $this->db->where($where2);
            $query = $this->db->delete($table);
            return $this->db->affected_rows();
    }


public function delete2($table,$where1,$where2,$where3)
    {
         $this->db->where($where1);
          $this->db->where($where2);
          $this->db->where($where3);
            $query = $this->db->delete($table);
            return $this->db->affected_rows();
    }



}

?>