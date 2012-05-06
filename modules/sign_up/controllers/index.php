<?php
Class Controller_Index Extends Controller {
	
	
	function index() {
	$this->title="Регистрация";
    $this->only_for="anauth";
		if(isset($_POST['sendData'])){
			if(!Captcha::check()){
				$this->addError('Неверное проверочное число');
			}
			
			if(strlen(trim($_POST['login']))<3)$this->addError('Короткий логин');
			else{
				if(!preg_match("#^([A-zА-я0-9\-\_\ ])+$#ui", $_POST['login']))$this->addError('В логине присутствуют запрещенные символы');
				if (preg_match("#[A-z]+#ui", $_POST['login']) && preg_match("#[А-я]+#ui", $_POST['login']))$this->addError('Разрешается использовать символы только русского или только английского алфавита');
				if($this->db->query("select count(*) from `users` where `login` = '".addslashes($_POST['login'])."';")->fetchColumn())$this->addError('Данный логин уже занят');
				if(trim(strlen($_POST['login']))>16)$this->addError('Длинный логин');
				if(trim(strlen($_POST['login']))<3)$this->addError('Длинный логин');
				if (is_numeric(trim(str_replace(" ","",$_POST['login']))))$this->addError("Логин не должен состоять только из цифр");
			}
			
			if($_POST['password']!=$_POST['confirmPassword'])$this->addError('Введенные пароли не совпадают');
			if(strlen(trim($_POST['password']))<6)$this->addError('Короткий пароль');
			
			if(!$this->errors){
				$this->db->query("insert into `users` (`login`,`password`,`reg_timestamp`,`sex`) values ('".addslashes(trim($_POST['login']))."','".hashEncode(trim($_POST['password']))."',UNIX_TIMESTAMP(NOW()),'".(bool)$_POST['sex']."')");
				$uid=$this->db->lastInsertId();
				setCookie('uid',$uid,time()+3500000,"/");
				setCookie('hash',hashEncode($_POST['password']),time()+3500000,"/");
				$_SESSION['user_id']=$uid;
				header("Location: /profile/");
				
			}
			
		}
	}
}
?>