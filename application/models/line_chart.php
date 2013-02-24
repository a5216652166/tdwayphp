<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

ini_set("zend.zel_compatibility_mode", "Off");	
class Line_chart extends CI_Model {

	public function __construct()
	{		
        parent::__construct();
	}
	
	public function request_real_monitor_data($url, $lastRecordTime)
	{
		$responseText = $this->clean_response_text($this->request_https($url));	
		$returnValue = $this->parse_response_text($responseText, $lastRecordTime);
		
		return $returnValue;
	}
	
	public function request_https($url)
	{
	 	$ch = curl_init();	 	
		
	 	curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		$response = curl_exec($ch);
		
		curl_close($ch);
		
		return $response;		
	}

	public function clean_response_text($data)
	{
		$returnValue = str_replace('&', '&amp;', $data);
		
		return $returnValue;
	}
	
	public function parse_response_text($data, $lastRecordTime)
	{
		$root = simplexml_load_string($data);
		$returnValue = array('Success'=>true,
		                     'Data'=>$this->get_real_monitor_data($root, $lastRecordTime), 
		                     'Time'=>$this->get_next_request_time($root));
		
		return $returnValue;
	}
	
	public function get_real_monitor_data($root, $lastRecordTime)
	{
		$data = $this->get_real_monitor_data_since_last_time($root, $lastRecordTime);
		
		return $this->add_date_to_real_monitor_data($data);
	}
	
	public function get_real_monitor_data_since_last_time($root, $lastRecordTime)
	{		
		$data = $this->parse_xml_to_real_monitor_data($root);
		if ($lastRecordTime == ''){
			return $data;
		}
		
		$index = $this->get_index_of_special_time_record($data, $lastRecordTime);		
		if($index == 0){
			return $data;
		}else{
			return array_slice($data, $index + 1);
		}		
	}
	
	public function parse_xml_to_real_monitor_data($root)
	{		
		$rows = $root->xpath('/chart/chart_data/row');
		$row1 = $rows[0];
		$row2 = $rows[1];
		
		$values = array();
		$index = 0;
		foreach($row1->string as $time){
			$values[$index++]['time'] = (String)$time;
		}
		$index = 0;
		foreach($row2->number as $value){
			$values[$index++]['value'] = (String)$value;			
		}
		
		return $values;
	}
	
	public function get_index_of_special_time_record($data, $time){	
		$index = 0;
		while($record = current($data)){
			if($record['time'] == $time){
				break;
			}
			$index++;;
			next($data);
		}
		
		return $index == count($data) ? 0 : $index;
	}
	
	public function add_date_to_real_monitor_data($data)
	{
		$lastDate = date('Y-m-d', strtotime('-1 days'));		
		$date = date('Y-m-d', time());
		
		$midnightIndex = $this->get_index_of_special_time_record($data, '00:00:00');
		
		for($i = 0; $i < $midnightIndex; $i++){
			$data[$i]['time'] = $lastDate.' '.$data[$i]['time'];
		}	
		for($i = $midnightIndex; $i < count($data); $i++){
			$data[$i]['time'] = $date.' '.$data[$i]['time'];				
		}	
		
		return $data;
	}
	
	public function get_next_request_time($root)
	{		
		$url = (String)$root->update->attributes()->url;
		$queryStr = explode('&', strstr($url, '?'));
		$update = explode('=', $queryStr[0]);
		
		return $update[1];
	}
}

/* End of file line_chart.php */
/* Location: ./application/controllers/line_chart.php */