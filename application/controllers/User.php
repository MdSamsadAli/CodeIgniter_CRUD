<?php
class User extends CI_Controller
{
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();

		//load database libray manually
		$this->load->database();

		//load Model
		$this->load->model('UserModel');
		// $this->load->helper(array('form'));
		// $this->load->library(array('form_validation'));
	}

	public function index()
	{
		$data = $this->db->select(['id', 'name', 'email', 'mobile'])->from('users')->get()->result_array();
		$this->load->view('users/index', ['data' => $data]);
		// $result['data'] = $this->UserModel->displayrecords();
		// $this->load->view('users/index',$result);
	}
	public function create()
	{


		$this->form_validation->set_rules('name', 'Studnet_Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('users/create');
		} else {
			//Check submit button 
			if ($this->input->post('save')) {
				//get form's data and store in local varable
				$n = $this->input->post('name');
				$e = $this->input->post('email');
				$m = $this->input->post('mobile');

				//call saverecords method of Hello_Model and pass variables as parameter
				$this->UserModel->saverecords($n, $e, $m);
				redirect('../user');
			}
		}
		//load user/create view form

	}

	public function editupdate($id)
	{
		// echo $id;
		$result = $this->UserModel->editrecords($id);
		// var_dump($result);

		$this->load->view('users/update', ['data' => $result]);

		if ($this->input->post('save')) {
			$id = $this->input->post('id');
			//get form's data and store in local varable
			$n = $this->input->post('name');
			$e = $this->input->post('email');
			$m = $this->input->post('mobile');

			//call saverecords method of Hello_Model and pass variables as parameter
			$this->UserModel->updaterecords($n, $e, $m, $id);
			// var_dump($id);
			redirect('../user');
		}
	}

	public function delete()
	{
		// echo "here";
		$id = $this->input->get('id');
		// echo $id;
		if ($this->UserModel->deleterecords($id)) {
			// echo "deleted";
			redirect('../user');
		} else {
			echo "not deleted";
		}
	}
}
