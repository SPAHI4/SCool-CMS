<?php
Class Controller_Index Extends Controller {
	
	
	function index() {
		$this->title="Главная страница";
		$db=$this->db;
		
		//Счетчики
		$count['minichat'] = $db->query("select count(*) from `mini_chat`;")->fetchColumn();
		$count['forum']['posts'] = $db->query("select sum(`posts`) from `forums`;")->fetchColumn();
		$count['forum']['topics'] = $db->query("select sum(`topics`) from `forums`;")->fetchColumn();
		$count['users'] = $db->query("select count(*) from `users`;")->fetchColumn();
		
		$this->assign("count", $count);
		
		//Это главная страница
		$this->assign("index_page", TRUE);
		
	}
}

?>