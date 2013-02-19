<?php
class MY_Controller extends CI_Controller
{
  
   function __construct()
   {
      parent::__construct();
	  
   }
}
class Admin_Controller extends CI_Controller {

    protected $the_user;

    public function __construct() {

        parent::__construct();

        if($this->ion_auth->is_admin()) {
            $this->the_user = $this->ion_auth->user()->row();
            $data->the_user = $this->the_user;
            $this->load->vars($data);
        }
        else {
            redirect($BASEPATH);
        }
    }
}

class User_Controller extends CI_Controller {

    protected $the_user;

    public function __construct() {

        parent::__construct();

        if($this->ion_auth->in_group('user')) {
            $this->the_user = $this->ion_auth->user()->row();
            $data->the_user = $this->the_user;
            $this->load->vars($data);
        }
        else {
            redirect($BASEPATH);
        }
    }
}

class Common_Auth_Controller extends CI_Controller {

    protected $the_user;

    public function __construct() {

        parent::__construct();

        if($this->ion_auth->logged_in()) {
            $this->the_user = $this->ion_auth->user()->row();
            $data->the_user = $this->the_user;
            $this->load->vars($data);
        }
        else {
            //由Auth 控制器接手
            //redirect them to the login page
			redirect($BASEPATH.'auth', 'refresh');
        }
    }
}