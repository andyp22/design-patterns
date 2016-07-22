<?php
/*
*	index.php
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/04
*	Updated: N/A
*
*	This file implements the Command design pattern using the 
*	Command interface, it's subclass, etc.
*
*/
function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.class.php';
}

$controller = new SimpleControl();
$garageOpen = new GarageDoorOpenCommand(new GarageDoor());
$lightOn = new LightOnCommand(new Light());
$garageLight = new GarageLightOnCommand(new GarageDoor());

$controller->addCommand($lightOn);
$controller->addCommand($garageOpen);
$controller->addCommand($garageLight);

$controller->activate('light');
$controller->activate('garage_door');
$controller->activate('garage_light');
$controller->undo();
$controller->undo();
$controller->activate('garage_light');
$controller->undo();
$controller->undo();
?>