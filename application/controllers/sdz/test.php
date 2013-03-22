<?php


class Test extends CI_Controller
{
 public function __construct()
 {
    parent::__construct();
  
    // « Décommenter » cette ligne pour charger le helper url
    //$this->load->helper('url');
 }
 
 public function index()
 {
       $this->accueil();
        
 }
 
 public function accueil()
 {
        // On inclut la vue ./application/views/test/accueil.php
        $this->load->view('sdz/test/accueil');
 }
 
 public function connexion()
 {
       // Chargement de la bibliothèque
       //$this->load->library('form_validation');
       
       //on definit les règles de nos champs avec la methode set_rules
       /*
	    * trim (qui permet de retirer tous les espaces au début et à la fin d'une chaîne).
	    * equired : permet de définir le champ comme obligatoire.
	    * min_length[entier] : permet de définir la longueur minimale du champ.
	    * max_length[entier] : permet de définir la longueur maximale du champ. 
	    * alpha_dash : cette directive permet de n'accepter le champ que si celui-ci contient uniquement des caractères alphanumériques, des underscores (« _ ») et des tirets.
	    * encode_php_tags : convertit les balises PHP en entités HTML.
	    * xss_clean : supprime les risques de failles XSS.
	    * 
	    */
	    
       $this->form_validation->set_rules('pseudo', '"Nom d\'utilisateur"','trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags|xss_clean') ;
       $this->form_validation->set_rules('mdp', '"Mot de passe"','trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
	   $this->form_validation->set_error_delimiters('', '');
       if($this->form_validation->run())
       {
            // Le formulaire est valide
            $this->load->view('connexion_reussi');
       }
       else
       {
            // Le formulaire est invalide ou vide
            $this->load->view('sdz/test/formulaire');
       }
  }
 









































 
}
?>