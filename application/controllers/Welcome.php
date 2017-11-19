<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
function __construct(){
parent::__construct();
 $this->load->helper(array('form', 'url'));
        $this->load->database();
$this->load->model('dropdown');
$this->load->library('session');
$method = $this->router->fetch_method();
$user_data=$this->session->userdata();
$user = array("tweet","sort1");
$admin=array("admin","delete");
foreach($user as $row1){
if($method==$row1){
if(empty($user_data['role']) === false){	
				if($user_data['role']!='user'){
					die('error');
				}
}else{die('error');}
				}
		 }
foreach($admin as $row2){
if($method==$row2){
if(empty($user_data['role']) === false){	
				if($user_data['role']!='admin'){
					die('error');
				}
}else{die('error');}
				}
				 }
}
public function index(){
 $data['country'] = $this->dropdown->get_country();
 $data['state'] = $this->dropdown->get_state();
 $this->load->view('index',$data);
}
	public function logout()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		$this->index();
		
	}
	 public function register() { 
		$this->load->model('reg');
		$query=$this->reg->register1();
		if($query->num_rows()==0)
		{
		 $this->tyu = realpath(APPPATH . '../profile');
         $config['upload_path']   = $this->tyu; 
         $config['allowed_types'] = 'jpg|png'; 
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors()); 
			 $data['country'] = $this->dropdown->get_country();
             $data['state'] = $this->dropdown->get_state();
			 $data['error']=$error;
			 $this->load->view('index',$data);
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data());
			$imagedata=$this->upload->data();
            $this->load->model('reg');
			$this->reg->register($data);
			$img_array = array();
			$img_array['image_library'] = 'gd2';
			$img_array['maintain_ratio'] = FALSE;
			$img_array['create_thumb'] = TRUE;
			$img_array['source_image'] = $imagedata['full_path'];
			$img_array['width'] = 100;
			$img_array['height'] = 100;

        $this->load->library('image_lib', $img_array);

        if (!$this->image_lib->resize())
        {
            echo $this->image_lib->display_errors(); exit;
        }else{
			echo '<script type="text/javascript">alert("DONE");</script>';
			$this->index();
			}
         } 
		 }
		 else
		 {
		 echo '<script type="text/javascript">alert("Already Registered With This Email");</script>';
		 $this->index();
		 }
      }
public function login()
	{
	$this->load->view('login');
	}
public function login1()
	{
	$d1 = $this->input->post('role');
	$d2= $this->input->post('email');
	$d3 = $this->input->post('pass');
	$this->load->library('session');
	$user_data= array(
                   'role'  => $d1,
                   'email'     => $d2,
               );
	$this->session->set_userdata($user_data);
	$this->load->model('register');
	$data1=$this->register->login();
	if($data1['role']=='admin')
	{
	$this->admin();
	}
	
	if($data1['role']=='user')
	{
	$cs['cnt']=$data1[0]->country;
	$cs['st']=$data1[0]->state;
	$this->load->model('register');
	$datac=$this->register->cst($cs);
	$data1['country']=$datac[0]->country_name;
	$data1['state']=$datac[0]->state_name;
	$this->load->view('user',array('data12'=>$data1));
	}
	if($data1==null)
	$this->login();
}	
public function admin()
	{
	$this->load->model('register');
	$data11=$this->register->user();
	$this->load->view('admin',array('data12'=>$data11));
	}

	public function delete()
	{
	$id=$this->input->get('id');
	$this->load->model('register');
	$data=$this->register->delete($id);
	foreach($data as $key)
	{
	$path='profile/'.$key->image;
	$this->load->helper("file");
    unlink($path);
	$piece = explode(".",$key->image);
	$path1 ='profile/'.$piece[0].'_thumb.'.$piece[1];
	unlink($path1);
	}
	$this->admin();
	}
	function populate_state()
    {
        $id = $this->input->post('id');
        echo(json_encode($this->dropdown->get_state($id)));
    }

    function populate_city()
    {
        $id = $this->input->post('id');
        echo(json_encode($this->dropdown->get_city($id)));
    }

}?>
