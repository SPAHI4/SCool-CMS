{* Smarty *}

<form action="?addMessage"  method="post" >
	<div class="label">
		Отправить сообщение
	</div>
	<div class="quick">
		<div style='width: 10%; float: left; padding: 3px;'>
			Текст
		</div>
		<div style='width: 89%; '>
			<textarea  id="text" name="message"></textarea>
		</div>
		<div style='width: 10%; float: left; padding: 3px;'>
		</div>
		<div style='width: 89%; '>
			<input   type="submit" value="Отправить" />
		</div>
	</div>
	<div style="clear:both">
	</div>
</form>
{section name=i loop=$item}
<div class="item{if $smarty.section.i.iteration is even}0{else}1{/if}" {if $item[i].id}id="item{$item[i].id}{/if}">
	<b>
		<a href="/profile/{$item[i].id_user}">
			{$item[i].id_user|getlogin}
		</a>
	</b>
	{$item[i].time|time}
	<br />
		{$item[i].message|output}
</div>
{/section}
{$pages}

