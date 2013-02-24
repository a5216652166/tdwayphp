<?php
class MY_Controller extends CI_Controller
{  
   function __construct()
   {
      parent::__construct();
      $this->config->set_item('language', 'zh_cn');
<<<<<<< HEAD
      $this->load->library('Ion_auth');
      $this->load->helper('url');	  
=======
      $this->load->library('Ion_auth'); 	
      $this->load->helper('url');  
>>>>>>> 1091606b21cc5b4629ac0910c33c47ec0e0383c7
   }
}

class Admin_Controller extends MY_Controller {
    protected $the_user;

    public function __construct() {

        parent::__construct();

        if($this->ion_auth->is_admin()) {
            $this->the_user = $this->ion_auth->user()->row();
            $data=new stdclass();
            $data->the_user = $this->the_user;
            $this->load->vars($data);
        }
        else {
            redirect($BASEPATH.'auth', 'refresh');
        }
    }
}

class User_Controller extends MY_Controller {
	protected $the_user;

    public function __construct() {

        parent::__construct();

        if($this->ion_auth->in_group('user')) {
            $this->the_user = $this->ion_auth->user()->row();
            $data=new stdclass();
            $data->the_user = $this->the_user;
            $this->load->vars($data);
        }
        else {
            redirect($BASEPATH.'auth', 'refresh');
        }
    }
}

class Common_Auth_Controller extends MY_Controller {

    protected $the_user;

    public function __construct() {
        parent::__construct();

        if($this->ion_auth->logged_in()) {
            $data = new stdclass();
            $data->the_user = $this->ion_auth->user()->row();       
            $this->the_user = $data->the_user;
            $this->load->vars($data);
        }
        else {
			redirect('auth', 'refresh');
        }
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */