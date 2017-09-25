<?php

// >contstants for resourse to controllers
define('PathPrefix','../controllers/');
define('PathPostfix','Controller.php');
//<

// > template what we use
$template = 'default';

// pathes to template files (*.tpl)

define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostfix', '.tpl');


// pathes to template files in WEB

define('TemplateWebPath', "/template/{$template}");

// <


//> init tempalater Smarty
//put full patyh to Smarty.class.php

    require  ('../library/Smarty/libs/Smarty.class.php');
    $smarty = new Smarty();

    $smarty -> setTemplateDir(TemplatePrefix);
    $smarty -> setCompileDir('../tmp/smarty/templates_c');
    $smarty -> setCacheDir('../tmp/smarty/cache');
    $smarty -> setConfigDir('../library/Smarty/configs');

    $smarty -> assign('templateWebPath', TemplateWebPath );

/*echo('<pre>');
print_r( $smarty);*/


//<

