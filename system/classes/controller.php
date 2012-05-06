<?php
include_once "smarty/Smarty.class.php";


abstract Class Controller extends Smarty{
	
	protected $title = "Страница";
	//Мета - ключевые слова
	protected $kw;
	//Мета - описание
	protected $descr;
	//Уровень доступа
	protected $access_level = 0;
	//Привелегия доступа
	protected $access = "";
	//Только для (auth|unauth)
	protected $only_for="";
	protected $errors = array();
	protected $msgs = array();
	protected $display = 1;
	public    $user;
	public    $db;
	
	
	public function __construct()
	{
		
		$db=Registry::get("db");
		$this->db=$db;
		
		#============================================#
		## Авторизация                               #
		#============================================#
		
		$user=false;
		
		if(isset($_SESSION['user_id']))$user=new User($_SESSION['user_id']);
		
		else if(isset($_COOKIE['uid']))
		{
			if($db->query("select `password` from `users` where `id` = '".(int)$_COOKIE['uid']."';")->fetchColumn()==$_COOKIE['hash'])
			{
				$_SESSION['user_id']=$_COOKIE['uid'];
				$user=new User($_COOKIE['uid']);
			}
			else{
				unset($_SESSION['user_id']);
				setCookie('uid','0',$time-100000);
				setCookie('hash','0',$time-100000);
			}
		}
		Registry::set("user",$user);	
		$this->user=$user;
		if($user)$db->query("update `users` set `last_visit` = UNIX_TIMESTAMP(NOW()), `user_agent` = '".addslashes($_SERVER['HTTP_USER_AGENT'])."', `ip` = '".ip2long($_SERVER['REMOTE_ADDR'])."' WHERE `id` = '$user[id]';");
		header('Content-Type: text/html; charset=utf-8', true);
		
		
	}
	
	
	
	// добавление в список ошибок
	
	protected function addError($error)
	{
		$this->errors[] = $error;
	}
	
	
	
	// добавление в список сообщений
	
	protected function addMsg($msg)
	{
		$this->msgs[] = $msg;
	}
	
	
	//Если действие не ajax и не состоит из цифр, отображаем страницу в шаблоне
	function __destruct(){
		if(Registry::get('с_action') != 'ajax' && !is_numeric(Registry::get('с_action')))
			self::_display();
	}
	
	
	
	#============================================#
	## Отображение страницы                      #
	#============================================#
	
	private function _display()
		{    
		global $t;
		$user=Registry::get("user");
		$config=Registry::get("config");
		
		//Подбираем дизайн и определяем браузер
		
		$browser = new Browser();
		if($browser->isMobile()){
			if(file_exists(ROOT."designs/".$config['designs']['mobile']."/templates/document.tpl"))
				$design_dir=$config['designs']['mobile'];
			else $design_dir=$config['designs']['default'];
			}else{
			
			if(file_exists(ROOT."designs/".$config['designs']['web']."/templates/document.tpl"))
				$design_dir=$config['designs']['mobile'];
			else $design_dir=$config['designs']['default'];
			
		}
		
		
		//Инициализируем Smarty
		parent::__construct();
		
		
		//Получаем шаблон контроллера
		$inc_tpl=ROOT."designs/{$design_dir}/templates/".Registry::get('c_design_tpl');
		//Если его нет в теме, то берем из модуля
		if(!file_exists($inc_tpl))$inc_tpl=Registry::get('c_tpl');
		
		
		
		//Регистрируем переменные и функции в шаблонах
		
		$this->registerPlugin("modifier","output", "Filters::full");
		$this->registerPlugin("modifier","getlogin", "getLogin");
		$this->registerPlugin("modifier","cut", "cut");
		$this->registerPlugin("modifier","time", "getTime");
		$this->registerPlugin("modifier","long2ip", "long2ip");
		$this->registerPlugin("modifier","name", "username");
		$this->registerPlugin("modifier","lastpage", "getLastPage");
		$this->registerPlugin("function","plural", "plural");
		
		$this->assignByRef('user', $user);
		
		$this->assign('title', $this->title);
		$this->assign('description', $this->descr);
		$this->assign('keywords', $this->kw);
		$this->assign('errors', $this->errors);
		$this->assign('msgs', $this->msgs);
		$this->assign('gen_time', round(microtime(1) - $t, 4));
		$this->assign('include_file', "file:".$inc_tpl);
		$this->assign('path', '/designs/'.$design_dir.'/');
		$this->assign('design', parse_ini_file(ROOT."designs/".$design_dir."/design.ini",TRUE));
		$this->assign('img_path', "/modules/".Registry::get('c_module')."/images/");
		$this->assign('js_path', "/modules/".Registry::get('c_module')."/js/");
		
		
		//Настройка
		
		$this->setTemplateDir(ROOT . 'designs/'.$design_dir.'/templates/');
		$this->setCompileDir(ROOT . 'designs/'.$design_dir.'/t_compile/');
		$this->setConfigDir(ROOT . 'designs/'.$design_dir.'/t_config/');
		$this->setCacheDir(ROOT . 'designs/'.$design_dir.'/t_cache/');
		$this->setCaching(Smarty::CACHING_OFF);
		$this->setCompileCheck(true);
		$this->error_reporting = true;
		
		
		//Отображение шаблона
		$this->display(ROOT."designs/".$design_dir."/templates/document.tpl");
	}
	} 
?>