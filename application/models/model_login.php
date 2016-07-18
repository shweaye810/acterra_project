<?php

class Model_login extends CI_Model {

    function __construct()
    {
        parent::__construct(); // call the model constructor
    }
    
   public function login($username,$password){

        $this->db->select('username','password');
        $this->db->from('User');
        $this->db->where('username',$username);
        $this->db->where('password',$password);

        $query = $this->db->get();

        if($query->num_rows()==1){
            return true;
        }
        else{
            return false;
        }

    }

}