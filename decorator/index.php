<?php
/*
*	index.php
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/01
*	Updated: N/A
*
*	This file implements the the Decorator design pattern using the IceCream, 
*	CondimentDecorator,  and their extended classes.
*
*/
function __autoload($class_name) {
    require_once $class_name . '.class.php';
}

$order1 = new Strawberry();
echo $order1->getDesc() . " $" . $order1->cost();
echo '<br/><br/>';

$order2 = new Vanilla();
$order2 = new Whip($order2);
$order2 = new Sprinkles($order2);
echo $order2->getDesc() . " $" . $order2->cost();
echo '<br/><br/>';

$order3 = new Chocolate();
$order3 = new Whip($order3);
$order3 = new Peanuts($order3);
$order3 = new Sprinkles($order3);
echo $order3->getDesc() . " $" . $order3->cost();
echo '<br/><br/>';
?>