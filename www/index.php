<?php
    include_once '../config/config.php';// file where difined constants
    include_once '../config/db.php';// file where difined db access
    include_once '../library/maineFunctions.php';//functions library file



    // определяем с каким контроллером будем работать
    $controllerName = isset($_GET['controller']) ? ucfirst ($_GET['controller']) : 'Index';

//d($controllerName,0);


// определяем действие
    $actionName = isset($_GET['action']) ? $_GET['action'] : 'index';



    // function for load page
    loadPage($smarty, $controllerName, $actionName, $mysqli);




