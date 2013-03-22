<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class News_model extends CI_Model
{
        
		protected $table = 'news';
		
        /**
         * Ajoute une news
         * @param string $auteur L'auteur de la news
         * @param string $titre Le titre de la news
         * @param string $contenu Le contenu de la news
         * @return bool Le résultat de la requête
         */
       public function ajouter_news($auteur, $titre, $contenu)
       {    
              // Ces données seront automatiquement échappées
              $this->db->set('auteur',  $auteur);
              $this->db->set('titre',   $titre);
              $this->db->set('contenu', $contenu);
  
             // Ces données ne seront pas échappées
             $this->db->set('date_ajout', 'NOW()', false);
             $this->db->set('date_modif', 'NOW()', false);
  
            // Une fois que tous les champs ont bien été définis, on "insert" le tout
            return $this->db->insert($this->table); 
			   
       }
 
      /**
       * Édite une news déjà existante
	   *  @param integer $id L'id de la news à modifier
       * @param string $titre Le titre de la news
       * @param string $contenu Le contenu de la news
       * @return bool Le résultat de la requête
	   */
       public function editer_news($id, $titre = null, $contenu = null)
       {
              // Il n'y a rien à éditer
              if($titre == null AND $contenu == null)
              {
                 return false;
              }
			  // Ces données seront échappées
              if($titre != null)
              {
                 $this->db->set('titre', $titre);
              }
              if($contenu != null)
              {
                 $this->db->set('contenu', $contenu);
              }
 
              // Ces données ne seront pas échappées
              $this->db->set('date_modif', 'NOW()', false);
 
              // La condition
              $this->db->where('id', (int) $id);
 
              return $this->db->update($this->table);
       }
 
       /**
        * Supprime une news
	    * 
	    * @param integer $id L'id de la news à modifier
        * @return bool Le résultat de la requête
        */
        public function supprimer_news()
        {
               return $this->db->where('id', (int) $id)
                               ->delete($this->table);
        }
 
        /**
         * Retourne le nombre de news
		 * * Retourne le nombre de news.
		 *  @param array $where Tableau associatif permettant de définir des conditions
         * @return integer Le nombre de news satisfaisant la condition
         */
         public function count($where = array())
         {
                return (int) $this->db->where($where)
                                      ->count_all_results($this->table);
         }
 
         /**
          * Retourne une liste de news
		  * * @param integer $nb Le nombre de news
          * @param integer $debut Nombre de news à sauter
          * @return objet La liste de news
          */
          public function liste_news($nb = 10, $debut = 0)
          {
                 return $this->db->select('*')
                                 ->from($this->table)
                                 ->limit($nb, $debut)
                                 ->order_by('id', 'desc')
                                 ->get()
                                 ->result();
          }

 
 
 
 
 
 
 
 
 
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>