<?php

/**
 * model for table products
 */


/**
 * @param $quantity - quantity last products are we show
 *
 * @return array of products
 */

function getLastProducts ($limit = null, $mysqli)
{

    $request = 'SELECT * FROM products ORDER BY id DESC ';
    if ($limit) {
        $request.= 'LIMIT '.$limit;
    }

    $rs = $mysqli->query($request);


    $rezult_array = [];




    while ( $row = $rs->fetch_assoc() )
    {
        array_push($rezult_array,$row);
    }

    return $rezult_array;

}
