<?php
class reg extends CI_Model
{
 
 public function register($data){
		 $name=$this->input->post('name');
		 $email=$this->input->post('email');
		 $pass=$this->input->post('pass1');
		 $gender=$this->input->post('gender');
		 $age=$this->input->post('age');
		 $mob=$this->input->post('mob');
		 $address=$this->input->post('address');
		 $country=$this->input->post('country');
		 $state=$this->input->post('state');
		 $data = array_shift($data);
		 $image=$data['file_name'];
		 $this->load->database();
		 $this->db->query("INSERT INTO user VALUES ('$name','$email','$pass','$image','$gender','$age','$mob','$address','$country','$state')");
		 }
 public function register1(){
		$email=$this->input->post('email');
		$this->load->database();
		$query=$this->db->query("SELECT * FROM user WHERE email='$email'");
		return $query;
 }
		 }
		 ?>