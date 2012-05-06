<?php /* Smarty version Smarty-3.1.8, created on 2012-04-13 18:29:26
         compiled from "/home/spaxi116/public_html/system/design/mobile/templates/input.form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4425486654f8838467f4e25-42134398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fbd7b771a09a377d78341c2fae2e65daa04855e' => 
    array (
      0 => '/home/spaxi116/public_html/system/design/mobile/templates/input.form.tpl',
      1 => 1333987215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4425486654f8838467f4e25-42134398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
    'field' => 0,
    'attr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f883846924c66_14482996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f883846924c66_14482996')) {function content_4f883846924c66_14482996($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['form']->value['action'];?>
" <?php if ($_smarty_tpl->tpl_vars['form']->value['id']){?>id="<?php echo $_smarty_tpl->tpl_vars['form']->value['id'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['form']->value['method']=='file'){?> enctype="multipart/form-data"<?php }else{ ?>method="<?php echo $_smarty_tpl->tpl_vars['form']->value['method'];?>
" <?php }?>>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['field']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']=='section'){?>
<?php if ('i'!=0){?></div><?php }?>
<div class="label" id="spoiler"><?php echo $_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</div><div class="quick">
<?php }elseif($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']=='textarea'){?>
<div style='width: 10%; float: left; padding: 3px;'><?php echo $_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</div>
<div style='width: 89%; '>
<textarea <?php  $_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->key => $_smarty_tpl->tpl_vars['attr']->value){
$_smarty_tpl->tpl_vars['attr']->_loop = true;
?> <?php if ($_smarty_tpl->tpl_vars['attr']->key!="value"){?><?php echo $_smarty_tpl->tpl_vars['attr']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
"<?php }?><?php } ?>><?php echo $_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['attr']['value'];?>
</textarea>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']=='input'){?>
<div style='width: 10%; float: left; padding: 3px;'><?php echo $_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</div>
<div style='width: 89%; '>
<input <?php if (!$_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['attr']['type']){?>type="text"<?php }?> <?php  $_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->key => $_smarty_tpl->tpl_vars['attr']->value){
$_smarty_tpl->tpl_vars['attr']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['attr']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
"<?php } ?>/>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']=='checkbox'){?>
<div style='width: 10%; float: left; padding: 3px;'></div>
<div style='width: 89%; '>
<label><input type="checkbox" <?php  $_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->key => $_smarty_tpl->tpl_vars['attr']->value){
$_smarty_tpl->tpl_vars['attr']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['attr']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
"<?php } ?> /> <?php echo $_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</label>
</div>
<?php }?>
<?php endfor; endif; ?>
</div>

<div style="clear:both"></div>
</form>
<?php }} ?>