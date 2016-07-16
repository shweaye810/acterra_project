<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->home();
		//$this->load->view('welcome_message');
	}

	public function home()
	{
		//how to load model into view
		$this->load->model('model_events'); //load the model into controller. without .php
		$data['name']="xxxx";
		$data['location'] = $this->model_events->getLocationList(); //access db from model_user under model
		$this->load->view('welcome_message',$data);
	}
}
