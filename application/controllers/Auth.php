<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        //load Model
        $this->load->model('LoginModel');
        
        if ($this->session->userdata('logged_in') == TRUE) 
        {
            // session_destroy();
            // redirect('person');
        }
    }
    public function login()
    {
        $this->load->view('auth/login');
    }
    public function register()
    {
        $this->load->view('auth/register');
    }

    public function registeration_form()
    {
        $this->load->model('LoginModel');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == FALSE){
            // $this->session->set_flashdata('warning','Please Fill All Required Fields');
            redirect('auth/register');
        }
        else{
            $this->LoginModel->register_user();
        }
    }

    public function login_form()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error','Please enter a valid email address and password.');
            redirect('/');
        }
        else{
            $this->session->set_userdata('logged_in', TRUE);
            $this->LoginModel->login_user();
        }
    }
    
    public function logout()
    {
        $newdata = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'logged_in' => FALSE,
        );
        $this->session->unset_userdata($newdata);
        $this->session->sess_destroy();

        $this->session->set_flashdata('success','You are now logout');

        redirect('/');
    }
}