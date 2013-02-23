<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mainpage extends Common_Auth_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	/**
	 * Index Page for this controller.
	 *	 
	 */
	public function index()
	{		
		$this->load->view('tiderway/mainform_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */