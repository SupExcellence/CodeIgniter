<?php

class Loginuser extends CI_Controller
{
	
	  public function __construct() 
      {
             // Obligatoire
             parent::__construct();
      }
	
	
      public function index()
      {
 	         $data = array() ;	
			 $data['main_content'] = 'edmond/logout' ;
			 
 	         // Chargement du modèle de gestion des news
 	         $this->load->view('include/template',$data);	  
      }
 

}
?>