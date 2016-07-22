<?php
/*
*	Whip class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/02
*	Updated: N/A
*
*	This Whip class extends the CondimentDecorator class and is designed to be 
*	implemented as part of the SimpleFactory design pattern.
*
*/
require_once("CondimentDecorator.class.php");

class Whip extends CondimentDecorator  {
	private $ice_cream;
	
	public function __construct($ic)  {
		$this->ice_cream = $ic;
	}
		
	public function getDesc()  {
		return $this->ice_cream->getDesc() . ", Whipped Cream";
	}
	
	public function cost()  {
		return (.25 + $this->ice_cream->cost());
	}
}
?>