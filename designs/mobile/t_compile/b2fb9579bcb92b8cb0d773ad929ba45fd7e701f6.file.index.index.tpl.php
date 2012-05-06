<?php /* Smarty version Smarty-3.1.8, created on 2012-05-05 21:47:21
         compiled from "/home/spaxi116/public_html/modules/index_page/templates/index.index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3412446554fa564923eaaf0-68244926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2fb9579bcb92b8cb0d773ad929ba45fd7e701f6' => 
    array (
      0 => '/home/spaxi116/public_html/modules/index_page/templates/index.index.tpl',
      1 => 1336240041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3412446554fa564923eaaf0-68244926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa564923fb891_84701035',
  'variables' => 
  array (
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa564923fb891_84701035')) {function content_4fa564923fb891_84701035($_smarty_tpl) {?>

<div class="quick">
<h3>SCool CMS v0.2 alpha</h3>
Представляем новую систему управления сайтом <span title="Spahi4 я, Cool - понятно">SCool CMS</span><br/>
Сделана на PHP с использованием MySQL, и оболочки для него - PDO.<br/>
Архитектура построена на основе паттерна <a href="http://ru.wikipedia.org/wiki/MVC">MVC</a>, и сделана модульность - что позволяет легко изменять сайт, особенно с учетом шаблонизатора <a href="http://smarty.net">Smarty</a>.<br/>
Основное направление CMS - мобильные устройства, но возможна и полноценная веб-версия.<br/><br/>
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