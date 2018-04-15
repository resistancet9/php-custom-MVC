<?php

require_once( CORE . 'Smarty\libs\Smarty.class.php');

$smarty = new Smarty;
$smarty->template_dir = VIEW . '\templates';
$smarty->compile_dir = VIEW . '\templates_c';