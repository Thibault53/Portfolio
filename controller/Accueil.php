<?php
class Accueil extends Controller
{
    private $articles; //Pour l'exemple

    public function index($id = null)
    {
   
        $this->render("index");
    }

    public function __construct()
    {
    }
}