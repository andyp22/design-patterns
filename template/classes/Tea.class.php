<?php
/*
*	Tea class
*	Andrew Page
*	Created: 2009/06/05
*	Modified: N/A
*	Project: Template Pattern
*
*	Notes: Tea extends abstract class, BrewedBeverage, which 
*	implements the Template design pattern
*
*/

/*
	Class: Tea

	Extends the <BrewedBeverage> class and serves as the base file for all Tea objects.

	Methods:
	  
		brew()
	  
		addCondiments()

	See Also:
	
		<BrewedBeverage>
*/
class Tea extends BrewedBeverage  {

	public function brew()  {
		echo "Steeping the tea<br/>";
	}
	
	public function addCondiments()  {
		echo "Adding Lemon<br/>";
	}	
}
?>