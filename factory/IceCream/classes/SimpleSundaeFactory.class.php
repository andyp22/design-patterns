<?php
/*
*	SimpleSundaeFactory class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/02
*	Updated: N/A
*
*	This SimpleSundaeFactory class is designed to be implemented as part of the SimpleFactory design pattern.
*
*/

class SimpleSundaeFactory  {
	public $sundae;
	
	public function createSundae($ic, $type)  {
		$this->sundae = $ic;
		
		switch($type)  {
			case "Supreme":
				$this->sundae = new SupremeSundae($this->sundae);
				break;
			case "Banana Split":
				$this->sundae = new BananaSplit($this->sundae);
				break;
			default:
				$this->sundae = new Sundae($this->sundae);
				break;
		}
		
		return $this->sundae;
	}
}
?>