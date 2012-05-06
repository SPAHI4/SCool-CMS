<?php
Class Controller_Index Extends Controller {
	
	
	function index() {
		if(isset($_POST['sendData'])){
			$us=new User($_POST['login']);
			if($us && (time()-$us['last_auth_attempt']<15000) && !checkCaptcha())$this->error('Введите символы с картинки');
			if(!$this->errors){
				if($us['password']==hashEncode($_POST['password'])){
					if($_POST['rememberMe']){
						setCookie('uid',$us['id'],time()+35000000,"/");
						setCookie('hash',$us['password'],time()+35000000,"/");
					}
					$_SESSION['user_id']=$us['id'];
					
					header("Location: ".($_SESSION['authRedirect']?$_SESSION['authRedirect']:"/"));
					}else {
					$this->error('Неверное сочетание логин/пароль');
					$db->query("update `users` set `last_auth_attempt` = UNIX_TIMESTAMP(NOW()) where `id` = '$us[id]';");
				}
			}
		}
		
		if(isset($_GET['unAuth']))$this->message("Необходима авторизация");
		
		
		
	}
}

?>