<?php
class UserModel extends CI_Model
{
	function saverecords($name, $email, $mobile)
	{
		$query = "insert into users values('','$name','$email','$mobile')";
		$this->db->query($query);
	}

	function displayrecords()
	{
		$query = $this->db->query("select * from users");
		return $query->result();
	}

	function deleterecords($id)
	{
		$query = $this->db->query("delete from users where id = $id ");
		// $this->db->where("id", $id);
		// $this->db->delete("user");
		return true;
	}

	function editrecords($id)
	{
		// $query = $this->db->query("select * from users where id = '$id' ");
		// $this->db->select('*');
		// $this->db->where('id', $id);
		// $query = $this->db->get('users');
		$query = $this->db->where('id', $id)->get('users')->result();
		// var_dump($query);
		return $query;
	}

	function updaterecords($name,$email,$mobile, $id)
	{
		$query = $this->db->query("update users set name = '$name', email ='$email', mobile ='$mobile' where id ='$id' ");
	}
}
