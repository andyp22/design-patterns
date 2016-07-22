<?php
/*
*	IceCream class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/02
*	Updated: N/A
*
*	This IceCream class is designed to be implemented as part of the SimpleFactory design pattern.
*
*/

abstract class IceCream  {
	public $description = "Unknown";
	
	public function getDesc()  {
		return $this->description . " Ice Cream";
	}
	
	abstract function cost();
}
?>