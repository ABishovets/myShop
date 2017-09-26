<?php
/**
 * maine page controller
 */

include_once '../models/CategoriesModel.php'; //includ models
include_once '../models/ProductsModel.php'; //includ models

function testAction()
    {
        echo 'IndexController.php > testAction';
    }


/**
 * build maine page of site
 *
 * @param $smarty -> templater
 */

function indexAction ($smarty, $mySql)
    {
        $rsCategories = getAllMainCatsWithChildren($mySql);
        $rsProducts = getLastProducts(16,$mySql);


        $smarty -> assign('pageTitle', 'Главная страница');
        $smarty -> assign('rsCategories', $rsCategories);
        $smarty -> assign('rsProducts', $rsProducts);

        loadTemplate ($smarty, 'header');
        loadTemplate ($smarty, 'index');
        loadTemplate ($smarty, 'footer');



    }