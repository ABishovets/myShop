
<div class="gird">
{foreach $rsProducts as $item }
    <div class="product">


        <a href="/product/{$item['id']}">

            {*$item['category_id']*}
            {$item['name']}
            {*$item['description']*}
            {*$item['price']*}
            <img src="../images/{$item['image']}" alt="">
            {$item['status']}
        </a>
    </div>
{/foreach}

    <div class="clearfix"></div>

</div>
