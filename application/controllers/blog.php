<?php
class Blog extends CI_Controller {
 
 function __construct()
 {
  parent::__construct();
  $this->lang->load('blog', 'zh_cn');

 }
 
 function index()
 {
  $data['title'] = "My Real Title";
  $data['title'] = $this->lang->line('title');
  $data['heading'] = "My Real Heading";
  $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

  $this->load->view('blogview', $data);
  #$buffer = $this->load->view('blogview', $data, true);
 }
 function comments()
 {
  echo '�����';
 }

}
?>