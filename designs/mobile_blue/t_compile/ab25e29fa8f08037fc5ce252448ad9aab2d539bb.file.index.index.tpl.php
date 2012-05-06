<?php /* Smarty version Smarty-3.1.8, created on 2012-04-27 22:26:19
         compiled from "/home/spaxi116/public_html/mvc/modules/forum/templates/index.index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6342892604f9ace30d50fb0-25319795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab25e29fa8f08037fc5ce252448ad9aab2d539bb' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/modules/forum/templates/index.index.tpl',
      1 => 1335545331,
      2 => 'file',
    ),
    '490203de56a1fe659d695d47359c5267754bc33b' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/designs/mobile/templates/document.tpl',
      1 => 1335551098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6342892604f9ace30d50fb0-25319795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9ace322b9220_84075149',
  'variables' => 
  array (
    'parent_path' => 0,
    'title' => 0,
    'description' => 0,
    'keywords' => 0,
    'path' => 0,
    'msg' => 0,
    'error' => 0,
    'user' => 0,
    'index_page' => 0,
    'gen_time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9ace322b9220_84075149')) {function content_4f9ace322b9220_84075149($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/spaxi116/public_html/mvc/system/classes/smarty/plugins/modifier.date_format.php';
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
		<img src="/designs/<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/images/logo.png" onclick="status('fuck','message');" alt="">
			<span>
				<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

				</span>
				</div>
				</header>
			<div id='status1'>
		</div>
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
				
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['forum']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
<div class="item<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'])){?>0<?php }else{ ?>1<?php }?>">
<strong><a href="/forum/<?php echo $_smarty_tpl->tpl_vars['forum']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['forum']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></strong><br />
<?php if ($_smarty_tpl->tpl_vars['forum']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descr']){?><?php echo Filters::full($_smarty_tpl->tpl_vars['forum']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descr']);?>
<br /> <?php }?>
<small><?php echo $_smarty_tpl->tpl_vars['forum']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['subforums'];?>
</small>
</div>
<?php endfor; endif; ?>

			<footer>
		<div class='footer'>
		<?php if (!$_smarty_tpl->tpl_vars['index_page']->value){?>
		<a href="/">
			На главную
			</a>
				<br>
					<?php }?>©
				<a href="/profile/1">
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