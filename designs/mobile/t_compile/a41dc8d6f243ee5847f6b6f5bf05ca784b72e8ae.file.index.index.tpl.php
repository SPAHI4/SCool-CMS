<?php /* Smarty version Smarty-3.1.8, created on 2012-05-05 21:24:08
         compiled from "/home/spaxi116/public_html/mvc/modules/users/templates/index.index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19032189174f96d98e9926b7-56524407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a41dc8d6f243ee5847f6b6f5bf05ca784b72e8ae' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/modules/users/templates/index.index.tpl',
      1 => 1336236830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19032189174f96d98e9926b7-56524407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f96d98eb2fb92_17499820',
  'variables' => 
  array (
    'item' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f96d98eb2fb92_17499820')) {function content_4f96d98eb2fb92_17499820($_smarty_tpl) {?>

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
		<a href="/profile/<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
			<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['login'];?>

		</a>
	</b> [id=<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
]<br/>
	Регистрация: <?php echo getTime($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['reg_timestamp']);?>

	<br />

</div>
<?php endfor; endif; ?>
<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>


<?php }} ?>