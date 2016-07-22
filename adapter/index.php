<?php
/*
*	index.php
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/04
*	Updated: N/A
*
*	This file implements the Adapter design pattern using the 
*	...
*
*/
function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.class.php';
}

function checkFlower($flower)  {
	echo "Name: ";
	$flower->identify();
	echo "<br/>Odor: ";
	$flower->smell();
	echo "<br/>";
}

$dutchmansPipe = new BrazilianDutchmansPipe();

echo "A DutchmansPipe:<br/>Name: ";
$dutchmansPipe->run();
echo "<br/>Odor: ";
$dutchmansPipe->stink();
echo "<br/><br/>";

echo "A Rose:<br/>";
checkFlower(new RedRose());
checkFlower(new YellowRose());
echo "<br/>";

$adapter = new DutchmansPipeAdapter($dutchmansPipe);

echo "A Rose by any other name:<br/>";
checkFlower($adapter);
?>