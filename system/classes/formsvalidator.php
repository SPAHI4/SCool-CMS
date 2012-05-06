<?php
class FormsValidator {
	public $data = array();
	public $errors = array();
	public $fields = array();
	//array("Name", "Имя", type=>"email", regexsp=> "asdasd", rules=>array(min=>1, max=>2));
	
	public function check(){
		$data=$this->data;
		foreach($data as $field){
			
			if(!self::_valid_.$field['type']("yandex@mail.ru")){
				$this->errors[]="Ошибка в поле ".$field[1];
				continue;
			}
			
		}
		
		
		static function _valid_regexp($str,$pattern)
		{
			return preg_match($pattern, $str);
		}
		
		static function _valid_captcha($str)
		{
			return Captcha::check($str);
		}
		static function _valid_num($str, $min=0, $max=INT_MAX)
		{
			$int_options = array("options"=>
			array("min_range"=>$min, "max_range"=>$max));
			return filter_var($str, FILTER_VALIDATE_INT, $int_options);
		}
		static function _valid_email($str)
		{
			return filter_var($str, FILTER_VALIDATE_EMAIL);
		}
		static function _valid_url($str)
		{
			return filter_var($str, FILTER_VALIDATE_URL);
		}
		static function _valid_bool($str)
		{
			return filter_var($str, FILTER_VALIDATE_BOOLEAN);
		}
		public function query($query)
		{
			if(!count($this->errors))
			{
				$db=Registry::get('db');
				if(stripos($query,"INSERT"))
				{
					$data=" (`".implode("`,`", $this->fields)."`) VALUES (";
					$data_arr=array_fill(0,count($this->fields),"?");
					$data.="'".implode("','",$data_arr)."') ";
					str_replace("#data",$data,$query);
				}
				$db-prepare($query)->execute();
			}
		}
	}
}