<?php
 namespace MVC\SRC;

 class Autoload
 {
 	public static function autoload($className)
 	{     
 		$className = str_replace('MVC','',$className);
 		
 		  $className=str_replace('\\', '/', $className);
 		 
 		
 		$className=strtolower($className).'.php';
 	   
 		if (file_exists(APP_PATH.$className)) {
 			require APP_PATH .$className;
 		}
 		 
 	}
 }
spl_autoload_register(__NAMESPACE__.'\Autoload::autoload');


?>