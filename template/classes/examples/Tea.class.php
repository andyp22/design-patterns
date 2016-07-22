<?php
/*
*	Tea class
*	Andrew Page
*	Created: 2009/06/05
*	Modified: N/A
*	Project: Template Pattern
*
*	Notes: example file to demonstrate the Template Pattern
*
*/

class Tea  {

	public function prepareRecipe()  {
		$this->boilWater();
		$this->steepTeaBag();
		$this->pourInCup();
		$this->addLemon();
	}
	
	public function boilWater()  {
		echo "Boiling water<br/>";
	}
	
	public function steepTeaBag()  {
		echo "Steeping the tea<br/>";
	}
	
	public function pourInCup()  {
		echo "Pouring into cup<br/>";
	}
	
	public function addLemon()  {
		echo "Adding Lemon<br/>";
	}
}
?>