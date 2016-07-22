<?php
/*
*	index.php
*	Andrew Page
*	Created: 2009/06/05
*	Modified: N/A
*	Project: Template Pattern
*
*	Notes:
*
*/
function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.class.php';
}

$tea = new Tea();
$coffee = new Coffee();

echo "Making the Tea...<br/>";
$tea->prepareRecipe();

echo "Making the Coffee...<br/>";
$coffee->prepareRecipe();
?>