<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
                $this->load->helper('url_helper');
		//how to load model into view
		$this->load->model('model_events'); //load the model into controller
	}
	public function index()
	{
		$this->getFormDDLData();
		
	}

	public function getFormDDLData()
	{
		/*
		 * load form helper and library
		 */
		$this->load->helper('form');
                $this->load->library('form_validation');

		$data['location'] = $this->model_events->getLocationList();
		$data['eventType'] = $this->model_events->getEventType();

		$this->set_require('location');
		$this->set_require('event_type');
		$this->set_require('event_name');
		$this->set_require('duration');

		if ($this->form_validation->run() === FALSE)
                {
                        $this->load->view('welcome_message', $data);

                }
                else
                {
			$this->model_events->set_events_data();
                        $this->load->view('success');
                }
	}
	private function set_require($name)
	{
		$tmp = ucfirst($name);
		$this->form_validation->set_rules(
			$name,
			$tmp,
			'required'
		);
	}
}
