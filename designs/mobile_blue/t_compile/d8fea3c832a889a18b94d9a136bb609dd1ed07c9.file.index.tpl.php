<?php /* Smarty version Smarty-3.1.8, created on 2012-04-14 00:50:48
         compiled from "/home/spaxi116/public_html/system/design/mobile/templates/forum/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1798269324f8891a83610d5-69116963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8fea3c832a889a18b94d9a136bb609dd1ed07c9' => 
    array (
      0 => '/home/spaxi116/public_html/system/design/mobile/templates/forum/index.tpl',
      1 => 1333905265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1798269324f8891a83610d5-69116963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'forum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8891a8536805_44666112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8891a8536805_44666112')) {function content_4f8891a8536805_44666112($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
<?php if ($_smarty_tpl->tpl_vars['forum']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descr']){?><?php echo outputFilter($_smarty_tpl->tpl_vars['forum']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descr']);?>
<br /> <?php }?>
<small><?php echo $_smarty_tpl->tpl_vars['forum']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['subforums'];?>
</small>
</div>
<?php endfor; endif; ?><?php }} ?>