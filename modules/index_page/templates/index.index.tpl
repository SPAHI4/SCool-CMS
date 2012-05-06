{* Smarty *}

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
<a href="/minichat/">Мини чат</a> [{$count.minichat}]<br>
<a href="forum">Форум</a> [{$count.forum.posts}/{$count.forum.topics}]<br>
<a href="users">Список пользователей</a> [{$count.users}]<br>
</div>

