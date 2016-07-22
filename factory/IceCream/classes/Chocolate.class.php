<?php
/*
*	Chocolate class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/02
*	Updated: N/A
*
*	This Chocolate class extends the IceCream class and is designed to be 
*	implemented as part of the SimpleFactory design pattern.
*
*/
require_once("IceCream.class.php");

class Chocolate extends IceCream  {
	public function __construct()  {
		$this->description = "Chocolate";
	}
		
	public function cost()  {
		return 2.49;
	}
}
?>