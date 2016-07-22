<?php
/*
*	LightOnCommand class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/04
*	Updated: N/A
*
*	The LightOnCommand class implements the Command interface for
*	the Command design pattern.
*
*/
require_once("Command.interface.php");

class LightOnCommand implements Command  {
	private $_switch;
	
	public function __construct($obj)  {
		$this->_switch = $obj;
	}
	
	public function execute($name, $args)  {
		if($name == 'light')  {
			$this->_switch->on();
			return true;
		}
		return false;
	}
	
	public function undo()  {
		$this->_switch->off();
	}
}
?>