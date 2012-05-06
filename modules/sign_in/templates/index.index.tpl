{* Smarty *}

<form method="post" action="?sendData">
	<div class="quick">
		<div style="width: 15%; padding: 3px; float: left;">
			Логин:
		</div>
		<div style="margin-left: 15%;">
			<input type="text" name="login" maxlength="16" value="" REQUIRED/>
		</div>
		<div style="width: 15%; float: left; padding: 3px;">
			Пароль:
		</div>
		<div style="margin-left: 15%;">
			<input type="password" name="password"  maxlength="36" value="" REQUIRED />
		</div>
		<div style="margin-left: 16%;">
		<label>
			<input type="checkbox" value="1" checked name="rememberMe" />
				Запомнить меня
		</label>
		</div>
		<input type="submit" style="margin-left: 17%" value="Войти" name="sendData" />
	</div>

