<?php /* Smarty version Smarty-3.1.8, created on 2012-05-05 19:54:50
         compiled from "/home/spaxi116/public_html/mvc/modules/index_page/templates/index.index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8334029964f919fc927da77-41345579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dda89c2590e5c28bb66ca7afa4351b9ad0e4f6a' => 
    array (
      0 => '/home/spaxi116/public_html/mvc/modules/index_page/templates/index.index.tpl',
      1 => 1336233192,
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
<img src="/designs/mobile/images/i.png" alt="-"> <a href="news">Новости</a> <br>[23.02] Изменен дизаин<br />
[24.02] Гостевая переведена на jQuery  <br />
[25.02] Сообщения об ошибках и уведомления теперь на JavaScript <br />
[27.02] Форум запущен в beta-режиме<br />
[03.03] Добавлена почта [alpha]; немного изменен профиль <br />
[13.03] Почти доделана почта, добавлена админка, улучшена регистрация<br />
[14.03] Немного изменен профиль, добавлены аватары  <br />
[05.04] Начало перехода на Smarty  <br />
[06.04] Начало перехода на PDO   <br />
[08.04] Первый релиз<br />
[10.04] Добавляются web и touch версии<br/>
[22.04] Закончена архитектура MVC
</div>
 <div class="label">Меню сайта</div><div class="main">
<img src="/designs/mobile/images/i.png" alt="-"> <a href="/minichat/">Мини чат</a> [<?php echo $_smarty_tpl->tpl_vars['count']->value['minichat'];?>
]<br>
<img src="/designs/mobile/images/i.png" alt="-"> <a href="forum">Форум</a> [<?php echo $_smarty_tpl->tpl_vars['count']->value['forum']['posts'];?>
/<?php echo $_smarty_tpl->tpl_vars['count']->value['forum']['topics'];?>
]<br>
<img src="/designs/mobile/images/i.png" alt="-"> <a href="users">Список пользователей</a> [<?php echo $_smarty_tpl->tpl_vars['count']->value['users'];?>
]<br>
</div>

<?php }} ?>