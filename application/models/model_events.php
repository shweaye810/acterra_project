<?php

/**
 * User: Crystal
 * Date: 7/16/16
 * Time: 3:18 PM
 */
class model_events extends CI_Model
{
    function __construct()
    {
        parent::__construct(); // call the model constructor
    }

    //query db to get location list for ddl
    function getLocationList(){
        $query =$this->db->query('SELECT * FROM location');

        if($query->num_rows()>0){
            return $query->result(); //return an array of objects
        }else{
            return NULL;
        }
    }

}