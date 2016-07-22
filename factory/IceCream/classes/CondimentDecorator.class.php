<?php
/*
*	CondimentDecorator class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/02
*	Updated: N/A
*
*	This CondimentDecorator class is designed to be implemented as part of 
*	the Decorator design pattern. We are using this, even though it doesn't 
*	add or change any behavior of the IceCream class, in order to better organize 
*	and separate our base items from our condiments.
*
*/
require_once("IceCream.class.php");

abstract class CondimentDecorator extends IceCream  {
	//nothing needed here for this example
	//this would be where you included added functionality
}
?>