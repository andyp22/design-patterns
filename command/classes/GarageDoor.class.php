<?php
/*
*	GarageDoor class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/04
*	Updated: N/A
*
*	The GarageDoor class is an example class for
*	the Command design pattern.
*
*/

class GarageDoor  {
	private $_on;
	private $_open;
	
	public function __construct()  {
		$this->_on = false;
		$this->_open = false;
	}
	
	public function on()  {
		if(!$this->_on)  {
			$this->_on = true;
			echo "Garage Light is On<br/>";
		}
	}
	
	public function off()  {
		if($this->_on)  {
			$this->_on = false;
			echo "Garage Light is Off<br/>";
		}
	}
	
	public function up()  {
		if(!$this->_open)  {
			$this->_open = true;
			echo "Garage Door is Open<br/>";
		}
	}
	
	public function down()  {
		if($this->_open)  {
			$this->_open = false;
			echo "Garage Door is Closed<br/>";
		}
	}
}
?>