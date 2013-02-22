<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//mainpage Ö÷controller
class Mainpage extends Common_Auth_Controller {

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