

{section name=i loop=$forum}
<div class="item{if $smarty.section.i.iteration is even}0{else}1{/if}">
<strong><a href="/forum/{$forum[i].id}">{$forum[i].name|escape}</a></strong><br />
{if $forum[i].descr}{$forum[i].descr|output}<br /> {/if}
<small>{$forum[i].subforums}</small>
</div>
{/section}
