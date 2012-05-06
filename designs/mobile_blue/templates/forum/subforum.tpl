{section name=i loop=$topic}
<div class="item{if $smarty.section.i.iteration is even}0{else}1{/if}">
<strong><a href="/forum/topic/{$topic[i].id}">{$topic[i].name|escape}</a></strong> [{$topic[i].posts}]<br />
{if $topic[i].descr}{$topic[i].descr|output}<br /> {/if}
<small>{$topic[i].firstpost.id_user|getlogin}/<a href="/forum/topic/{$topic[i].id}?page={$topic[i].posts|lastpage}#item{$topic[i].lastpost.id}">{$topic[i].lastpost.id_user|getlogin}</a> [{$topic[i].lastpost.time|time}]</small>
</div>
{/section}