
<div id="leftColumn">
    <div class="menuCaption">menu</div>
    <ul>
    {foreach $rsCategories as $item }
        <li><a href="#" >{$item['name']}</a></li>
        <ul>
            {if isset($item['cat'])}
                {foreach $item['cat'] as $catItem }
                    <li><a href="#">{$catItem['name']}</a></li>
                {/foreach}
            {/if}
        </ul>
    {/foreach}
    </ul>
</div>