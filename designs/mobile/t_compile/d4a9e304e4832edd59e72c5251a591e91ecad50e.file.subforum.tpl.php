<?php /* Smarty version Smarty-3.1.8, created on 2012-04-14 00:50:54
         compiled from "/home/spaxi116/public_html/system/design/mobile/templates/forum/subforum.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9596910184f8891ae09b421-73320337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4a9e304e4832edd59e72c5251a591e91ecad50e' => 
    array (
      0 => '/home/spaxi116/public_html/system/design/mobile/templates/forum/subforum.tpl',
      1 => 1333986954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9596910184f8891ae09b421-73320337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'topic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8891ae1c1976_55260997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8891ae1c1976_55260997')) {function content_4f8891ae1c1976_55260997($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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