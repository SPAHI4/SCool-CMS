<?php /* Smarty version Smarty-3.1.8, created on 2012-05-05 21:37:47
         compiled from "/home/spaxi116/public_html/designs/mobile/templates/document.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20559667264fa5656b9773a1-91824491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fad9627acc12319281110667c5ced25c288d2bc' => 
    array (
      0 => '/home/spaxi116/public_html/designs/mobile/templates/document.tpl',
      1 => 1336239222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20559667264fa5656b9773a1-91824491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'description' => 0,
    'keywords' => 0,
    'path' => 0,
    'errors' => 0,
    'text' => 0,
    'msgs' => 0,
    'user' => 0,
    'include_file' => 0,
    'index_page' => 0,
    'gen_time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa5656b9ff451_76840639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa5656b9ff451_76840639')) {function content_4fa5656b9ff451_76840639($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/spaxi116/public_html/system/classes/smarty/plugins/modifier.date_format.php';
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
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
style.css">
			<script src="/js/jquery.min.js">
			</script>

		</head>
		<body>
		<div class="bg">
	<header>
	
<div class="logo">
<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
images/logo.png" alt="" />
</div>
				</header>

<?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value){
$_smarty_tpl->tpl_vars['text']->_loop = true;
?>
<div class="error"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</div>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value){
$_smarty_tpl->tpl_vars['text']->_loop = true;
?>
<div class="msg"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</div>
<?php } ?>

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
			
			
				<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<footer>
		<div class='footer'>
		<?php if (!$_smarty_tpl->tpl_vars['index_page']->value){?>
		<a href="/">
			На главную
			</a>
				</div>
					<?php }?><div class="copyright"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
images/c.png"/> ScoolCMS <?php echo smarty_modifier_date_format(time(),"%Y");?>
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