<?php /* Smarty version Smarty-3.1.8, created on 2012-05-05 20:54:02
         compiled from "/home/spaxi116/public_html/mvc/modules/server_errors/templates/index.error_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12228344574f997ee15b7298-25955306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3300132617440c996401093f379939cfea84f64' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/modules/server_errors/templates/index.error_404.tpl',
      1 => 1336236791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12228344574f997ee15b7298-25955306',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f997ee15b7e64_08792423',
  'variables' => 
  array (
    'img_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f997ee15b7e64_08792423')) {function content_4f997ee15b7e64_08792423($_smarty_tpl) {?>
<div class="quick"><h3> 
<img src = "<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
yoda.jpg"/><br>
Это не та страница, искал ты кторую.<br>
Вернись на страницу главную.<br>
Да прибудет с тобой сила!<br>
</h3>
</div>
<div style="clear: both;"></div>

<?php }} ?>