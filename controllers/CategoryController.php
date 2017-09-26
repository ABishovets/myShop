<?php
/**
 * categoryController.php
 *
 * controller for page (/category/1)
 *
 */

//includ models

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';


/**
 * build category page
 *
 * @param $smarty  -templater
 * @param $mySql  - DB object
 *
 */
function IndexAction($smarty,$mySql)
{
    $rsChildCats = null;
    $rsProducts = null;

    $catId = isset($_GET['id']) ? ucfirst ($_GET['id']) : null;

    if ($catId == null) {
        exit();
    }

    $rsCategory = getCatById ($catId, $mySql);

    /**
     * if parent_id == 0 ->  its main category so return sub category
     *
     * else -> its product and we return products in this category
     */

    if ($rsCategory['parent_id'] == 0) {
        $rsChildCats = getChildrenForCat($catId, $mySql);
    } else {
        $rsProducts  = getProductsByCat($catId, $mySql);
    }

    $rsCategories = getAllMainCatsWithChildren($mySql);

    $smarty -> assign('pageTitle', 'Товары категории '.$rsCategory['name']);

    $smarty -> assign('rsCategory', $rsCategory);

    $smarty -> assign('rsProducts', $rsProducts);

    //d($rsChildCats);

    $smarty -> assign('rsChildCats', $rsChildCats);
    $smarty -> assign('rsCategories', $rsCategories);


    loadTemplate ($smarty, 'header');
    loadTemplate ($smarty, 'category');
    loadTemplate ($smarty, 'footer');



}