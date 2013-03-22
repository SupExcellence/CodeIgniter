<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Login_model extends CI_Model
{
	  
	  protected $table = 'user';
	  
	  public function is_login($email,$mdp)
	  {
	  	     if(isset($email) AND isset($mdp))
	  	     {
	  	     	     $query=$this->db->select('*')
					                 ->from($this->table)
									 ->where('email',$email)
									 ->where('password',$mdp)
									 ->get() ;
				     return $query ;
	  	     }
			 else 
			 {
                  return false ;
			 }
		
		
	  }
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>