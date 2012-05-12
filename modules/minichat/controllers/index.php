<?php
Class Controller_Index Extends Controller {
	
	
	function index() {
	$this->title="Мини чат";
		$db=Registry::get("db");
		$user=Registry::get("user");
		if ($this->user && isset($_POST['message'])) {
			if (strlen($_POST['message']) > 250)
				$this->addError('Длинное сообщение');
			else
			if (strlen($_POST['message']) < 2)
				$this->addError('Короткое сообщение');
			if ($db->query("select count(*) from `mini_chat` where `id_user` = '$user[id]' and `message` = '".addslashes($_POST['message'])."'")->fetchColumn())
				$this->addError("Ваше сообщение повторяет предыдущее");
			if ($db->query("select `time` from `mini_chat` where `id_user` = '$user[id]' order by `id` desc limit 1")->fetchColumn() + 30 > time())
				$this->addError("Вы уже написали сообщение за текущие 30 секунд");
			if (!$this->errors) {
			
				if ($db->query("insert into `mini_chat` (`message`,`id_user`,`time`) values ('".addslashes($_POST['message'])."','$user[id]',UNIX_TIMESTAMP(NOW()) );"))
					$this->addMsg("Сообщение добавлено");
			}
		}
		
		$pages = new Paginator($db->query("select count(*) from `mini_chat`;")->fetchColumn());
		
$items=$db->query("select * from `mini_chat` order by `id` desc limit {$pages->getLimit()}")->fetchAll();
 $this->assign('item',$items);
 $this->assign("pages",$pages->display());
		
	}
	
	
}

?>