<?php
namespace app\controllers;
use app\core\Controller;

class HomeController extends Controller{  
   public function __construct(){
    
    if(!$this->usuario){
           $this->redirect(URL_BASE ."contato");
           exit;

    }
   } 
   
   public function index(){  
       $this->redirect(URL_BASE . "contato");
   } 
}
