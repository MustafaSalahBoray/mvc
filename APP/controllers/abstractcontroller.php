<?php
     namespace MVC\Controllers;
     class AbstractController
     { 
           protected $_contoller;
          protected $_action;
           protected $_prams;
     	 public function NotFoundAction(){
               $this->_view();
     	 }
           public function setController($ControllerName)
           {
               $this->_contoller=$ControllerName;
           }
           public function setAction($ActionName)
           {
               $this->_action=$ActionName;
           }
           public function setparams($paramsName)
           {
               $this->_prams=$paramsName;
           }
           public function _view(){
              if ($this->_action=='NotFoundAction') {
                 
              require VIEWS_PATH.DS.'notfound'.DS. 'notfound.view.php';
           }
           else{
          
               $view=VIEWS_PATH.DS.$this->_contoller.DS. $this->_action.'.view.php';
               if (file_exists($view)) {
                    require $view;
               }
               else{
                    require VIEWS_PATH.DS.'notfound'.DS. 'nofound.view.php'; 
               }
           }
      }
   }



?>