<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PersonModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }
    public function get_all()
    {
        $query = $this->db->get("persons")->result_array();
        return $query;
    }

    
    public function store()
    {
        $data = [
            'firstName' => $this->input->post('fname'),
            'lastName' => $this->input->post('lname'),
            'gender' => $this->input->post('gender'),
            'dob' => $this->input->post('dob'),
            'address' => $this->input->post('address'),
            'department' => $this->input->post('department')
        ];
        $query = $this->db->insert("persons", $data);
        return $query;
    }

    public function get($id)
    {
        $query = $this->db->get_where('persons', array('id' => $id))->row();
        return $query;
    }
    public function update($id)
    {
        $data = [
            'firstName' => $this->input->post('fname'),
            'lastName' => $this->input->post('lname'),
            'gender' => $this->input->post('gender'),
            'dob' => $this->input->post('dob'),
            'address' => $this->input->post('address'),
            'department' => $this->input->post('department')
        ];
        $query = $this->db->where('id', $id)->update("persons", $data);
        return $query;
    }

    // public function delete_data($id)
    // {
    //     $query = $this->db->delete('persons', ['id', $id]);
    //     // echo $id;
    //     // return true;
    //     // $query = $this->db->query("delete from users where id = '$id' ");
    //     // // return $query;
    //     // var_dump($query);
    //     // var_dump($id);


    //     // echo $id;
    // }
    public function delete_data($id){

        // $query = $this->db->delete('persons', ['id', $id]);
        // return true;
        $this->db->where('id', $id);
        $this->db->delete('persons');
    }
}