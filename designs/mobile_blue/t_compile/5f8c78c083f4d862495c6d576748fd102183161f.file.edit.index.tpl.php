<?php /* Smarty version Smarty-3.1.8, created on 2012-05-04 20:24:24
         compiled from "/home/spaxi116/public_html/mvc/modules/profile/templates/edit.index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:901408694f981b71d03f18-10839508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f8c78c083f4d862495c6d576748fd102183161f' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/modules/profile/templates/edit.index.tpl',
      1 => 1335543970,
      2 => 'file',
    ),
    '3010e2456f509014e817900c6340d2ad00617d67' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/designs/mobile_brown/templates/document.tpl',
      1 => 1336148636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '901408694f981b71d03f18-10839508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f981b71edfc91_46875881',
  'variables' => 
  array (
    'parent_path' => 0,
    'title' => 0,
    'description' => 0,
    'keywords' => 0,
    'path' => 0,
    'user' => 0,
    'index_page' => 0,
    'gen_time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f981b71edfc91_46875881')) {function content_4f981b71edfc91_46875881($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/spaxi116/public_html/mvc/system/classes/smarty/plugins/modifier.date_format.php';
?>﻿
<!DOCTYPE html PUBLIC '-//WAPFORUM//DTD XHTML Mobile 1.0//EN' 'http://www.wapforum.org/DTD/xhtml-mobile10.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='ru'>
	<head>
		<title>
			<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

		</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
		<link rel="stylesheet" type="text/css" href="/designs/<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/style.css">
			<script src="/js/jquery.min.js">
			</script>

		</head>
		<body>
		<div class="bg">
	<header>
	
<div class="logo">
<img src="/designs/<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/images/logo.png" alt="" />
</div>
				</header>

		<div class="ads">
			<?php if ($_smarty_tpl->tpl_vars['user']->value){?>Привет,
		<a href='/profile/'>
		<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>

		</a>
			|
			<a href='/profile/logout/'>
				Выход
			</a>
			<?php if ($_smarty_tpl->tpl_vars['user']->value['unreaded_messages']){?>
			<a href="/mail/">
				Почта: +
			</a>
			<?php echo $_smarty_tpl->tpl_vars['user']->value['unreaded_messages'];?>
<?php }?><?php }else{ ?>
			<a href="/sign_in/">
				Вход
			</a>
			|
			<a href="/sign_up/">
				Регистрация
			</a>
			<?php }?>
			</div>
			
			
				
<form action="?sendData"  method="post" >
	<div class="label">
		Изменить данные
	</div>
	<div class="quick">
		<div style='width: 10%; float: left; padding: 3px;'>
			Имя
		</div>
		<div style='width: 89%; '>
			<input type="text"  name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" maxlength="30"/>
		</div>
		<div style='width: 10%; float: left; padding: 3px;'>
			Фамилия
		</div>
		<div style='width: 89%; '>
			<input type="text"  name="surname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
" maxlength="30"/>
		</div>
		<div style='width: 10%; float: left; padding: 3px;'>
			E-mail
		</div>
		<div style='width: 89%; '>
			<input name="email" type="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" maxlength="30"/>
		</div>
		<div style='width: 10%; float: left; padding: 3px;'>
			О себе
		</div>
		<div style='width: 89%; '>
			<textarea  name="about_me" cols="25" rows="5"><?php echo $_smarty_tpl->tpl_vars['user']->value['about_me'];?>
</textarea>
		</div>
		<div style='width: 10%; float: left; padding: 3px;'>
			Девайсы
		</div>
		<div style='width: 89%; '>
			<textarea  name="devices" cols="25" rows="5"><?php echo $_smarty_tpl->tpl_vars['user']->value['devices'];?>
</textarea>
		</div>
		<div style='width: 10%; float: left; padding: 3px;'>
		</div>
		<div style='width: 89%; '>
			<input type="submit" name="submit" value="Отправить"/>
		</div>
	</div>
	<div style="clear:both">
	</div>
</form>

			<footer>
		<div class='footer'>
		<?php if (!$_smarty_tpl->tpl_vars['index_page']->value){?>
		<a href="/">
			На главную
			</a>
				</div>
					<?php }?><div class="copyright"><img src="/designs/<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/images/c.png"/> ScoolCMS <?php echo smarty_modifier_date_format(time(),"%Y");?>
</div>


			<small>
			Генерация: <?php echo $_smarty_tpl->tpl_vars['gen_time']->value;?>
 сек.
			</small>
			</footer>
			</div></div>
			</body>
		</html>
<?php }} ?>