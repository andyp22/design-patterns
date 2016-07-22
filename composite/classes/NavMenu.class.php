<?php
/*
	Class: NavMenu
	
	Extends our base NavComponent object

	Functions:
		
		__construct($text)
		
		add($navComponent)
		
		remove($navComponent)
		
		getChild($key)
		
		getText()
		
		diplay()
	
	See Also:
		
		<NavComponent>, <NavButton>, <NavIterator>

*/
class NavMenu extends NavComponent  {
	private $_components = array();
	private $_text;
	/*
		Function: __construct($text)
		Creates a component by setting internal vars
		
		Parameters:
		
			$text - string representing the menu's text
	*/
	public function __construct($text)  {
		$this->_text = $text;
	}
	/*
		Function: add($navComponent)
		Adds a component to the NavMenu
		
		Parameters:
		
			$navComponent - a NavComponent object to add
	*/
	public function add($navComponent)  {
		array_push($this->_components, $navComponent);
	}
	/*
		Function: remove($navComponent)
		Removes a component from the NavMenu
		
		Parameters:
		
			$navComponent - a NavComponent object to remove
	*/
	public function remove($navComponent)  {
		if(in_array($navComponent, $this->_components))  {
			$key = array_search($navComponent, $this->_components);
			$this->_components[$key] = NULL;
			$this->_components = array_filter($this->_components);
		}
	}
	/*
		Function: getChild($key)
		Returns a NavComponent
		
		Parameters:
		
			$key - a valid index string or int
	*/
	public function getChild($key)  {
		return $this->_components[$key];
	}
	/*
		Function: getText()
		Returns a string
	*/	
	public function getText()  {
		return $this->_text;
	}
	/*
		Function: display()
		Displays $_text as menu heading and then each NavComponent recursively
	*/
	public function display()  {
		echo "<br/>" . $this->_text . "<br/>";
		echo "----------------<br/>";
		
		$itr = new NavIterator($this->_components);
		
		while($itr->hasNext())  {
			$obj = $itr->next();
			$obj->display();
		}
		echo "----------------<br/><br/>";
	}
}
?>