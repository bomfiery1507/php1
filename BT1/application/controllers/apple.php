<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class apple extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('iphone_view');
	}

}

/* End of file apple.php */
/* Location: ./application/controllers/apple.php */