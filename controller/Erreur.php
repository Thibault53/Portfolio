<?php

class Erreur extends Controller {
    
    public function erreur404($id=null){
        
        $this->render("erreur404");
    }
    public function erreur403($id=null){
       
         $this->render("erreur403");
     }
     public function erreur500($id=null){
   
         $this->render("erreur500");
     }

    public function __construct(){
        
    }
}
?>