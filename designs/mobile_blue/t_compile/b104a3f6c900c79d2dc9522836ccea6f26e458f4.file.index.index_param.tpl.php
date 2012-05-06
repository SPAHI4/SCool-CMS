<?php /* Smarty version Smarty-3.1.8, created on 2012-05-04 21:28:47
         compiled from "/home/spaxi116/public_html/mvc/modules/profile/templates/index.index_param.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6941810154f9807801cdbc0-57025409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b104a3f6c900c79d2dc9522836ccea6f26e458f4' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/modules/profile/templates/index.index_param.tpl',
      1 => 1335457408,
      2 => 'file',
    ),
    '3010e2456f509014e817900c6340d2ad00617d67' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/designs/mobile_brown/templates/document.tpl',
      1 => 1336148833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6941810154f9807801cdbc0-57025409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f98078032ec14_24994857',
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
<?php if ($_valid && !is_callable('content_4f98078032ec14_24994857')) {function content_4f98078032ec14_24994857($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/home/spaxi116/public_html/mvc/system/classes/smarty/plugins/function.mailto.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/spaxi116/public_html/mvc/system/classes/smarty/plugins/modifier.date_format.php';
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
			
			
				
<div class='item0'>
	<a href='<?php echo $_smarty_tpl->tpl_vars['profile']->value['avatar_full'];?>
'>
		<div style='margin: 3px; float: left; border-radius: 14px; background-image: url(<?php echo $_smarty_tpl->tpl_vars['profile']->value['avatar'];?>
); width: 100px; height: 100px;'>
		</div>
	</a>
	<span style='font-size: 15px;padding-left: 3px;'>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

		<b>
			<?php echo $_smarty_tpl->tpl_vars['profile']->value['login'];?>

		</b>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['surname'], ENT_QUOTES, 'UTF-8', true);?>

	</span>
	<?php if ($_smarty_tpl->tpl_vars['profile']->value['level']>0){?>
	<br />
	<b style='padding-left: 10px; color: red;'>
		<i contenteditable='true'>
			<?php echo $_smarty_tpl->tpl_vars['profile']->value['status_name'];?>

		</i>
	</b>
	<?php }?>
	<br />
	<div style='margin-left: 110px'>
		<b>
			E-mail:
		</b>
		<?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['email'], ENT_QUOTES, 'UTF-8', true),'encode'=>'javascript','subject'=>'Сообщение'),$_smarty_tpl);?>

		</a>
		<br>
		<b>
			О себе:
		</b>
		Сокку:
		<br />
			<?php echo Filters::full($_smarty_tpl->tpl_vars['profile']->value['about_me']);?>

		<br/>
		<b>
			Девайсы:
		</b>
		<?php echo Filters::full($_smarty_tpl->tpl_vars['profile']->value['devices']);?>

	</div>
	<div style='clear: both'>
	</div>
</div>
<div class='item1'>
	<b>
		Регистрация:
	</b>
	<?php echo getTime($_smarty_tpl->tpl_vars['profile']->value['reg_timestamp']);?>

	<br/>
	<b>
		Посл. посещение:
	</b>
	<?php echo getTime($_smarty_tpl->tpl_vars['profile']->value['last_visit']);?>

	<br/>
		<?php if ($_smarty_tpl->tpl_vars['user']->value->access("view_user_data")){?>
	<b>
		Браузер:
	</b>
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['browser'], ENT_QUOTES, 'UTF-8', true);?>

	<br/>
	<b>
		IP:
	</b>
	<?php echo long2ip($_smarty_tpl->tpl_vars['profile']->value['ip']);?>

	<?php }?>
</div>

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