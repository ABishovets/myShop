<?php
/**
 * maine page controller
 */

include_once '../models/CategoriesModel.php'; //includ models

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
        $reCategories = getAllMainCatsWithChildren($mySql);

        $smarty -> assign('pageTitle', 'Главная страница');
        $smarty -> assign('rsCategories', $reCategories);

        loadTemplate ($smarty, 'header');
        loadTemplate ($smarty, 'index');
        loadTemplate ($smarty, 'footer');



    }