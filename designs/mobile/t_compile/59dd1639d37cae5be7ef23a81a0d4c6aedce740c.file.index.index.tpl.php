<?php /* Smarty version Smarty-3.1.8, created on 2012-05-05 21:38:32
         compiled from "/home/spaxi116/public_html/modules/profile/templates/index.index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9024075454fa564a23b7a58-90512535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59dd1639d37cae5be7ef23a81a0d4c6aedce740c' => 
    array (
      0 => '/home/spaxi116/public_html/modules/profile/templates/index.index.tpl',
      1 => 1336239509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9024075454fa564a23b7a58-90512535',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa564a23f0616_83594377',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa564a23f0616_83594377')) {function content_4fa564a23f0616_83594377($_smarty_tpl) {?>


<div class="label">
	Моё меню
</div>
<div class="main">
	<a href="/mail/">
		Почта <?php if ($_smarty_tpl->tpl_vars['user']->value['unreaded_messages']){?>+<?php echo $_smarty_tpl->tpl_vars['user']->value['unreaded_messages'];?>
<?php }?>
	</a>
	<br>
	<a href="edit">
		Изменить анкету
	</a>
	<br>
	<a href="/profile/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/">
		Просмотреть профиль
	</a>
	<br>
</div>


<?php }} ?>