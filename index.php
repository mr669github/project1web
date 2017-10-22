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
  
  //Instantiate an object for the class main
  $obj = new main();

  class main
  {
  	public function __construct()
	{
		$reqPage= 'formLoad';
		if(isset($_REQUEST['page']))
		{
		$reqPage = $_REQUEST['page'];
		}
		$page = new $reqPage;
		//Find request method
		if($_SERVER['REQUEST_METHOD'] == 'GET')
		$page->get();
		else
		$page->post();
	}
  } 
  
  //Defining an abstract class to include html structure and print
    abstract class page 
    {
    public $html;

      public function __construct()
      {
       $this->html .= '<html>';
       $this->html .= '<link rel="stylesheet" href="styles/styles.css">';
       $this->html .= '<body>';
      }

      public function __destruct()
      {
       $this->html .= '</body></html>';
       stringFunctions::printThis($this->html);
      }
     }       
?>
