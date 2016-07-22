<?php
/*
*	Strawberry class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/02
*	Updated: N/A
*
*	This Strawberry class extends the IceCream class and is designed to be 
*	implemented as part of the SimpleFactory design pattern.
*
*/
require_once("IceCream.class.php");

class Strawberry extends IceCream  {
	public function __construct()  {
		$this->description = "Strawberry";
	}
		
	public function cost()  {
		return 2.99;
	}
}
?>