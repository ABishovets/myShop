
<div id="leftColumn">
    <div class="menuCaption">menu</div>
    <ul>
    {foreach $rsCategories as $item }
        <li><a href="/www/?controller=category&id={$item['id']}" >{$item['name']}</a></li>
        <ul>
            {if isset($item['cat'])}
                {foreach $item['cat'] as $catItem }
                    <li><a href="/www/?controller=category&id={$catItem['id']} ">{$catItem['name']}</a></li>
                {/foreach}
            {/if}
        </ul>
    {/foreach}
    </ul>
</div>