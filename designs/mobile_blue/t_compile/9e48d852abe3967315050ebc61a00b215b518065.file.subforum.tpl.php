<?php /* Smarty version Smarty-3.1.8, created on 2012-04-09 19:55:55
         compiled from "/home/spaxi116/public_html/system/design/default/templates/forum/subforum.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4104978184f82f5514f2588-38313135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e48d852abe3967315050ebc61a00b215b518065' => 
    array (
      0 => '/home/spaxi116/public_html/system/design/default/templates/forum/subforum.tpl',
      1 => 1333986954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4104978184f82f5514f2588-38313135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f82f5514f2f42_03890608',
  'variables' => 
  array (
    'topic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f82f5514f2f42_03890608')) {function content_4f82f5514f2f42_03890608($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['topic']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<strong><a href="/forum/topic/<?php echo $_smarty_tpl->tpl_vars['topic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></strong> [<?php echo $_smarty_tpl->tpl_vars['topic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['posts'];?>
]<br />
<?php if ($_smarty_tpl->tpl_vars['topic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descr']){?><?php echo outputFilter($_smarty_tpl->tpl_vars['topic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descr']);?>
<br /> <?php }?>
<small><?php echo getLogin($_smarty_tpl->tpl_vars['topic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['firstpost']['id_user']);?>
/<a href="/forum/topic/<?php echo $_smarty_tpl->tpl_vars['topic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
?page=<?php echo getLastPage($_smarty_tpl->tpl_vars['topic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['posts']);?>
#item<?php echo $_smarty_tpl->tpl_vars['topic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['lastpost']['id'];?>
"><?php echo getLogin($_smarty_tpl->tpl_vars['topic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['lastpost']['id_user']);?>
</a> [<?php echo getTime($_smarty_tpl->tpl_vars['topic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['lastpost']['time']);?>
]</small>
</div>
<?php endfor; endif; ?><?php }} ?>