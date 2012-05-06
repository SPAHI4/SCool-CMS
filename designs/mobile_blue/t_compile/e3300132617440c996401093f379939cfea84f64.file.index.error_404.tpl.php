<?php /* Smarty version Smarty-3.1.8, created on 2012-05-04 20:27:14
         compiled from "/home/spaxi116/public_html/mvc/modules/server_errors/templates/index.error_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12228344574f997ee15b7298-25955306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3300132617440c996401093f379939cfea84f64' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/modules/server_errors/templates/index.error_404.tpl',
      1 => 1335460272,
      2 => 'file',
    ),
    '3010e2456f509014e817900c6340d2ad00617d67' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/designs/mobile_brown/templates/document.tpl',
      1 => 1336148833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12228344574f997ee15b7298-25955306',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f997ee15b7e64_08792423',
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
<?php if ($_valid && !is_callable('content_4f997ee15b7e64_08792423')) {function content_4f997ee15b7e64_08792423($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/spaxi116/public_html/mvc/system/classes/smarty/plugins/modifier.date_format.php';
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
			
			
				
<div class="quick"><h3> 
<img src = "<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
yoda.jpg"/><br>
Это не та страница, искал ты кторую.<br>
Вернись на страницу главную.<br>
Да прибудет с тобой сила!<br>
</h3>
</div>
<div style="clear: both;"></div>

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