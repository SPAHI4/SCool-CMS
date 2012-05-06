
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

		</head>
		<body>
		<div class="bg">
	<header>
	
<div class="logo">
<img src="{$path}images/logo.png" alt="" />
</div>
				</header>

{foreach $errors as $text}
<div class="error">{$text}</div>
{/foreach}
{foreach $msgs as $text}
<div class="msg">{$text}</div>
{/foreach}

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
				</div>
					{/if}<div class="copyright"><img src="{$path}images/c.png"/> ScoolCMS {$smarty.now|date_format:"%Y"}</div>


			<small>
			Генерация: {$gen_time} сек.
			</small>
			</footer>
			</div></div>
			</body>
		</html>
