<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Real_monitor extends CI_Controller {
	
 	function __construct()
 	{
  		parent::__construct();
  		$this->load->model('Line_chart', 'linechart');
  		$this->load->helper('url');
 	}
 	
	public function linechart()
	{
		try {
			define('REALMONITORURL', '/cgi-bin/realtimemonitor.cgi', false);
			$host = 'https://tiderway.uicp.cn:8080';
			$time = $_GET["time"];
			if ($time == ""){
				$time = "time=".time();
			}else{
				$time = "update=".$time;
			}			
			
			$language = $_GET['lan'];  //此处可能需要改为从Session取。			
			$resource = $_GET['resource'];			
			$chart = $_GET['chart'];
			
		 	$url = $host.REALMONITORURL.'?'. 
		 	       $time.'&'.
		 		   'lan='.$language.'&'.
		 	       'object=resource&'. 
		 	       'resource='.$resource.'&'.
		 	       'range=all&'.
		 	       'chart='.$chart;
		 	       		 	
			$lastRecordTime = $_GET['lastRecordTime'];
			
			if($lastRecordTime != ''){
				list($lastRecordDate, $lastRecordTime) = explode(' ', $lastRecordTime);
			}
			
			$data = $this->linechart->request_real_monitor_data($url, $lastRecordTime);		
			
			$this->output
    			 ->set_content_type('application/json')
                 ->set_output(json_encode($data));
		} catch (Exception $e) {
			$data = array('Success'=>false, 'Error'=>$e);
			$this->output
    			 ->set_content_type('application/json')
                 ->set_output(json_encode($data));
		}
	}
}

/* End of file real_monitor.php */
/* Location: ./application/controllers/real_monitor.php */