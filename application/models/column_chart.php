<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

ini_set("zend.zel_compatibility_mode", "Off");	
class Column_chart extends CI_Model {

	public function __construct()
	{		
        parent::__construct();
	}
	
	public function request_real_monitor_data($url)
	{
		$responseText = $this->clean_response_text($this->request_https($url));	
		$returnValue = $this->parse_response_text($responseText);
		
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
		$data = str_replace("&", "&amp;", $data);
		$data = str_replace(" 's", "' s", $data);
		
		return $data;
	}
	
	public function parse_response_text($data)
	{
		$root = simplexml_load_string($data);
		$returnValue = array('Success'=>true,
		                     'Data'=>$this->parse_xml_to_real_monitor_data($root), 
		                     'Time'=>$this->get_next_request_time($root));
		
		return $returnValue;
	}
		
	public function parse_xml_to_real_monitor_data($root)
	{				
		$values = array();
		
		$rows = $root->xpath('/chart/chart_data/row');
		if(count($rows) != 3) return $values;
		
		$nameValueRow = $rows[0];
		$upValueRow = $rows[1];
		$downValueRow = $rows[2];
				
		$index = 0;
		foreach($nameValueRow->string as $name){
			$values[$index++]['name'] = (String)$name;
		}
		$index = 0;
		
		foreach($upValueRow->number as $value){
			$values[$index]['up'] = (String)$value;
			$values[$index]['tooltip'] = (String)$value->attributes()->tooltip;
			$index++;			
		}
		
		$index = 0;
		foreach($downValueRow->number as $value){
			$values[$index++]['down'] = (String)$value;
		}
		
		return $values;
	}
	
	public function get_next_request_time($root)
	{		
		$url = (String)$root->update->attributes()->url;
		$queryStr = explode('&', strstr($url, '?'));
		$update = explode('=', $queryStr[0]);
		
		return $update[1];
	}
}

/* End of file column_chart.php */
/* Location: ./application/controllers/column_chart.php */
