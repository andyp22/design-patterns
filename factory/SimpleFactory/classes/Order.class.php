<?php
/*
*	Order class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/02
*	Updated: N/A
*
*	This Order class is designed to be implemented as part of the SimpleFactory design pattern.
*
*/

class Order  {
	private $ice_cream;
	private $factory; 
	
	public function __construct($fac)  {
		$this->factory = $fac;
	}
	
	public function getDesc()  {
		return $this->ice_cream->getDesc();
	}
	
	public function cost()  {
		return $this->ice_cream->cost();
	}
	
	public function placeOrder($ic, $type="")  {
		$this->ice_cream = $ic;
		
		$this->ice_cream = $this->factory->createSundae($this->ice_cream, $type);
				
		$this->printOrder();
		$this->makeOrder();
		$this->printTotal();
	}
	
	private function makeOrder()  {
		echo 'Your order is now being made...';
		echo '<br/>';
	}
	
	public function printOrder()  {
		echo $this->getDesc();
		echo '<br/>';
	}
	
	public function printTotal()  {
		echo 'Total: $' . $this->cost();
		echo '<br/><br/>';
	}
}
?>