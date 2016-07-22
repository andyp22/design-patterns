<?php
/*
	Interface: SampleIterator
	
	Our base Iterator object interface

	Functions:
		
		hasNext()
		
		next()

*/
interface SampleIterator  {
	/*
		Function: hasNext()
		Returns a boolean value indicating whether or not there are more elements to iterate over
	*/
	public function hasNext();
	/*
		Function: next()
		Returns the next element
	*/
	public function next();
}
?>