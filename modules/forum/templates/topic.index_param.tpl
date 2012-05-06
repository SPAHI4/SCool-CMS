
<script src="{$js_path}topic.index.js" language="javascript"></script>
{section name=i loop=$post}
<div class='item{if $smarty.section.i.iteration is even}0{else}1{/if}' id='item{$post[i].id}'>
	<div class='block' style='width: 125px; text-align: center; float: left;'>
		<a href='/Profile/1/'>
			<b>
				{$post[i].user.login}
			</b>
		</a>
		{if $user}
		{if $user.id == $post[i].user.id}[я]{else}[
		<a href="/mail/mailTo/{$post[i].user.id}">
			ЛС
		</a>
		]{/if}
		{/if}
		<br/>
			{if $post[i].user.status_name}	{$post[i].user.status_name}
		<br />
			{/if}
		<div style='margin: 3px auto; border-radius: 15px; background-image: url({$post[i].user.avatar}); width: 100px; height: 100px;'>
		</div>
		{$post[i].user.name} {$post[i].user.surname}
	</div>
	<div class='block' style='margin-left: 125px;'>
		<div style='width: 17px; border: #D5E7FF 1px solid; border-radius: 12px; float: right; padding: 3px; z-index: 10;' id='actions{$post[i].id}' onMouseOver='toggleActionsOver({$post[i].id});' >
			<img src='{$img_path}settings.gif' title='Действия' style='float: right; cursor: pointer;'/>
		</div>
		{$post[i].time|time}
		<br/>
		<br/>
		<div id='messageBox{$post[i].id}'>
			{$post[i].message|output}
		</div>
		{if $post[i].edited_counter>
		0}
		<div id='edited' style='clear: both; width: 200px; margin-left: 150px; text-align: right'>
			<small>
				Изменено: {$post[i].edited_id_last_user|getlogin} {$post[i].edited_time|time}
				{if $post[i].edited_counter>
				1}
				<b title='Всего изменений'>
					[{$post[i].edited_counter}]
				</b>
				{/if}
			</small>
		</div>
		{/if}
	</div>
	<div style='clear: both'>
	</div>
</div>
{/section}

