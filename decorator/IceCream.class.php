<?php
/*
*	IceCream class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/02
*	Updated: N/A
*
*	This IceCream class is designed to be implemented as part of the Decorator design pattern.
*
*/

abstract class IceCream  {
	public $description = "Unknown Ice Cream";
	
	public function getDesc()  {
		return $this->description;
	}
	
	abstract function cost();
}
?>