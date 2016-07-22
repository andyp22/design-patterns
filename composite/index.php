<?php
/*
*	index.php
*	Andrew Page
*	Created: 2009/06/09
*	Modified: N/A
*	Project: Composite Pattern
*
*/
function __autoload($class_name) {
	if(file_exists('classes/' . $class_name . '.class.php'))  {
    	require_once 'classes/' . $class_name . '.class.php';
	} elseif(file_exists('classes/' . $class_name . '.interface.php'))  {
		require_once 'classes/' . $class_name . '.interface.php';
	}
}

//create a menu to be used as a component
$submenu = new NavMenu('submenu_01');
$submenuData = array(new NavButton('button_07a','7a'), 
					 new NavButton('button_07b','7b'), 
					 new NavButton('button_07c','7c'), 
					 new NavButton('button_07d','7d'), 
					 new NavButton('button_07e','7e'));
foreach($submenuData as $obj)  {
	$submenu->add($obj);
}

//create our main menu of 10 components, adding the submenu in the 7th position
$menu = new NavMenu('menu');
$menuData = array(new NavButton('button_01','1'), 
				  new NavButton('button_02','2'), 
				  new NavButton('button_03','3'), 
				  new NavButton('button_04','4'), 
				  new NavButton('button_05','5'), 
				  new NavButton('button_06','6'), 
				  $submenu, 
				  new NavButton('button_08','8'), 
				  new NavButton('button_09','9'), 
				  new NavButton('button_10','10'));
foreach($menuData as $obj)  {
	$menu->add($obj);
}

//display the menu
$menu->display();

//test a failure
try  {
	$submenu->getLink();
} catch(Exception $e)  {
	echo "Caught exception: " . $e->getMessage() . "<br/>";
}
$menu->remove($submenu);
$menu->display();

$child = $menu->getChild(2);
$child->display();

?>