<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->getFormDDLData();
		
	}

	public function getFormDDLData()
	{
		//how to load model into view
		$this->load->model('model_events'); //load the model into controller
		$data['location'] = $this->model_events->getLocationList();
		$data['eventType'] = $this->model_events->getEventType();
		$this->load->view('welcome_message',$data);
	}
}
