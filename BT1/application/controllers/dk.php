<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	$this->load->view('dangky_view');	
	}
}

/* End of file dk.php */
/* Location: ./application/controllers/dk.php */