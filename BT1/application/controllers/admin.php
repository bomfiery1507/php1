<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin_view');
	}
     function addsanpham(){
	$this->load->view('addsanpham_view');
}
function sua(){
	$this->load->view('suasanpham_view');
}
}

/* End of file admin */
/* Location: ./application/controllers/admin */