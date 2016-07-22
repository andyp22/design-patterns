<?php
/*
*	Coffee class
*	Andrew Page
*	Created: 2009/06/05
*	Modified: N/A
*	Project: Template Pattern
*
*	Notes: Coffee extends abstract class, BrewedBeverageWithHook, which 
*	implements the Template design pattern
*
*/

/*
	Class: Coffee

	Extends the <BrewedBeverageWithHook> class and serves as the base file for all Coffee objects.

	Methods:
	  
		brew()
	  
		addCondiments()
		
		wantsCondiments()
		
		getUserInput()

	See Also:
	
		<BrewedBeverageWithHook>
*/
class Coffee extends BrewedBeverageWithHook  {

	public function brew()  {
		echo "Dripping coffee through filter<br/>";
	}
	
	public function addCondiments()  {
		echo "Adding Milk and Sugar<br/>";
	}
	
	/*
		Method: wantsCondiments()
		Calls getUserInput() and redefines our hook method
		
		Returns:
		
			boolean - true or false
	*/
	public function wantsCondiments()  {
		$answer = $this->getUserInput();
		
		if($answer)  {
			return true;
		} else  {
			return false;
		}
	}
	
	/*
		Method: getUserInput()
		Serve as a way to get user input for our hook method.
		
		Returns:
		
			boolean - true or false
	*/
	public function getUserInput()  {
		$answer = NULL;
		
		//do some stuff to get input, I'm gonna be lazy
		srand(time());
		$num = rand();
		
		if($num % 3)  {
			$answer = false;
		} else  {
			$answer = true;
		}
		
		return $answer;
	}
}
?>