<?php
/*
*	NoCommand class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/04
*	Updated: N/A
*
*	The NoCommand class implements the Command interface for
*	the Command design pattern.
*
*/
require_once("Command.interface.php");

class NoCommand implements Command  {	
	public function __construct()  {}
	public function execute($name, $args)  {}
	public function undo()  {}
}
?>