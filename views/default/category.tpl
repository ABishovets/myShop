

<h1>Товары категории {$rsCategory['name']}</h1>

    <div class="gird">
        {if isset($rsProducts)}
            {foreach $rsProducts as $item}
               <div class="product">
                   <a href="/www/?controller=product&id={$item['id']}">
                       <img src="../images/{$item['image']}" alt="">
                   </a>
                   <br>
                   <a href="/www/?controller=product&id={$item['id']}">{$item['name']}</a>
               </div>
            {/foreach}
        {/if}

        {if isset($rsChildCats)}
            {foreach $rsChildCats as $item}
                <h2><a href="/www/?controller=category&id={$item['id']}">{$item['name']}</a> </h2>
            {/foreach}
         {/if}
    </div>



