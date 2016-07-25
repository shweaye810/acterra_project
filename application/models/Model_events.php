<?php

/**
 * Created by Crystal
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

    //query db to get all event type list for ddl
    function getEventType(){
        $query = $this->db->query('SELECT * FROM TypeOfEvent');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }
    }

}