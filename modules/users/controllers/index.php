<?php
Class Controller_Index Extends Controller {
	
	
	function index() {
	$this->title="Список пользователей";
		$db=Registry::get("db");
		$user=Registry::get("user");
		$pages = new Paginator($db->query("select count(*) from `users`;")->fetchColumn());
		
$items=$db->query("select * from `users` order by `id` desc limit {$pages->getLimit()}")->fetchAll();
 $this->assign('item',$items);
 $this->assign("pages",$pages->display());
		
	}
	
	
}

?>