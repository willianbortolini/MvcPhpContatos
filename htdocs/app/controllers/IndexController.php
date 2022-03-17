<?php
namespace app\controllers;

class IndexController{
    
   public function index(){
       $this->redirect(URL_BASE."contato");
   } 
}
