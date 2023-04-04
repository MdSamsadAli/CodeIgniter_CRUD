<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Person extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // /load database libray manually
        $this->load->database();
        //load Model
        $this->load->model('PersonModel', 'person');
        $this->check_auth();


    }
    public function check_auth(){
        if(!$this->session->userdata('logged_in')){
            $this->session->set_flashdata('error', 'Please Provide Authenticated Credentials');
            redirect('/');
        }
    }
    public function index()
    {
        
        $data = $this->person->get_all();

        $this->load->view('person/header');
        $this->load->view('person/index', compact('data'));
        $this->load->view('person/footer');
    }
    public function create()
    {
        
            $this->load->view('person/header');
            $this->load->view('person/create');
            $this->load->view('person/footer');
    }
    public function store()
    {

        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('address', 'Last Name', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('person/header');
            $this->load->view('person/create');
            $this->load->view('person/footer');
        }else if($this->person->store())
        {
            redirect('/person');
        }
        else {
            redirect('/');
        }
    }

    public function edit($id)
    {
        $data['person'] = $this->person->get($id);
        // var_dump($data);
        // echo $id;
        $this->load->view('person/header');
        $this->load->view('person/edit', $data);
        $this->load->view('person/footer');
    }
    public function update($id)
    {
        $this->person->update($id);
        redirect('/person');
    }

    public function deletedata($id) {
        
        $this->load->model('PersonModel');
        $this->person->delete_data($id);
        redirect('/person');
    }
}
