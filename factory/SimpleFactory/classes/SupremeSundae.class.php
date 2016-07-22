<?php
/*
*	SupremeSundae class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/02
*	Updated: N/A
*
*	This SupremeSundae class extends the Sundae class and is designed to be 
*	implemented as part of the SimpleFactory design pattern.
*
*/
require_once("Sundae.class.php");

class SupremeSundae extends Sundae  {
	private $ice_cream;
	private $type = "Supreme Sundae, ";
	
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
		$this->ice_cream = new Peanuts($this->ice_cream);
		$this->ice_cream = new Sprinkles($this->ice_cream);
		$this->ice_cream = new Cherry($this->ice_cream);
	}
}
?>