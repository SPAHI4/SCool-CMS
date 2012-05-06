
<!DOCTYPE html PUBLIC '-//WAPFORUM//DTD XHTML Mobile 1.0//EN' 'http://www.wapforum.org/DTD/xhtml-mobile10.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='ru'>
	<head>
		<title>
			{$title}
		</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="{$description}">
		<meta name="keywords" content="{$keywords}">
		<link rel="stylesheet" type="text/css" href="{$path}style.css">
			<script src="/js/jquery.min.js">
			</script>

		<script>
		{literal}
		function status(text,status){
		if($('#status').length){
		$('#status').slideUp('fast', function(){
		clearTimeout(tmID);
		$('<div />').attr({'id': 'status', 'class': status}).appendTo('#status1').text(text).slideDown('fast');
			}); }   else $('<div />').attr({'id': 'status', 'class': status}).appendTo('#status1').text(text).slideDown('fast');
				var tmID=setTimeout(statusRemove, 5000);
				void(tmID);
				
				}
				function xbbSpoiler(obj)
				{
				var obj_content = obj.parentNode.parentNode.getElementsByTagName('div')[1];
				var obj_text_show = obj.getElementsByTagName('span')[1];
				var obj_text_hide = obj.getElementsByTagName('span')[0];
				
				if (obj_content.style.display != '') {
				obj_content.style.display = '';
				obj_text_show.style.display = '';
				obj_text_hide.style.display = 'none';
				} else {
				obj_content.style.display = 'none';
				obj_text_show.style.display = 'none';
				obj_text_hide.style.display = '';
				}
				return false;
				}
				function statusRemove(){
				$("#status").fadeOut('slow', function(){ $("#status").remove();});
				}
				function is_numeric( mixed_var ) {
				return !isNaN( mixed_var );
				}
				
				$(document).ready(function(){
				$(".spoiler").next().hide();
				});
				
				$("#spoiler").click(function(){
				$("#spoiler").next().hide();
				alert("ololo");
				});
				{/literal}
				{if $msg}
				$(document).ready(function(){
				status('{$msg[0]}','message'); });
				{/if}
				
				{if $error}
				$(document).ready(function(){
				status('{$error[0]}','error'); });
				{/if}
				
			
		</script>
		</head>
		<body>
	<header>
	<div class='header'>
		<img src="{$path}images/logo.png" onclick="status('fuck','message');" alt="">
			<span>
				{$title}
				</span>
				</div>
				</header>
			<div id='status1'>
		</div>
		<div class="ads">
			{if $user}Привет,
		<a href='/profile/'>
		{$user.login}
		</a>
			|
			<a href='/profile/logout/'>
				Выход
			</a>
			{if $user.unreaded_messages}
			<a href="/mail/">
				Почта: +
			</a>
			{$user.unreaded_messages}{/if}{else}
			<a href="/sign_in/">
				Вход
			</a>
			|
			<a href="/sign_up/">
				Регистрация
			</a>
			{/if}
			</div>
				{include file=$include_file}
			<footer>
		<div class='footer'>
		{if !$index_page}
		<a href="/">
			На главную
			</a>
				<br>
					{/if}©
				<a href="/profile/1">
				SPAHI4
				</a>
				<br />
					ScoolCMS {$smarty.now|date_format:"%Y"}
				<br>
				<small>
					design by diz4wap.ru
				</small>
				</div>
				<br />
			<b>
			Mobile
			</b>
				|
			<a href="/view.php?v=touch">
				Touch
			</a>
			|
			<a href="/view.php?v=web">
				Web
			</a>
			<br />
			<small>
			Генерация: {$gen_time} сек.
			</small>
			</footer>
			</body>
		</html>
