<?php
include 'db.inc.php';

function get_3_last_article($categorie){
  
    try{
        $req = mysql_query('SELECT titre, date_creation, username, lien_photo, article.id AS id_article, users.id AS id_users  FROM article, users 
        WHERE article.valide = 1 AND users.id = article.users_id AND categorie="'.$categorie.'" ORDER BY date_creation DESC LIMIT 0,3')or die(mysql_error());
        return $req;
        
    } catch(Exception $e){
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
    
}

function get_alaune_last_article($number, $categorie){
  
    try{
        if($number==1){
        $req = mysql_query('SELECT titre, date_creation, prenom, nom, lien_photo, article.id AS id_article, users.id AS id_users  FROM article, users 
        WHERE article.valide = 1 AND users.id = article.users_id AND categorie="'.$categorie.'" ORDER BY date_creation DESC LIMIT 3,1')or die(mysql_error());
        } else if($number==2){
            $req = mysql_query('SELECT titre, date_creation, nom, prenom, lien_photo, article.id AS id_article, users.id AS id_users  FROM article, users 
        WHERE article.valide = 1 AND users.id = article.users_id AND categorie="'.$categorie.'" ORDER BY date_creation DESC LIMIT 4,1')or die(mysql_error());
        }
        return $req;
        
    } catch(Exception $e){
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
    
}

function get_other_last_article($number, $categorie){
    try{ 
         if($number==1){
        $req = mysql_query('SELECT titre, date_creation, nom, prenom, lien_photo, article.id AS id_article, users.id AS id_users  FROM article, users 
        WHERE article.valide = 1 AND users.id = article.users_id AND categorie="'.$categorie.'" ORDER BY date_creation DESC LIMIT 5,3')or die(mysql_error());
        } else if($number==2){
            $req = mysql_query('SELECT titre, date_creation, nom, prenom, lien_photo, article.id AS id_article, users.id AS id_users  FROM article, users 
        WHERE article.valide = 1 AND users.id = article.users_id AND categorie="'.$categorie.'" ORDER BY date_creation DESC LIMIT 8,3')or die(mysql_error());
        }
        return $req;
        
    } catch(Exception $e){
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
    
}

/**
    Retourne l'enregistrement de l'article sélectionné par l'admin
*/

function get_article_by_id($id){
 $id = htmlspecialchars($id);
 try{
        $req = mysql_query('SELECT titre, texte, date_creation, username, article.id AS id_article, users.id AS id_users, lien_photo  FROM article, users 
        WHERE article.id = "'.$id.'" AND users.id = article.users_id')or die(mysql_error());
        return $req;
        
    } catch(Exception $e){
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
}

/**
Retourne l'article le plus récent de la même catégorie que l'article dont l'id est $id
*/

function get_article_before_id($id,$date_creation, $categorie){
 $id = htmlspecialchars($id);
    
    try {
        $req = mysql_query('SELECT id  FROM article 
        WHERE id!="'.$id.'" AND valide = 1 AND categorie= "'.$categorie.'" AND date_creation = (SELECT date_creation FROM article WHERE TO_DAYS(date_creation) <= TO_DAYS("'.$date_creation.'") ORDER BY date_creation DESC LIMIT 0,1) ') or die(mysql_error());
        return $req;  
    } catch(Exception $e){
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
}

/**
Retourne l'article le plus récent de la même catégorie que l'article dont l'id est $id
*/

function get_article_after_id($id,$date_creation, $categorie){
 $id = htmlspecialchars($id);

    
    try {
        $req = mysql_query('SELECT id  FROM article 
        WHERE id!="'.$id.'" AND valide = 1 AND categorie= "'.$categorie.'" AND date_creation = (SELECT date_creation FROM article WHERE TO_DAYS(date_creation) > TO_DAYS("'.$date_creation.'") ORDER BY date_creation DESC LIMIT 0,1) ') or die(mysql_error());
        return $req;  
    } catch(Exception $e){
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
}


?>