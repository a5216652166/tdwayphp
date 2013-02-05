<?php
class Blog extends CI_Controller {
 
 function __construct()
 {
  parent::__construct();
 }
 
 function index()
 {
  $data['title'] = "My Real Title";
  $data['heading'] = "My Real Heading";
  $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

  $this->load->view('blogview', $data);
  $buffer = $this->load->view('blogview', $data, true);


  echo '你好，世界！';
  echo $buffer;
 }
 function comments()
 {
  echo '看这里！';
 }

}
?>