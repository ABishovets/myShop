<?php
/**
 * @param $controllerName        name of controller which we took from get
 * @param string $actionName     name of controller action
 */

    function loadPage ($smarty, $controllerName, $actionName= 'index',$mySql )
    {
        include_once  PathPrefix.$controllerName.PathPostfix;

        $function = $actionName . 'Action';

        $function($smarty,$mySql);
    }


/**
 * @param $smarty  -templater
 * @param $templateName  - tempale file name
 */

    function loadTemplate ($smarty, $templateName)
    {
        $smarty->display($templateName.TemplatePostfix);
    }

















/**
 * @param null $value debagging value
 *
 * @param int $die  value for terminate programm executing
 */

    function D ($value = null, $die =1)
    {
        echo  'Debug : <br/> <pre>';
        print_r($value);
        echo '</pre>';

        if ($die) die;
    }

