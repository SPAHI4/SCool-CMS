{* Smarty *}


<div class="label">
	Моё меню
</div>
<div class="main">
	<a href="/mail/">
		Почта {if $user.unreaded_messages}+{$user.unreaded_messages}{/if}
	</a>
	<br>
	<a href="edit">
		Изменить анкету
	</a>
	<br>
	<a href="/profile/{$user.id}/">
		Просмотреть профиль
	</a>
	<br>
</div>


