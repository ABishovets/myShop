<?php
/**
 *  ProductController.php
 *
 *  controller for product page
 */

include_once '../models/CategoriesModel.php'; //includ models
include_once '../models/ProductsModel.php'; //includ models



/**
 * build maine page of site
 *
 * @param $smarty -> templater
 */

function indexAction ($smarty, $mySql)
{

    $itemId = isset($_GET['id']) ? $_GET['id'] : null;

    if ($itemId == null) {exit();}

    $rsProduct = getProductById ($itemId, $mySql);

    $rsCategories = getAllMainCatsWithChildren($mySql);

    //d($rsProduct);

    $smarty -> assign('pageTitle', $rsProduct['name']);
    $smarty -> assign('rsCategories', $rsCategories);
    $smarty -> assign('rsProduct', $rsProduct);

    loadTemplate ($smarty, 'header');
    loadTemplate ($smarty, 'product');
    loadTemplate ($smarty, 'footer');



}