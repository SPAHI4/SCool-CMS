<?php

class User extends ArrayObject {
	public $user;
	
	
	function __construct($us) {
		$db=Registry::get("db");
		if (is_numeric($us)) {
			$this->user = $db->query("select * from `users` where `id` = '".intval($us)."';")->fetch();
		}
		else {
			$this->user = $db->query("select * from `users` where `login` = '".addslashes($us)."';")->fetch();
		}
	}
	
	public function offsetGet($name) {
		if (array_key_exists($name, $this->user))
			return $this->user[$name];
		#Получаем аватар
		elseif ($name == "avatar") {
			if (file_exists(HOME.'/files/avatars/'.$this->user['id'].'_x100.jpg'))
				$this->user['avatar'] = '/files/avatars/'.$this->user['id'].'_x100.jpg';
			if (file_exists(HOME.'/files/avatars/'.$this->user['id'].'_x100.png'))
				$this->user['avatar'] = '/files/avatars/'.$this->user['id'].'_x100.png';
			if (file_exists(HOME.'/files/avatars/'.$this->user['id'].'_x100.gif'))
				$this->user['avatar'] = '/files/avatars/'.$this->user['id'].'_x100.gif';
			if (!$this->user['avatar'])
				$this->user['avatar'] = '/files/avatars/default.jpg';
			return $this->user['avatar'];
		}
		elseif ($name == "avatar_full") {
			if (file_exists(HOME.'/files/avatars/'.$this->user['id'].'.jpg'))
				$this->user['avatar_full'] = '/files/avatars/'.$this->user['id'].'.jpg';
			elseif (file_exists(HOME.'/files/avatars/'.$this->user['id'].'.png'))
				$this->user['avatar_full'] = '/files/avatars/'.$this->user['id'].'.png';
			elseif (file_exists(HOME.'/system/'.$this->user['id'].'.gif'))
				$this->user['avatar_full'] = '/files/avatars/'.$this->user['id'].'.gif';
			elseif (!$this->user['avatar_full'])
				$this->user['avatar_full'] = '/files/avatars/default.jpg';
			return $this->user['avatar_full'];
		}
		elseif ($name == "browser") {
			$browser = new Browser($this->user['user_agent']);
			return $browser->getBrowser()." ".$browser->getVersion()." (".$browser->getPlatform().")";
		}
	}
	
	public function offsetSet($name, $value) {
		global $db;
		if (array_key_exists($name, $this->user))
			$db->query("UPDATE `users` SET `$name` = '".addslashes($value)."' WHERE `id` = '{$this->user['id']}';");
	}
	
	
	public function access($access) {
		
		if ($this->user) {
			if (strstr($this->user['accesses'], '|admin|'))
				//Полный доступ
			return true;
			else {
				if (strstr($this->user['accesses'], '|'.$access.'|'))
					return true;
				else
				return false;
			}
		}
	}
}
