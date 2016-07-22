<?php
/*
	Class: NavButton
	
	Extends our base NavComponent object

	Functions:
		
		__construct($text, $link)
		
		getText()
		
		getLink()
		
		diplay()
	
	See Also:
		
		<NavComponent>, <NavMenu>

*/
class NavButton extends NavComponent  {
	private $_text;
	private $_link;
	/*
		Function: __construct($text, $link)
		Creates a component by setting internal vars
		
		Parameters:
		
			$text - string representing the button's text
			
			$link - string form of destination URL
	*/
	public function __construct($text, $link)  {
		$this->_text = $text;
		$this->_link = $link;
	}
	/*
		Function: getText()
		Returns a string
	*/
	public function getText()  {
		return $this->_text;
	}
	/*
		Function: getLink()
		Returns a string
	*/
	public function getLink()  {
		return $this->_link;
	}
	/*
		Function: display()
		Displays $_text and $_link as a hyperlink
	*/	
	public function display()  {
		echo '<a href="' . $this->_link .
				'" title="' . $this->_text .
				'">' . $this->_text . '</a><br/>';
	}
}
?>