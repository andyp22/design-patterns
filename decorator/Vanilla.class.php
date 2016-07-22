<?php
/*
*	Vanilla class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/02
*	Updated: N/A
*
*	This Vanilla class extends the IceCream class and is designed to be 
*	implemented as part of the Decorator design pattern.
*
*/
require_once("IceCream.class.php");

class Vanilla extends IceCream  {
	public function __construct()  {
		$this->description = "Vanilla Ice Cream";
	}
		
	public function cost()  {
		return 1.99;
	}
}
?>