<?php
/*
*	BrewedBeverageWithHook class
*	Andrew Page
*	Created: 2009/06/05
*	Modified: N/A
*	Project: Template Pattern
*
*	Notes: abstract class which implements the Template design pattern
*
*/

/*
	Class: BrewedBeverageWithHook

	Serves as the base file for all BrewedBeverageWithHook objects, ex: <Coffee>.

	Methods:

		prepareRecipe()
	  
		boilWater()
	  
		brew()
	  
		pourInCup()
	  
		addCondiments()
		
		wantsCondiments()

	See Also:
	
		<Coffee>
*/
abstract class BrewedBeverageWithHook  {

	final public function prepareRecipe()  {
		$this->boilWater();
		$this->brew();
		$this->pourInCup();
		
		//a conditional statement to test for the hook
		if($this->wantsCondiments())  {
			$this->addCondiments();
		}
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
	
	/*
		Method: wantsCondiments()
		Our hook method, can be redefined in subclasses providing added functionality
		
		Returns:
		
			boolean - true, unless over ridden in subclasses
	*/
	public function wantsCondiments()  {
		return true;
	}
}
?>