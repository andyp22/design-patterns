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
	
	public function __construct($ic)  {
		$this->ice_cream = $ic;
	}
	
	public function getDesc()  {
		return $this->ice_cream->getDesc();
	}
	
	public function cost()  {
		return $this->ice_cream->cost();
	}
	
	public function placeOrder($type)  {
		
		switch($type)  {
			case "Supreme":
				$this->ice_cream = new SupremeSundae($this->ice_cream);
				break;
			case "Banana Split":
				$this->ice_cream = new BananaSplit($this->ice_cream);
				break;
			case "Basic":
				$this->ice_cream = new Sundae($this->ice_cream);
				break;
			default:
				break;
		}
		
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