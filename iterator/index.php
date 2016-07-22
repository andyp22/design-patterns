<?php
/*
*	index.php
*	Andrew Page
*	Created: 2009/06/09
*	Modified: N/A
*	Project: Iterator Pattern
*
*	Notes:
*
*/
function __autoload($class_name) {
	if(file_exists('classes/' . $class_name . '.class.php'))  {
    	require_once 'classes/' . $class_name . '.class.php';
	} elseif(file_exists('classes/' . $class_name . '.interface.php'))  {
		require_once 'classes/' . $class_name . '.interface.php';
	}
}

$items = array('Andy','Bob','Cathy','Debbie','Eddie','Frank','Gus','Heather','Ian','Janice','Kim');
$itr = new ItemIterator($items);

while($itr->hasNext())  {
	$item = $itr->next();
	echo $item . '<br/>';
}

?>