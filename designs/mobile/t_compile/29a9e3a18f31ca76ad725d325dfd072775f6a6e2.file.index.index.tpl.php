<?php /* Smarty version Smarty-3.1.8, created on 2012-05-05 21:30:30
         compiled from "/home/spaxi116/public_html/mvc/modules/profile/templates/index.index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115329124f96dd4d6f7e29-98374768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29a9e3a18f31ca76ad725d325dfd072775f6a6e2' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/modules/profile/templates/index.index.tpl',
      1 => 1336239029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115329124f96dd4d6f7e29-98374768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f96dd4d854035_33238342',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f96dd4d854035_33238342')) {function content_4f96dd4d854035_33238342($_smarty_tpl) {?>


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
	<a href="avatar">
		Аватар
	</a>
	[
	<a href='avatar/crop'>
		подогнать
	</a>
	]
	<br>
	<a href="/profile/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/">
		Просмотреть профиль
	</a>
	<br>
</div>


<?php }} ?>