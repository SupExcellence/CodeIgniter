<?php

class Formuser extends CI_Controller
{
	
	  public function __construct() 
      {
             // Obligatoire
             parent::__construct();
      }
	
	
      public function index()
      {
 	         $data = array() ;	
			 $member = array() ;
			 $data['main_content'] = 'edmond/login' ;
			 
			 
 	         // Chargement du modèle de gestion des news
 	         $this->load->model('edmond/login_model');
			 
			  
			 $this->form_validation->set_rules('mailuser', '"Votre email"','trim|required|valid_email|encode_php_tags|xss_clean') ;
 	         $this->form_validation->set_rules('mdp', '"Votre mot de passe"','trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
			 $this->form_validation->set_error_delimiters('', '');
			 
			 
 	         if($this->form_validation->run())
             {
                  // Le formulaire est valide
                  $mailuser = $this->input->post('mailuser');
                  $mdp = $this->input->post('mdp');
				  
				  $query =  $this->login_model->is_login($mailuser,$mdp) ;
				  if( $query->num_rows() == 1)
				  {
				  	  foreach ($query->result() as $row) 
				  	  {
							$member['names'] = $row->firstname ;
							$member['mail'] = $row->email ;
							$member['is_login'] = true ;
							$user = $this->session->set_userdata($member);
					  }
				  	  //$this->load->view('edmond/logout',$data);
				  	  redirect('edmond/loginuser/') ;
				  } 
				  else
				  {
				  	  $this->load->view('include/template',$data);
				  }
             }
             else
             {
                 // Le formulaire est invalide ou vide
                 $this->load->view('include/template',$data);
             }
      }
 
 
 
 
}
?>