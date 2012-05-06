<?php
Class Router {
	
	static function init()
	{
		$module = "index_page";
		$controller = "index";
		$action = "index";
		$route = explode("/",@trim($_GET['route'], '/\\'));
		$path=ROOT."modules/";
		
		if($route[0])$module=$route[0];
		if(count($route)==2){
			if(is_numeric($route[1])){
				$_GET['param']=$route[1];
				//Вызываем индекс с параметром
				$action = "index_param";
			}
			else if(file_exists($path.$module."/controllers/".$route[1].".php"))$controller=$route[1];
			else $action=$route[1];
			
		}
		else if(count($route)==3){
			if(file_exists($path.$module."/controllers/".$route[1].".php")){	
				$controller=$route[1];
				if(is_numeric($route[2])){
					$_GET['param']=$route[2];
					//Вызываем индекс с параметром
					$action = "index_param";
					} else $action=$route[2];
				
				}else {
				$action=$route[1];
				$_GET[$route[1]]=$route[2];
			}
		}
		
		
		
		$file = $path.$module."/controllers/{$controller}.php";
		@include_once($file);
		
		//Если существует метод
		if(method_exists("Controller_{$controller}",$action))
		{
			$c="Controller_{$controller}";
			$class=new $c();
			$class->$action();
			Registry::set("c_module",$module);
			Registry::set("c_tpl",$path.$module."/templates/{$controller}.{$action}.tpl");
			Registry::set("c_design_tpl",$module."/{$controller}.{$action}.tpl");
		}
		//Если нет, то ошибка 404
		else 
		{
			include_once($path."server_errors/controllers/index.php");
			if(DEBUG)echo "Запрашиваемый файл: <br/> {$file}";
			$c="Controller_Index";
			$class=new $c();
			$class->error_404();
			Registry::set("c_module","server_errors");
			Registry::set("c_tpl",$path."server_errors/templates/index.error_404.tpl");
			Registry::set("c_design_tpl","server_errors/index.error_404.tpl");
		}
		
	}
	
}