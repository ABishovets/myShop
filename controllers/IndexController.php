<?php


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
        $smarty -> assign('pageTitle', 'Главная страница');

        loadTemplate ($smarty, 'header');
        loadTemplate ($smarty, 'index');
        loadTemplate ($smarty, 'footer');
    }