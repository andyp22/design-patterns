<?php
/*
*	Light class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/04
*	Updated: N/A
*
*	The Light class is an example class for
*	the Command design pattern.
*
*/

class Light  {
	private $_on;
	
	public function __construct()  {
		$this->_on = false;
	}
	
	public function on()  {
		if(!$this->_on)  {
			$this->_on = true;
			print("Light is On<br/>");
		}
	}
	
	public function off()  {
		if($this->_on)  {
			$this->_on = false;
			echo "Light is Off<br/>";
		}
	}
}
?>