<?php 
   namespace MVC\Controllers;
   class EmployeeController  extends AbstractController {
    public function defultAction(){ 
         require APP_PATH.DS.'models'.DS.'DB_connect.php';
                                       $this->_view();
    }
   }



?>