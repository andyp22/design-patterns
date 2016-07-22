<?php
/*
*	SimpleControl class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/04
*	Updated: N/A
*
*	The SimpleControl class implements the Command design pattern.
*
*/

class SimpleControl  {
	private $_commands = array();
	private $_undo = array();
	
	public function __construct()  {
		//get our undo array initialized
		array_push($this->_undo, new NoCommand());
	}
	
	public function addCommand($command)  {
		$this->_commands []= $command;
	}
	
	public function activate($name, $args = NULL)  {
		foreach($this->_commands as $cmd)  {
			if($cmd->execute($name, $args))  {
				//add each command to the top of the 
				//undo stack as it is executed
				array_push($this->_undo, $cmd);
				return;
			}
		}
	}
	
	public function undo()  {
		$cmd = array_pop($this->_undo);
		$cmd->undo();
	}
}
?>