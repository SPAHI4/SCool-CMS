<?php /* Smarty version Smarty-3.1.8, created on 2012-04-09 16:51:00
         compiled from "/home/spaxi116/public_html/system/design/default/template/menu.links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4570114234f809331823db6-62162392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d10c7f02daaa4b8e6427c8b779ba5df4c9bfaa6' => 
    array (
      0 => '/home/spaxi116/public_html/system/design/default/template/menu.links.tpl',
      1 => 1333975858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4570114234f809331823db6-62162392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f80933187ba41_69913859',
  'variables' => 
  array (
    'links' => 0,
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f80933187ba41_69913859')) {function content_4f80933187ba41_69913859($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['links']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<?php if (!$_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href']){?><?php if ($_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index_prev']]){?></div><?php }?><div class="label"><?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</div><div class="main">
<?php }else{ ?>
<img src="/system/design/<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/images/i.png" alt="-"> <a href="<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['counter']){?>[<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['counter'];?>
]<?php }?><br>
<?php }?>
<?php endfor; endif; ?>
</div><?php }} ?>