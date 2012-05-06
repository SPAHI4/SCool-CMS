<?php
Class Controller_Edit Extends Controller {
	
	function index()
	{
		$this->title="Редактировать профиль";
		if(isset($_POST['submit']))
		{
			$data=array($_POST['devices'], $_POST['name'], $_POST['surname'], $_POST['email'], $_POST['about_me']);
			$this->db->prepare("UPDATE users SET devices = ?, name = ?, surname = ?, email = ?, about_me = ? WHERE id = {$this->user['id']} ")->execute($data);
			$this->addMsg("Успешно обновлено");
			//Обновляем параметры пользователя
			Registry::set("user",new User($this->user['id']));
			
		}
	}
}
?>