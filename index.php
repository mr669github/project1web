<?php
  //set Debugging messages to 'ON'
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);
  
  //Define a class with autoload function
  class Auto 
  {
  //enabling classes to automatically load if undefines
	public static function autoload($class)
	{
	 include $class . '.php';
	}
  }
  spl_autoload_register(array('Auto', 'autoload'));

  
?>
