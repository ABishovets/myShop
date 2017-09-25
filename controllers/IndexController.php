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

function indexAction ($smarty)
    {
        $reCategories = getAllMainCatsWithChildren();

        $smarty -> assign('pageTitle', 'Главная страница');

        loadTemplate ($smarty, 'header');
        loadTemplate ($smarty, 'index');
        loadTemplate ($smarty, 'footer');
    }