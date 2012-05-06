<?php /* Smarty version Smarty-3.1.8, created on 2012-05-05 20:50:10
         compiled from "/home/spaxi116/public_html/mvc/modules/index_page/templates/index.index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8334029964f919fc927da77-41345579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dda89c2590e5c28bb66ca7afa4351b9ad0e4f6a' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/modules/index_page/templates/index.index.tpl',
      1 => 1336236609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8334029964f919fc927da77-41345579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f919fc92a0f46_01890591',
  'variables' => 
  array (
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f919fc92a0f46_01890591')) {function content_4f919fc92a0f46_01890591($_smarty_tpl) {?>

<div class="quick">
<b>Изменения:</b><br/>
* Временно отсутствует javascript<br/>
22.04 Закончена предварительная архитектура <br/>
04.05 Добавлен коричневый дизайн (спс kreodiz.ru)<br/>
05.05 Подкорректирована архитектура 
</div>
 <div class="block_title"><span>Меню</span></div><div class="main">
<a href="/minichat/">Мини чат</a> [<?php echo $_smarty_tpl->tpl_vars['count']->value['minichat'];?>
]<br>
<a href="forum">Форум</a> [<?php echo $_smarty_tpl->tpl_vars['count']->value['forum']['posts'];?>
/<?php echo $_smarty_tpl->tpl_vars['count']->value['forum']['topics'];?>
]<br>
<a href="users">Список пользователей</a> [<?php echo $_smarty_tpl->tpl_vars['count']->value['users'];?>
]<br>
</div>

<?php }} ?>