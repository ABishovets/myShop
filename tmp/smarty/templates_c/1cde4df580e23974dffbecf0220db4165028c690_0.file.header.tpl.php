<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-25 15:54:07
  from "/home/bishovets/projects/myproject.dev/views/default/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c90a7f27a3c3_92645833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cde4df580e23974dffbecf0220db4165028c690' => 
    array (
      0 => '/home/bishovets/projects/myproject.dev/views/default/header.tpl',
      1 => 1506347519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_59c90a7f27a3c3_92645833 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/scss/main.css" type="text/css">
</head>


<body>


<div id="header">
    <h1>my shop - интернет магазин</h1>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div id="centerColumn">

    center Column

<?php }
}
