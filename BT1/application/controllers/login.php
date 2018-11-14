<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login_view');
	}
function bt()
	{
		$username= $this->input->post('username');
		$password= $this->input->post('password');
		if ($username== "admin" && $password== "123456"){
			     $_SESSION['username1']= $username;
			     $_SESSION['password1']=$password;
                 //$data['user']= [$username];
                $this->load->view('admin_view');
        } else($username== "user" && $password== "686868") {
			 $_SESSION['username1']= $username;
			     $_SESSION['password1']=$password;
			$this->load->view('bt_view');
		}

	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */