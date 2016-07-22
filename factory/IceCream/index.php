<?php
/*
*	index.php
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/02
*	Updated: N/A
*
*	This file implements the the SimpleFactory design pattern using the Order, IceCream, 
*	CondimentDecorator,  and their extended classes.
*
*/
function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.class.php';
}

$order1 = new Order(new Strawberry());
$order1->placeOrder("Basic");

$order2 = new Order(new Vanilla());
$order2->placeOrder("Supreme");

$order3 = new Order(new Chocolate());
$order3->placeOrder("Banana Split");

$order4 = new Order(new Chocolate());
$order4->placeOrder("");
?>