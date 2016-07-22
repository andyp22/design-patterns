<?php
/*
	Class: NavComponent
	
	Our base NavComponent object definition, all methods are set to throw exceptions by default, this behavior shoud be over ridden in subclasses.

	Functions:
		
		add($navComponent)
		
		remove($navComponent)
		
		getChild($key)
		
		getText()
		
		getLink()
		
		diplay()

*/
abstract class NavComponent  {
	public function add($navComponent)  {
		throw new Exception('UnsupportedOperationException');
	}
	
	public function remove($navComponent)  {
		throw new Exception('UnsupportedOperationException');
	}
	
	public function getChild($key)  {
		throw new Exception('UnsupportedOperationException');
	}
		
	public function getText()  {
		throw new Exception('UnsupportedOperationException');
	}
	
	public function getLink()  {
		throw new Exception('UnsupportedOperationException');
	}
		
	public function display()  {
		throw new Exception('UnsupportedOperationException');
	}
}
?>