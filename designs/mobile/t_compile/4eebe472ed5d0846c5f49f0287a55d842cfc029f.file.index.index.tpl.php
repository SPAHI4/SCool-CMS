<?php /* Smarty version Smarty-3.1.8, created on 2012-05-05 20:58:16
         compiled from "/home/spaxi116/public_html/mvc/modules/sign_up/templates/index.index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19756034444f956d57a48707-94747533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4eebe472ed5d0846c5f49f0287a55d842cfc029f' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/modules/sign_up/templates/index.index.tpl',
      1 => 1336236814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19756034444f956d57a48707-94747533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f956d58195250_58290201',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f956d58195250_58290201')) {function content_4f956d58195250_58290201($_smarty_tpl) {?>

<form method="post" action="?sendData">
	<div class="quick">
		<div style="width: 15%; float: left; padding: 3px;">
			Логин:
		</div>
		<div style="width: 80%; float: left;">
			<input type="text" name="login" maxlength="16" value="" REQUIRED/>
			<br />
			<small style=" margin: 2px; margin-left: 5px;">
				Только английский или только русский 3-16 символов, включая _ и -
			</small>
		</div>
		<div style="width: 15%; float: left; padding: 3px;">
			Пароль:
		</div>
		<div style="width: 80%; float: left;">
			<input type="password" name="password"  maxlength="36" value="" REQUIRED />
		</div>
		<div style="width: 15%; float: left; padding: 3px;">
			Еще раз:
		</div>
		<div style="width: 80%; float: left;">
			<input type="password" name="confirmPassword"  maxlength="36" value="" REQUIRED />
		</div>
		<div style="width: 15%; float: left; padding: 3px;">
			Введите код:
		</div>
		<div style="width: 80%; float: left;">
			<img src="/system/captcha.php" alt="Включите показ изображений" style="cursor:pointer; position: relative; top: 13px; margin: 3px; margin-top: -5px; " title="Обновить" onclick="this.src='/system/captcha.php?reload';" />
			<input type="text" name="captcha" pattern="[1-9A-H]{4}" size="4" autocomplete="off" style="height: 22px; width: 60px; margin: 3px; " REQUIRED/>
		</div>
		<div style="width: 15%; float: left; padding: 3px;">
			Пол:
		</div>
		<div style="width: 80%; float: left;">
			<label>
				<input type="radio" name="sex" checked value="1" >
					Мужской
			</label>
			<label>
				<input type="radio" name="sex" value="0" >
					Женский
			</label>
		</div>
		<input type="submit" style="margin-left: 17%" value="Зарегистрироваться" name="sendData" />
	</div>
</form>
<div style='clear:both'>
</div>


<?php }} ?>