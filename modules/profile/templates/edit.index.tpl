

<form action="?sendData"  method="post" >
	<div class="label">
		Изменить данные
	</div>
	<div class="quick">
		<div style='width: 15%; float: left; padding: 3px;'>
			Имя
		</div>
		<div style='width: 84%; '>
			<input type="text"  name="name" value="{$user.name}" maxlength="30"/>
		</div>
		<div style='width: 15%; float: left; padding: 3px;'>
			Фамилия
		</div>
		<div style='width: 84%; '>
			<input type="text"  name="surname" value="{$user.surname}" maxlength="30"/>
		</div>
		<div style='width: 15%; float: left; padding: 3px;'>
			E-mail
		</div>
		<div style='width: 84%; '>
			<input name="email" type="email" value="{$user.email}" maxlength="30"/>
		</div>
		<div style='width: 15%; float: left; padding: 3px;'>
			О себе
		</div>
		<div style='width: 84%; '>
			<textarea  name="about_me" cols="25" rows="5">{$user.about_me}</textarea>
		</div>
		<div style='width: 15%; float: left; padding: 3px;'>
			Девайсы
		</div>
		<div style='width: 84%; '>
			<textarea  name="devices" cols="25" rows="5">{$user.devices}</textarea>
		</div>
		<div style='width: 15%; float: left; padding: 3px;'>
		</div>
		<div style='width: 84%; '>
			<input type="submit" name="submit" value="Отправить"/>
		</div>
	</div>
	<div style="clear:both">
	</div>
</form>
