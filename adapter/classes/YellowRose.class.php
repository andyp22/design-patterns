<?php
/*
*	YellowRose class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/04
*	Updated: N/A
*
*	The YellowRose class implements the Rose interface is an example file that
*	implements the Adapter design pattern.
*
*/
require_once("Rose.interface.php");

class YellowRose implements Rose  {
	private $name;
	
	public function __construct()  {
		$this->name = "Yellow ";
	}
	
	public function identify()  {
		echo $this->name . "Rose";
	}
	
	public function smell()  {
		echo "sweet";
	}
}

?>