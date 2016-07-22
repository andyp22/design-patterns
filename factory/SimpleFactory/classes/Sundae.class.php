<?php
/*
*	Sundae class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/02
*	Updated: N/A
*
*	This Sundae class extends the IceCream class and is designed to be 
*	implemented as part of the SimpleFactory design pattern.
*
*/
require_once("IceCream.class.php");

class Sundae extends IceCream  {
	private $ice_cream;
	private $type = "Basic Sundae, ";
	
	public function __construct($ic)  {
		$this->ice_cream = $ic;
		$this->addToppings();
	}
	
	public function getDesc()  {
		return $this->type . $this->ice_cream->getDesc();
	}
		
	public function cost()  {
		return $this->ice_cream->cost();
	}
	
	private function addToppings()  {
		$this->ice_cream = new Whip($this->ice_cream);
	}
}
?>