<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grassroots extends CI_Controller
{
    public function index()
    {
        $this->load->view('grassrootsview');
        $this->load->helper('form');
    }

    public function checkLogin(){

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required|callback_verifyLogin');

        if($this->form_validation->run() == false){
            $this->load->view('grassrootsview');
        }
        /*
         * this doesn't do anything
        else{
            $welcome_path = "Welcome";
            redirect('http://localhost:8888/acterra_project/index.php/Welcome');
        }
        */
    }

    public function verifyLogin(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->load->model('model_login');

        if ($this->model_login->login($username,$password)){
            $welcome_path = "Welcome";
            redirect(base_url().index_page()."/".$welcome_path);
            return true;
        }
        else
        {
           $this->form_validation->set_message(
               'verifyLogin',
               'Incorrect username and password please try again'
           );
           return false;
        }


    }
}

