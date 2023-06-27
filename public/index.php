<?php 
namespace MVC;
use MVC\SRC\FrontController;
if (!defined('DS')) {
   define('DS',DIRECTORY_SEPARATOR);
}
require '..'.DS.'APP'.DS.'config.php';
require(APP_PATH .DS.'src'.DS.'autoload.php');
$frontcontroller = new FrontController();
 $frontcontroller->dispach(); 


?>