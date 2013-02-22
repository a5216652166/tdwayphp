<?php
class MY_Controller extends CI_Controller
{
  
   function __construct()
   {
      parent::__construct();
      $this->config->set_item('language', 'zh_cn');
      $this->load->library('Ion_auth'); 	  
   }
}
class Admin_Controller extends MY_Controller {

    //����Ա��
    protected $the_user;

    public function __construct() {

        parent::__construct();

        if($this->ion_auth->is_admin()) {
            $this->the_user = $this->ion_auth->user()->row();
            $data=new stdclass();//��ʼ��
            $data->the_user = $this->the_user;
            $this->load->vars($data);
        }
        else {
            redirect($BASEPATH.'auth', 'refresh');
        }
    }
}

class User_Controller extends MY_Controller {

    //�û���
    protected $the_user;

    public function __construct() {

        parent::__construct();

        if($this->ion_auth->in_group('user')) {
            $this->the_user = $this->ion_auth->user()->row();
            $data=new stdclass();//��ʼ��
            $data->the_user = $this->the_user;
            $this->load->vars($data);
        }
        else {
            redirect($BASEPATH.'auth', 'refresh');
        }
    }
}

class Common_Auth_Controller extends MY_Controller {

    //һ���û���
    protected $the_user;

    public function __construct() {

        parent::__construct();

        if($this->ion_auth->logged_in()) {
            // get the user object                                  // ^
            $data=new stdclass();//��ʼ��
            $data->the_user = $this->ion_auth->user()->row();       // ^
                                                                    // ^
            // put the user object in class wide property--->---->-----
            $this->the_user = $data->the_user;
             // load $the_user in all displayed views automatically
            $this->load->vars($data);
        }
        else {
            //��Auth ����������
            //redirect them to the login page
			redirect('auth', 'refresh');
        }
    }
}