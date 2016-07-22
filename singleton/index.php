<?php
/*
*	index.php
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/03
*	Updated: N/A
*
*	This file implements the Singleton design pattern using the 
*	Singleton class.
*
*/
require_once("Singleton.class.php");

$single = Singleton::getInstance();
echo $single->getData() . '<br/>';

$single->setData("Not to be duplicated!");

//if our Singeton does its job we should get
//the new message --> Not to be duplicated!
$duplicate = Singleton::getInstance();
echo $duplicate->getData();

?>