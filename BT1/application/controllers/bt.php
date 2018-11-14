<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bt extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
	}

 function index()
	{

		$this->load->view('bt_view');

	}
    function Login(){
    	$this->load->view('login_view');
}
function giohang(){
	$this->load->view('giohang_view');

}
  function iphone(){
	$this->load->view('chitietsp_view');
}
function thanhtoan(){
    $this->load->view('thanhtoan_view');
  }
  
}

/* End of file bt.php */
/* Location: ./application/controllers/bt.php */