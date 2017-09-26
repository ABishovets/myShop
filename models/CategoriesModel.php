<?php


/**
 * model for categories table
 *
 *
 */


/**
 * @param $mysqli  - object  from /config/db.php
 * @return array array of category
 */
function getAllMainCatsWithChildren($mysqli)
    {
        $rs = $mysqli->query('
            SELECT * FROM categories WHERE parent_id=0 ;
        ');

        $rezult_array = [];

        while ( $row = $rs->fetch_assoc() )
        {

            $resChildren = getChildrenForCat ($row['id'],$mysqli);

            $row['cat'] = $resChildren;

            array_push($rezult_array,$row);
        }

       // d($rezult_array);

        return $rezult_array;


    }


/**
 * @param $par_id  children id for SELECT
 * @param $mysqli  DB object
 * @return array children category
 */
function getChildrenForCat ($par_id, $mysqli)
    {


        $rs = $mysqli->query('
            SELECT * FROM categories WHERE parent_id='.$par_id.' ;
        ');

        $rezult_array = [];

        while ( $row = $rs->fetch_assoc() )
        {
            array_push($rezult_array,$row);
        }


        return $rezult_array;

    }
