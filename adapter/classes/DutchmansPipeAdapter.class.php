<?php
/*
*	DutchmansPipeAdapter class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/04
*	Updated: N/A
*
*	The DutchmansPipeAdapter class implements the Rose interface is an 
*	example file that implements the Adapter design pattern.
*
*/
require_once("Rose.interface.php");

class DutchmansPipeAdapter implements Rose  {
	private $_dutchmansPipe;
	
	public function __construct($dp)  {
		$this->_dutchmansPipe = $dp;
	}
	
	public function identify()  {
		$this->_dutchmansPipe->run();
	}
	
	public function smell()  {
		$this->_dutchmansPipe->stink();
	}
}

?>