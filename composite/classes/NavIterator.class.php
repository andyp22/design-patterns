<?php
/*
	Class: NavIterator
	
	An implementation of the SampleIterator interface

	Functions:
		
		__construct($items)
		
		hasNext()
		
		next()

	See Also:

		<SampleIterator>

*/
class NavIterator implements SampleIterator  {
	private $_items = array();
	private $_position = 0;
	/*
		Function: __construct($items)
		Creates the Iterator and copies $items to an internal array
		
		Parameters:
		
			$items - an array of items
	*/
	public function __construct($items)  {
		$count = 0;
		
		if(is_array($items))  {
			foreach($items as $obj)  {
				$this->_items[$count] = $obj;
				$count++;
			}
		}
	}
	/*
		Function: hasNext()
		Returns a boolean value indicating whether or not there are more elements to iterate over
	*/
	public function hasNext()  {
		if($this->_position >= count($this->_items) || $this->_items[$this->_position] == NULL)  {
			return false;
		} else  {
			return true;
		}
	}
	/*
		Function: next()
		Returns the next element
	*/
	public function next()  {
		$item = $this->_items[$this->_position];
		$this->_position += 1;
		return $item;
	}
}
?>