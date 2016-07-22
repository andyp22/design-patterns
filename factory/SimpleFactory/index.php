<?php
/*
*	index.php
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/02
*	Updated: N/A
*
*	This file implements the the SimpleFactory design pattern using the Order, SimpleSundaeFactory,
*	IceCream, CondimentDecorator, and their extended classes.
*
*/
function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.class.php';
}

$sundaeFactory = new SimpleSundaeFactory();

$order1 = new Order($sundaeFactory);
$order1->placeOrder(new Strawberry(), "Basic");

$order2 = new Order($sundaeFactory);
$order2->placeOrder(new Vanilla(), "Supreme");

$order3 = new Order($sundaeFactory);
$order3->placeOrder(new Chocolate(), "Banana Split");

$order4 = new Order($sundaeFactory);
$order4->placeOrder(new Chocolate());
?>