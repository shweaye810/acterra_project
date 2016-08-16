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
    function getLocationList()
    {
        $query =$this->db->query('SELECT * FROM location');
        if($query->num_rows()>0){
            return $query->result(); //return an array of objects
        }else{
            return NULL;
        }
    }

    //query db to get all event type list for ddl
    function getEventType()
    {
        $query = $this->db->query('SELECT * FROM TypeOfEvent');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function set_events_data()
    {
        $this->load->helper('url');

        $data = array(
            'date' => $this->input->post('date'),
            'location' => $this->input->post('location'),
            'event_type' => $this->input->post('event_type'),
            'event_name' => $this->input->post('event_name'),
            'organization_name' => $this->input->post('organization_name'),
            'young' => $this->input->post('young'),
            'adult' => $this->input->post('adult'),
            'duration' => $this->input->post('duration'),
            'area_weeded' => $this->input->post('area_weeded'),
            'creek_cleared' => $this->input->post('creek_cleared'),
            'trash_removed' => $this->input->post('trash_removed'),
            'recycled' => $this->input->post('recycled'),
            'comments' => $this->input->post('comments'),
        );
        date_default_timezone_set('America/Los_Angeles');
        $data['date'] = date('Y-m-d H:i:s', strtotime($data['date']));

        return $this->db->insert('site_data', $data);
    }

}