<?php
Class Controller_Index Extends Controller {
	
	
	function index() {
		$this->title="Мой профиль";
		
		
	}
	
	function index_param(){
		$this->viewprofile();
		Registry::set("c_action","viewprofile");
	}
	
	
	function viewprofile(){
		$profile = new User($_GET['param']);
		$this->assign("profile",$profile);
		$this->title="Профиль ".$profile['login'];
	}
	
	
	
	
	function logout(){
		if(isset($_POST['confirm'])){
			session_start();
			setcookie('uid',0,time()-100000,"/");
			setcookie('hash',0,time()-100000,"/");
			session_unset();
			header("Location: /");
		}
	}
}

?>