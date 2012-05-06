<?php /* Smarty version Smarty-3.1.8, created on 2012-04-15 20:34:52
         compiled from "/home/spaxi116/public_html/system/design/mobile/templates/document.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3879600244f8838424dcd61-61624811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b1ca8df2674c8b99638f9c43557db35e4498fc' => 
    array (
      0 => '/home/spaxi116/public_html/system/design/mobile/templates/document.tpl',
      1 => 1334507465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3879600244f8838424dcd61-61624811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8838425490a7_33512558',
  'variables' => 
  array (
    'title' => 0,
    'description' => 0,
    'keywords' => 0,
    'path' => 0,
    'JS' => 0,
    'msg' => 0,
    'error' => 0,
    'user' => 0,
    'content' => 0,
    'gen_time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8838425490a7_33512558')) {function content_4f8838425490a7_33512558($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/spaxi116/public_html/system/classes/smarty/plugins/modifier.date_format.php';
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
		<link rel="stylesheet" type="text/css" href="/system/design/<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/style.css">
			<script src="/system/js/jquery.min.js">
			</script>
				<?php if ($_smarty_tpl->tpl_vars['JS']->value){?>
		<script src="/system/js/<?php echo $_smarty_tpl->tpl_vars['JS']->value;?>
.js">
			</script>
				<?php }?>
		<script>
		
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
				
				<?php if ($_smarty_tpl->tpl_vars['msg']->value){?>
				$(document).ready(function(){
				status('<?php echo $_smarty_tpl->tpl_vars['msg']->value[0];?>
','message'); });
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
				$(document).ready(function(){
				status('<?php echo $_smarty_tpl->tpl_vars['error']->value[0];?>
','error'); });
				<?php }?>
				
			
		</script>
		</head>
		<body>
	<header>
	<div class='header'>
		<img src="/system/design/<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/images/logo.png" alt="">
			<span>
				<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

				</span>
				</div>
				</header>
			<div id='status1'>
		</div>
		<div class="ads">
			<?php if ($_smarty_tpl->tpl_vars['user']->value){?>Привет,
		<a href='/my/'>
		<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>

		</a>
			|
			<a href='/logout.php'>
				Выход
			</a>
			<?php if ($_smarty_tpl->tpl_vars['user']->value['unreaded_messages']){?>
			<a href="/mail/">
				Почта: +
			</a>
			<?php echo $_smarty_tpl->tpl_vars['user']->value['unreaded_messages'];?>
<?php }?><?php }else{ ?>
			<a href="/login.php">
				Вход
			</a>
			|
			<a href="/registration.php">
				Регистрация
			</a>
			<?php }?>
			</div>
				<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

			<footer>
		<div class='footer'>
		<?php if ($_SERVER['SCRIPT_NAME']!='/index.php'){?>
		<a href="/">
			На главную
			</a>
				<br>
					<?php }?>©
				<a href="/Profile/1">
				SPAHI4
				</a>
				<br />
					ScoolCMS <?php echo smarty_modifier_date_format(time(),"%Y");?>

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
			Генерация: <?php echo $_smarty_tpl->tpl_vars['gen_time']->value;?>
 сек.
			</small>
			</footer>
			</body>
		</html>
<?php }} ?>