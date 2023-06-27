<?php
  namespace MVC\SRC;
  class FrontController { 
    const NOT_FOUND_CONTROLLER='MVC\Controllers\\NotFoundController';
   // const NOT_FOUND_ACTION='NotFoundAction';
     private $_contoller='index';
     private $_action='defult';
     private $_prams=array();
     public function __construct(){
      $this->parse();
     }
     private function parse(){
     	$url=explode('/', trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/'),3);
     	if (isset($url[0])&&$url[0]!='') {
     		$this->_contoller=$url[0];
     	}
     	if (isset($url[1])&&$url[1]!='') {
     		$this->_action=$url[1];
     	}
     	if (isset($url[2])&&$url[2]!='') {
     		$this->_prams=explode('/',$url[2]);
     	}
     	
     }
     public function dispach(){
     	$Controller='MVC\Controllers\\'.ucfirst($this->_contoller).'Controller';
      $ActionNam=$this->_action.'Action';
      
        if(!class_exists($Controller)){
           $Controller= self::NOT_FOUND_CONTROLLER;
        }
         $ControllerMethod=new $Controller();
        if (!method_exists($ControllerMethod, $ActionNam)) {
           $this->_action=$ActionNam='NotFoundAction';
        }
        $ControllerMethod->setController($this->_contoller);
         $ControllerMethod->setAction($this->_action);
         $ControllerMethod->setparams($this->_prams);

         $ControllerMethod->$ActionNam();
      
         
     }

  }


?>