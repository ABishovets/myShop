

<h1>Товары категории {$rsCategory['name']}</h1>

    <div class="gird">
        {if isset($rsProducts)}
            {foreach $rsProducts as $item}
                <a href="/product/{$item['id']}">
                    <img src="/products/{$item['image']}" alt="">
                </a>
                <br>
                <a href="/product/{$item['id']}/">{$item['name']}</a>
            {/foreach}
        {/if}

        {if isset($rsChildCats)}
            {foreach $rsChildCats as $item}
                <h2><a href="/category/{$item['id']}">{$item['name']}</a> </h2>
            {/foreach}
         {/if}

    </div>



