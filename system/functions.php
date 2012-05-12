<?php

//Соль для кодировки пароля; 
//При изменении - все пароли уже зарегистрированных пользователей становятся недействительными
$salt = 'salt';


function getLastPage($count) {
	$config=Registry::get('config');
	return ceil($count / $config['settings']['items_per_page']);
}

//Вырезает содержание тега [cut]
function cut($text){
	preg_replace("/\[cut\](.+)\[/cut\]/isU", "", $text);
	return $text;
}


function plural($number, $titles) {
	$cases = array(2, 0, 1, 1, 1, 2);
	return $number." ".$titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];
}

//Кодируем хэш для пароля
function hashEncode($pass)
	
{
	global $salt;
	return md5(md5(trim($pass.$salt)));
}

function clientIP()
	//Автор не я
//Фигня, багованная
{
	if (isset ($_SERVER['HTTP_X_REAL_IP'])) {
		return $_SERVER['HTTP_X_REAL_IP'];
	}
	else {
		if (!empty ($_SERVER['HTTP_CLIENT_IP'])) {
			return $_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty ($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else {
			return $_SERVER['REMOTE_ADDR'];
		}
	}
}



function getLogin($uid) {
	$db=Registry::get('db');
	return $db->query("select `login` from `users` where `id` = '".intval($uid)."';")->fetchColumn();
}

function getTime($time = 0) {
	$monthes=array("Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сент", "Октября", "Ноября", "Декабря");
	if($time){
		$shift=time()-$time;
		if($shift<10)return 'Только что';
		elseif($shift<60)return $shift.' секунд назад';
		elseif($shift<3600)return floor($shift/60).' минут назад';
		elseif(date('d')==date('d',$time)) return 'Сегодня в '.date('H:i',$time);
		elseif(date('d')-1==date('d',$time)) return 'Вчера в '.date('H:i',$time);
		elseif(date('Y')==date('Y',$time)) return date('j',$time).' '.$monthes[date('n',$time)-1].' в '.date('H:i',$time);
		elseif(date('Y')!=date('Y',$time)) return date('j',$time).' '.$monthes[date('n',$time)-1].' '.date('Y',$time).' в '.date('H:i',$time);
	}
	else return date('H:i:s');
}

//Ниже две функции для склонения имен
//Увеличивает генерацию при использовании на ~0,1 сек
function inflect($name) {
	// Building Request URL
	$url = 'http://export.yandex.ru/inflect.xml?name='.urlencode($name);
	// Processing CURL Request
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.1; U; ru) Presto/2.6.30 Version/10.61');
	// Just for fun, or ...
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($curl);
	curl_close($curl);
	// Preparing Inflections
	$cases = array();
	preg_match_all('#\<inflection\s+case\=\"([0-9]+)\"\>(.*?)\<\/inflection\>#si', $result, $m);
	// Creating Inflection List
	if (count($m[0])) {
		foreach($m[1] as $i => & $id) {
			$cases[(int) $id] = $m[2][$i];
		}
		unset ($id);
	}
	else
	return null;
	// Sending Request Back to User
	if (count($cases) > 1) {
		return $cases;
	}
	else
	return false;
}

function username($name, $case = 1) {
	$cases = inflect($name);
	if ($cases && count($cases) > 1) {
		return $cases[$case];
	}
	else
	return $name;
}
?>