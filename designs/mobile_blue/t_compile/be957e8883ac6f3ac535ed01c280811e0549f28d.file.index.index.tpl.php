<?php /* Smarty version Smarty-3.1.8, created on 2012-05-05 19:57:26
         compiled from "/home/spaxi116/public_html/mvc/modules/minichat/templates/index.index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17391951984f94195c65dc48-69837569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be957e8883ac6f3ac535ed01c280811e0549f28d' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/modules/minichat/templates/index.index.tpl',
      1 => 1336233442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17391951984f94195c65dc48-69837569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f94195c7ff9a7_17946288',
  'variables' => 
  array (
    'item' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f94195c7ff9a7_17946288')) {function content_4f94195c7ff9a7_17946288($_smarty_tpl) {?>

<form action="?addMessage"  method="post" >
	<div class="label">
		Отправить сообщение
	</div>
	<div class="quick">
		<div style='width: 10%; float: left; padding: 3px;'>
			Текст
		</div>
		<div style='width: 89%; '>
			<textarea  id="text" name="message"></textarea>
		</div>
		<div style='width: 10%; float: left; padding: 3px;'>
		</div>
		<div style='width: 89%; '>
			<input   type="submit" value="Отправить" />
		</div>
	</div>
	<div style="clear:both">
	</div>
</form>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['item']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="item<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'])){?>0<?php }else{ ?>1<?php }?>" <?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>id="item<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
<?php }?>">
	<b>
		<a href="/profile/<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_user'];?>
">
			<?php echo getLogin($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_user']);?>

		</a>
	</b>
	<?php echo getTime($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time']);?>

	<br />
		<?php echo Filters::full($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['message']);?>

</div>
<?php endfor; endif; ?>
<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>


<?php }} ?>