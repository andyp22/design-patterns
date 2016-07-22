<?php
/*
*	Coffee class
*	Andrew Page
*	Created: 2009/06/05
*	Modified: N/A
*	Project: Template Pattern
*
*	Notes: example file to demonstrate the Template Pattern
*
*/

class Coffee  {

	public function prepareRecipe()  {
		$this->boilWater();
		$this->brewCoffeeGrounds();
		$this->pourInCup();
		$this->addSugarandMilk();
	}
	
	public function boilWater()  {
		echo "Boiling water<br/>";
	}
	
	public function brewCoffeeGrounds()  {
		echo "Dripping coffee through filter<br/>";
	}
	
	public function pourInCup()  {
		echo "Pouring into cup<br/>";
	}
	
	public function addSugarandMilk()  {
		echo "Adding Sugar and Milk<br/>";
	}
}
?>