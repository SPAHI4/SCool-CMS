

<div class='item0'>
	<a href='{$profile.avatar_full}'>
		<div style='margin: 3px; float: left; border-radius: 14px; background-image: url({$profile.avatar}); width: 100px; height: 100px;'>
		</div>
	</a>
	<span style='font-size: 15px;padding-left: 3px;'>
		{$profile.name|escape}
		<b>
			{$profile.login}
		</b>
		{$profile.surname|escape}
	</span>
	{if $profile.level>
	0}
	<br />
	<b style='padding-left: 10px; color: red;'>
		<i contenteditable='true'>
			{$profile.status_name}
		</i>
	</b>
	{/if}
	<br />
	<div style='margin-left: 110px'>
		<b>
			E-mail:
		</b>
		{mailto address=$profile.email|escape encode='javascript' subject='Сообщение'}
		</a>
		<br>
		<b>
			О себе:
		</b>
		<br />
			{$profile.about_me|output}
		<br/>
		<b>
			Девайсы:
		</b>
		{$profile.devices|output}
	</div>
	<div style='clear: both'>
	</div>
</div>
<div class='item1'>
	<b>
		Регистрация:
	</b>
	{$profile.reg_timestamp|time}
	<br/>
	<b>
		Посл. посещение:
	</b>
	{$profile.last_visit|time}
	<br/>
		{if $user->access("view_user_data")}
	<b>
		Браузер:
	</b>
	{$profile.browser|escape}
	<br/>
	<b>
		IP:
	</b>
	{$profile.ip|long2ip}
	{/if}
</div>
