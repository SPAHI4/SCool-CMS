<?php /* Smarty version Smarty-3.1.8, created on 2012-04-06 14:03:15
         compiled from "/home/spaxi116/public_html/system/design/default/tpl/document.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17117754784f7dce40854038-71183245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '045e03f099007cab59cd84df7bf53308225303dc' => 
    array (
      0 => '/home/spaxi116/public_html/system/design/default/tpl/document.tpl',
      1 => 1333706246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17117754784f7dce40854038-71183245',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7dce4093f837_86540139',
  'variables' => 
  array (
    'description' => 0,
    'keywords' => 0,
    'user' => 0,
    'content' => 0,
    'gen_time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7dce4093f837_86540139')) {function content_4f7dce4093f837_86540139($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/spaxi116/public_html/system/classes/smarty/plugins/modifier.date_format.php';
?>﻿
<!DOCTYPE html PUBLIC '-//WAPFORUM//DTD XHTML Mobile 1.0//EN' 'http://www.wapforum.org/DTD/xhtml-mobile10.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='ru'>



  <head>
  <title>тест</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
  <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
  <link rel="stylesheet" type="text/css" href="/system/css/default/style.css">
  <script src="/system/js/jquery.min.js"></script>
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

  </script>
  </head>
  <body>
  <header> <div class='header'><img src="/system/css/default/logo.png" alt=""><span>тест</span></div></header>
  <div id='status1'></div>
  <?php if ($_smarty_tpl->tpl_vars['user']->value){?><div class="ads">Привет, <a href='/MySpace/'><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
</a> | <a href='/logout.php'>Выход</a><?php }else{ ?>
  <a href="/login.php">Вход</a> | <a href="/registration.php">Регистрация</a><?php }?>
  </div>

  <?php echo outputFilter($_smarty_tpl->tpl_vars['content']->value);?>


  <footer><div class='footer'>
  <a href="/">На главную</a><br>(c) SPAHI4 <?php echo smarty_modifier_date_format(time(),"%Y");?>
<br>
  <small>design by diz4wap.ru</small>
  </div>
<br /><b>Mobile</b> | <a href="/view.php?v=touch">Touch</a><br /><small>Генерация: <?php echo $_smarty_tpl->tpl_vars['gen_time']->value;?>
 сек.</small></footer>
</body> </html>
<?php }} ?>