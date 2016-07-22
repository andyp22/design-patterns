<?php
/*
*	Command interface
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/04
*	Updated: N/A
*
*	This file implements the Command design pattern.
*
*/

interface Command  {
	public function execute($name, $args);
	public function undo();
}
?>