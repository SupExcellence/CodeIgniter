<?php

class News extends CI_Controller 
{
      public function index()
      {
             $this->accueil();
      }
	  
      public function accueil()
      {
             $data = array();
             $data['pseudo'] = 'hervé';
             $data['email'] = 'email@ndd.fr';
             $data['en_ligne'] = false;
             $this->load->view('sdz/news/accueil',$data);
      }
}



























?>