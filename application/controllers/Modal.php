<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->library('session');
		/*cache control*/
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	}

	public function index()
	{
		
	}

	/* $page_name = name of page */
	public function popup($page_name = '' , $param2 = '' , $param3 = '')
	{
		$account_type               =	$this->session->userdata('login_type');
		$page_data['param2']		=	$param2;
		$page_data['param3']		=	$param3;
		$this->load->view( 'backend/'.$account_type.'/'.$page_name.'.php' ,$page_data);
		
		echo '<script src="../assets/neon-custom-ajax.js"></script>';
                //echo '<script>$(".html5editor").wysihtml5();</script>';
	}

}

/* End of file Modal.php */
/* Location: ./application/controllers/Modal.php */