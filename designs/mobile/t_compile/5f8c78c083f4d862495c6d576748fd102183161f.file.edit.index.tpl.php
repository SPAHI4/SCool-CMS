<?php /* Smarty version Smarty-3.1.8, created on 2012-05-05 21:31:13
         compiled from "/home/spaxi116/public_html/mvc/modules/profile/templates/edit.index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:901408694f981b71d03f18-10839508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f8c78c083f4d862495c6d576748fd102183161f' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/modules/profile/templates/edit.index.tpl',
      1 => 1336239072,
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
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f981b71edfc91_46875881')) {function content_4f981b71edfc91_46875881($_smarty_tpl) {?>

<form action="?sendData"  method="post" >
	<div class="label">
		Изменить данные
	</div>
	<div class="quick">
		<div style='width: 15%; float: left; padding: 3px;'>
			Имя
		</div>
		<div style='width: 84%; '>
			<input type="text"  name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" maxlength="30"/>
		</div>
		<div style='width: 15%; float: left; padding: 3px;'>
			Фамилия
		</div>
		<div style='width: 84%; '>
			<input type="text"  name="surname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
" maxlength="30"/>
		</div>
		<div style='width: 15%; float: left; padding: 3px;'>
			E-mail
		</div>
		<div style='width: 84%; '>
			<input name="email" type="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" maxlength="30"/>
		</div>
		<div style='width: 15%; float: left; padding: 3px;'>
			О себе
		</div>
		<div style='width: 84%; '>
			<textarea  name="about_me" cols="25" rows="5"><?php echo $_smarty_tpl->tpl_vars['user']->value['about_me'];?>
</textarea>
		</div>
		<div style='width: 15%; float: left; padding: 3px;'>
			Девайсы
		</div>
		<div style='width: 84%; '>
			<textarea  name="devices" cols="25" rows="5"><?php echo $_smarty_tpl->tpl_vars['user']->value['devices'];?>
</textarea>
		</div>
		<div style='width: 15%; float: left; padding: 3px;'>
		</div>
		<div style='width: 84%; '>
			<input type="submit" name="submit" value="Отправить"/>
		</div>
	</div>
	<div style="clear:both">
	</div>
</form>
<?php }} ?>