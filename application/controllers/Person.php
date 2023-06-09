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
        if (!$this->session->userdata('logged_in') == TRUE) 
        {
            redirect('person');
        }


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
    
    public function check_date_of_birth($date_of_birth)
    {
        $date = DateTime::createFromFormat('Y-m-d', $date_of_birth);

        if (!$date) {
            // Date of birth is not valid
            $this->form_validation->set_message('check_date_of_birth', 'The %s field is not a valid date.');
            return false;
        }

        $today = new DateTime();
        $age = $today->diff($date)->y;

        if ($age < 18) {
            // Date of birth is less than 18 years old
            $this->form_validation->set_message('check_date_of_birth', 'You must be at least 18 years old to register.');
            return false;
        }

        return true;
    }
    public function store()
    {
        $rules = array(
            [
                'field' => 'fname',
                'label' => 'first name',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'lname',
                'label' => 'last name',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'address',
                'label' => 'address',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'department',
                'label' => 'department',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'dob',
                'label' => 'date of birth',
                'rules' => 'trim|required|max_length[13]|callback_check_date_of_birth'
            ],
        );
    
        $this->form_validation->set_rules($rules);

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