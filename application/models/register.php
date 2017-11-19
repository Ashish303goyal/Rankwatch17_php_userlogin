<?php
class register extends CI_Model
{
public function login(){
      $role=$this->input->post('role');
	  $email=$this->input->post('email');
	  $pass=$this->input->post('pass');
	  $this->load->database();
	  if($role=='admin')
	  {
	  $query=$this->db->query("SELECT * FROM admin WHERE email='$email' AND password='$pass'");
	  $data=$query->result_object();
	  $data['role']=$role;
	  	  if($query->num_rows()==1)
	  {
	  return $data;
		}
		else{
		 echo '<script type="text/javascript">alert("ERROR");</script>';
		 return null;
		}
	  }
	  if($role=='user')
	  {
	  $query=$this->db->query("SELECT * FROM user WHERE email='$email' AND password='$pass'");
	  $data=$query->result();
	  $data['role']=$role;
	   	  if($query->num_rows()==1)
	  {
	  return $data;
		}
		else{
		 echo '<script type="text/javascript">alert("ERROR");</script>';
		 return null;
		}
	  }

}
public function user(){
$this->load->database();
$query=$this->db->query("SELECT * FROM user");
$data=$query->result();
return $data;
}
public function cst($cs){
$cst=$cs['cnt'];
$sst=$cs['st'];
$this->load->database();
$query=$this->db->query("SELECT * FROM country INNER JOIN state WHERE country.country_id='$cst' AND state.state_id='$sst'");
$data=$query->result();

return $data;
}
public function delete($id){
$this->load->database();
$query2=$this->db->query("SELECT image FROM user WHERE email='$id'");
$data4=$query2->result();
$this->db->query("DELETE FROM user WHERE email='$id'");
return $data4;
}

}?>