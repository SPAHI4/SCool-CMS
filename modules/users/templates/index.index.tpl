{* Smarty *}

{section name=i loop=$item}
<div class="item{if $smarty.section.i.iteration is even}0{else}1{/if}" {if $item[i].id}id="item{$item[i].id}{/if}">
	<b>
		<a href="/profile/{$item[i].id}">
			{$item[i].login}
		</a>
	</b> [id={$item[i].id}]<br/>
	Регистрация: {$item[i].reg_timestamp|time}
	<br />

</div>
{/section}
{$pages}

