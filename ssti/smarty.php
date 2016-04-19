<?php

// put full path to Smarty.class.php
require('SmartyBC.class.php');
global $smarty;
$smarty = new SmartyBC();

$sp = new Smarty_Security($smarty);
$sp->php_functions = array();
$sp->php_handling = Smarty::PHP_ALLOW;
$sp->allow_php_tag = true;

$smarty->enableSecurity($sp);

$smarty->setTemplateDir('.');
$smarty->setCompileDir('.');
$smarty->setCacheDir('.');
$smarty->setConfigDir('.');

#$smarty->assign('name', 'Jake');
$smarty->assign('name', $_GET['name']);
$smarty->display('index.tpl');

?>
