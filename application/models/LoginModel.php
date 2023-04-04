<?php
class LoginModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('');
        $this->load->database();
    }
    public function register_user()
    {
        $password = $this->input->post('password');
        $conf_password = $this->input->post('password_comfirmation');
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $password
        );

        if ($password != $conf_password) {
            $this->session->set_flashdata('info','password and confirm password are not the match.');
            redirect('auth/register');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $password
            );
            $this->db->insert('register', $data);
            $this->session->set_flashdata('success','Congratulations, You have been registered.');
            redirect('/');
        }
    }

    public function login_user()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->db->where('email', $email);
        $this->db->where('password', $password);

        $query = $this->db->get('register');
        $find_user = $query->num_rows($query);

        if ($find_user > 0) {
            $this->session->set_flashdata('success','You are now logged in successfully');
            redirect('person');
        } else {
            $this->session->set_flashdata('warning','Your Email and password are incorrect');
            redirect('/');
        }
    }
    
}