<?php
/*
*	BrazilianDutchmansPipe class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/04
*	Updated: N/A
*
*	The BrazilianDutchmansPipe class implements the DutchmansPipe 
*	interface is an example file that implements the Adapter design 
*	pattern.
*
*/
require_once("DutchmansPipe.interface.php");

class BrazilianDutchmansPipe implements DutchmansPipe  {
	private $name;
	
	public function __construct()  {
		$this->name = "DutchmansPipe";
	}
	
	public function run()  {
		echo $this->name;
	}
	
	public function stink()  {
		echo "like death";
	}
}

?>