<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class demo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('deme_view');
	}

}

/* End of file demo.php */
/* Location: ./application/controllers/demo.php */