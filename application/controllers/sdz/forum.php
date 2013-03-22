<?php

class Forum extends CI_Controller
{
 
 private $titre_defaut;
 
 public function __construct() 
 {
      // Obligatoire
      parent::__construct();
      // Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé
      $this->titre_defaut = 'Mon super site' ;
      echo 'Bonjour !' ;
 }
 
 public function index() 
 {
        $this->accueil();
 }
	
 private function accueil()
 {
        var_dump($this->titre_defaut) ;
 }
 
 // Cette page accepte une variable $_GET facultative
 public function bonjour($pseudo = '')
 {
        echo 'Salut à toi : ' . $pseudo;
 }
 
 public function maintenance() 
 {
        echo "Désolé, c'est la maintenance.";
 }
 
 /*
  * Quelle que soit l'URL, ce sera toujours la méthode maintenance qui sera appelée. 
  * Il s'agira donc d'une redirection interne en continu
  *            public function _remap($method){
                            $this->maintenance();
               }
  * 
  * 
  */
 
  
 
}









































?>