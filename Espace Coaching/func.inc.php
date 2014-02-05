<?php
include 'db.inc.php';


function search_results($recherche) {
	$retour_resultat = array();
	$where = "";
	
	// enleve les espaces
	$recherche = preg_split('/[\s]+/', $recherche);
	// comptes le nombre de mots
	$total_recherche = count($recherche);
	

	 
	// check dans le tableau la place du mot 
	foreach ($recherche as $key => $mot) {
		$where .= " 'mots' LIKE '%$mot%'";
		if($key != (total_recherche - 1)) {
			$where .= " AND ";
		}
	}
	 

	
	$resultats = "SELECT `id`, `username`, `nom`, `password`, `email`, `telephone`, `adresse`, `avatar`, `description`, `citation`, `auteur`, `signup_date` FROM `users` WHERE $where";
	
	
	$resultats_num = ($resultats = mysql_query($resultats)) ?mysql_num_rows($resultats) : 0 ;
	
	
	if ($resultats_num === 0) {
		return false;
			
		} else {
		while ( $resultats_row = mysql_fetch_assoc($resultats)) {
		
			$retour_resultat[] = array	(
						'username' => $resultats_row['title'],
						'nom' => $resultats_row['nom'],
						'adresse' => $resultats_row['adresse'],
						
						);
			
			return $retour_resultat;
				}
	}
	
}

/**
    Fonction permettant de compter le nombre de resultat pour une requete sur le nom
**/
function count_by_name($requete){
    if($requete != NULL){
      $requete=htmlspecialchars($requete);
        try{
          $query = mysql_query("SELECT COUNT(id) as nbResult FROM users WHERE (prenom LIKE '%$requete%' OR nom LIKE '%$requete%')")or die(mysql_error()); 
            return $query;
        } catch(Exception $e){
           // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage()); 
        }
    } 
}

/**
    Fonction permettant de compter le nombre de resultat pour une requete sur le nom top coach
**/
function count_by_name_top($requete){
    if($requete != NULL){
      $requete=htmlspecialchars($requete);
        try{
          $query = mysql_query("SELECT COUNT(id) as nbResult FROM users WHERE (prenom LIKE '%$requete%' OR nom LIKE '%$requete%')")or die(mysql_error()); 
            return $query;
        } catch(Exception $e){
           // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage()); 
        }
    } 
}

/**
    Fonction permettant de compter le nombre de résultat pour une requete sur les departement
**/

function count_by_departement($dep1,$dep2,$dep3){

    $dep1=htmlspecialchars($dep1);
    $dep2=htmlspecialchars($dep2);
    $dep3=htmlspecialchars($dep3);

        if(isset($dep1) || isset($dep2) || isset($dep3)){
      $requete=htmlspecialchars($requete);
        try{
            $query = mysql_query("SELECT COUNT(id) as nbResult FROM users WHERE departement=".$dep1." OR departement=".$dep2." OR departement=".$dep3."")or die(mysql_error());
            return $query;
        } catch(Exception $e){
           // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage()); 
        }
    } 
}

/**
    Fonction permettant de compter le nombre de résultat pour une requete sur les departement top coach
**/

function count_by_departement_top($dep1,$dep2,$dep3){

    $dep1=htmlspecialchars($dep1);
    $dep2=htmlspecialchars($dep2);
    $dep3=htmlspecialchars($dep3);

        if(isset($dep1) || isset($dep2) || isset($dep3)){
      $requete=htmlspecialchars($requete);
        try{
            $query = mysql_query("SELECT COUNT(id) as nbResult FROM users WHERE departement=".$dep1." OR departement=".$dep2." OR departement=".$dep3."")or die(mysql_error());
            return $query;
        } catch(Exception $e){
           // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage()); 
        }
    } 
}
/**
    Fonction permettant la recherche de profil user en fonction de leur différent
*/

function research($requete, $cpage, $perPage){
     // on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.
    $cpage=htmlspecialchars($cpage);
 if ($requete != NULL ) {
     $requete = htmlspecialchars($requete);
     try{
    $query = mysql_query("SELECT * FROM users WHERE (prenom LIKE '%$requete%' OR nom LIKE '%$requete%') ORDER BY note DESC LIMIT ".($cpage - 1)*$perPage.", ".$perPage."") or die(mysql_error());
          $nb_resultats = mysql_num_rows($query); 
         if($nb_resultats == 0){
         return "NoResult";
         }
         else{
          return $query;
         }
     }
     catch(Exception $e)
			{
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
}  else{
     return false;   
    }
}

/**
    Fonction de recherche sur les départements
**/

function search_departement($dep1, $dep2, $dep3,$cpage,$perPage){
    $cpage=htmlspecialchars($cpage);
    $dep1=htmlspecialchars($dep1);
    $dep2=htmlspecialchars($dep2);
    $dep3=htmlspecialchars($dep3);

    if(isset($dep1) || isset($dep2) || isset($dep3)){
     try{
         $query = mysql_query("SELECT * FROM users WHERE departement=".$dep1." OR departement=".$dep2." OR departement=".$dep3."
         ORDER BY note DESC LIMIT ".($cpage-1)*$perPage.",".$perPage."")or die(mysql_error());
         $nb_resultats = mysql_num_rows($query);
         if($nb_resultats == 0){
         return "NoResult";
         }
         else{
          return $query;
         }
     } catch(Exception $e)
			{
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
 } else{
     return false;   
    }
    
}

/**
    Fonction de recherche sur les départements pour les top coachs
**/

function search_departement_top($dep1, $dep2, $dep3){

    $dep1=htmlspecialchars($dep1);
    $dep2=htmlspecialchars($dep2);
    $dep3=htmlspecialchars($dep3);

    if(isset($dep1) || isset($dep2) || isset($dep3)){
     try{
         $query = mysql_query("SELECT * FROM users WHERE departement=".$dep1." OR departement=".$dep2." OR departement=".$dep3."
         ORDER BY note DESC LIMIT 0,3")or die(mysql_error());
         $nb_resultats = mysql_num_rows($query);
         if($nb_resultats == 0){
         return "NoResult";
         }
         else{
          return $query;
         }
     } catch(Exception $e)
			{
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
 } else{
     return false;   
    }
    
}

/**
    fonction de recherche sur le nom pour les top coach
*/

function search_by_name_top($requete){
    
         // on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.
    $cpage=htmlspecialchars($cpage);
 if ($requete != NULL ) {
     $requete = htmlspecialchars($requete);
     try{
    $query = mysql_query("SELECT * FROM users WHERE (nom LIKE '%$requete%' OR prenom LIKE '%$requete%') ORDER BY note DESC LIMIT 0,3") or die(mysql_error());
          $nb_resultats = mysql_num_rows($query); 
         if($nb_resultats == 0){
         return "NoResult";
         }
         else{
          return $query;
         }
     }
     catch(Exception $e)
			{
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
}  else{
     return false;   
    }
    
}

/**
    Retourne le chemin de la photo de profil
**/
function get_profil_picture($id){
    if ($id != NULL) {
     $id = htmlspecialchars($id);
     try{
        $query = mysql_query('SELECT path FROM images WHERE users_id = "'.$id.'" and profil="1"') or die(mysql_error());
        $nb_resultats = mysql_num_rows($query); 
         if($nb_resultats == 0){
         return "NoResult";
         }
         else{
          return $query;
         }
     }
     catch(Exception $e)
			{
			   // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
}
    else{
     return false;   
    }
}

/**
    Retourne le chemin de la photo de cover
**/
function get_cover_picture($id){
    if ($id != NULL) {
     $id = htmlspecialchars($id);
     try{
        $query = mysql_query('SELECT path FROM images WHERE users_id = "'.$id.'" && cover="1"') or die(mysql_error());
        $nb_resultats = mysql_num_rows($query); 
         if($nb_resultats == 0){
         return "NoResult";
         }
         else{
          return $query;
         }
     }
     catch(Exception $e)
			{
			   // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
}
    else{
     return false;   
    }
}

function get_user_by_Id($id){
    if ($id != NULL) {
     $id = htmlspecialchars($id);
     try{
        $query = mysql_query('SELECT * FROM users WHERE id = "'.$id.'"') or die(mysql_error());
        $nb_resultats = mysql_num_rows($query); 
         if($nb_resultats == 0){
         return "NoResult";
         }
         else{
          return $query;
         }
     }
     catch(Exception $e)
			{
			   // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
}
    else{
     return false;   
    }
}
 
/**
    Fonction permettant de recuperer l'enregistrement d'un article en fonction de l'identifiant du user correspondant
    return false si on lui a envoyé un id vide
    return l'enregistrement correspondant à la recherche sinon
    
*/


function get_article_by_UserId($id){
        if ($id != NULL) {
     $id = htmlspecialchars($id);
     try{
        $query = mysql_query("SELECT * FROM article WHERE users_id = '.$id.' AND valide='1' LIMIT 0,5") or die(mysql_error());
        $nb_resultats = mysql_num_rows($query); 
         if($nb_resultats == 0){
         return "NoResult";
         }
         else{
          return $query;
         }
     }
     catch(Exception $e)
			{
			   // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
}
    else{
     return false;   
    }
}



function get_article_by_Id($id){
   if ($id != NULL) {
     $id = htmlspecialchars($id);
     try{
         $query = mysql_query("SELECT * FROM article WHERE id = '.$id.'") or die(mysql_error());
         $nb_resultats = mysql_num_rows($query); 
         if($nb_resultats == 0){
         return "NoResult";
         }
         else{
          return $query;
         }
     }
     catch(Exception $e)
			{
			   // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
}
    else{
     return false;   
    }

}

?>