<?php
/*
*	BrewedBeverage class
*	Andrew Page
*	Created: 2009/06/05
*	Modified: N/A
*	Project: Template Pattern
*
*	Notes: abstract class which implements the Template design pattern
*
*/

/*
	Class: BrewedBeverage

	Serves as the base file for all BrewedBeverage objects, ex: <Tea>.

	Methods:

		prepareRecipe()
	  
		boilWater()
	  
		brew()
	  
		pourInCup()
	  
		addCondiments()

	See Also:
	
		<Tea>
*/
abstract class BrewedBeverage  {

	/*
		Method: prepareRecipe()
		Contains our recipe algorithm, cannot be overridden in subclasses
	*/
	final public function prepareRecipe()  {
		$this->boilWater();
		$this->brew();
		$this->pourInCup();
		$this->addCondiments();
	}
	
	/*
		Method: brew()
		Replaces steepTeaBag() and brewCoffeeGrinds() in the example Tea and Coffee classes, must be defined in subclasses
	*/
	abstract function brew();
	/*
		Method: addCondiments()
		Replaces addLemon() and addMilkandSugar() in the example Tea and Coffee classes, must be defined in subclasses
	*/
	abstract function addCondiments();
	
	public function boilWater()  {
		echo "Boiling water<br/>";
	}
	
	public function pourInCup()  {
		echo "Pouring into cup<br/>";
	}	
}
?>