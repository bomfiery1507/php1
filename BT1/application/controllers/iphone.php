<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class iphone extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('xsmax_view');
	}

}

/* End of file huawei.php */
/* Location: ./application/controllers/huawei.php */