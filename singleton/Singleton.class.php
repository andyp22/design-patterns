<?php
/*
*	Singleton class
*	By: Andrew Page @ www.andypangus.com
*	Date: 2009/06/03
*	Updated: N/A
*
*	This file implements the the Singleton design pattern.
*
*/

class Singleton  {
	private $_data;
	
	private function __construct()  {
		$this->_data = "Our one and only.";
	}
	
	public static function getInstance()  {
		static $_singleton = NULL;
		if($_singleton == NULL)  {
			$_singleton = new Singleton();
		}
		return $_singleton;
	}
	
/*
*	extra functionality should go here
*/
	public function getData()  {
		return $this->_data;
	}
	
	public function setData($d)  {
		$this->_data = $d;
	}
}
?>