<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Duyun extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/duyun
	 *	- or -  
	 * 		http://example.com/index.php/duyun/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 */
	public function index()
	{
		$this->load->view('duyun_default');
	}
}

/* End of file duyun.php */
/* Location: ./application/controllers/duyun.php */
