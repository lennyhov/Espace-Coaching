<?php
include '../db.inc.php';

function get_five_top_article(){
    try{
 $req = mysql_query('SELECT titre, texte, date_creation, username, article.id AS id_article, users.id AS id_users, lien_photo  FROM article, users 
        WHERE users.id = article.users_id ORDER BY note DESC LIMIT 0,5');   
        return $req;
    }catch(Exception $e){
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			} 
}    

function get_article(){
    $req = mysql_query('SELECT * FROM article;');
    return $req;
}

/** Ajout d'un article dans la base de donnée */

function submit_article($id, $titre, $article){
    $id = htmlspecialchars($id);
    $titre = htmlspecialchars($titre);
    $article = htmlspecialchars($article);
    
    mysql_query('INSERT INTO  article (id , users_id , valide, titre , texte, date_creation) 
    VALUES ( NULL,  "'.$id.'",  0,  "'.$titre.'",  "'.$article.'", NOW())');
    $UID=mysql_insert_id(); 
    return $UID;
}

function unvalidate_article(){
 try{
        $req = mysql_query('SELECT titre, date_creation, username, article.id AS id_article, users.id AS id_users  FROM article, users 
        WHERE article.valide = 0 AND users.id = article.users_id')or die(mysql_error());
        return $req;
        
    } catch(Exception $e){
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
}

/** Retourne le nombre d'article non valide dans la table article 
un article pas encore validé se distingue par son champs valide = 0
*/
function unvalidate_nb(){
 
    try{
        $req = mysql_query('SELECT * FROM article WHERE valide = 0')or die(mysql_error());
        $req = mysql_num_rows($req);
        return $req;
        
    } catch(Exception $e){
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
			}
}

/**
    Retourne l'enregistrement de l'article sélectionné par l'admin
*/

function article_Selected($id){
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
 Valide l'enregistrement correspondant à $id
 */

 function validate_Article($id, $categorie){
   
      $id = htmlspecialchars($id);    
 try{
     
     $req=mysql_query('UPDATE `Espace_Coaching_Connexion`.`article` SET  `valide` =  1,`categorie` =  "'.$categorie.'" WHERE  `article`.`id` ="'.$id.'"')or die(mysql_error());
     if($req){
        return $req;
     } else{
        return $req;
     }
    } catch(Exception $e){
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
 }
 }

 /**
 Supprime l'enregistrement de l'article correspondant à $id
 */

function delete_Article($id){
      $id = htmlspecialchars($id);
     
 try{
     return mysql_query('DELETE FROM article WHERE id ="'.$id.'"')or die(mysql_error());
    } catch(Exception $e){
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
      }
 }

 /**
    Ajoute le lien dans la colonne lien_photo    
 */

 function add_link_photo($id,$link){
   
      $id = htmlspecialchars($id);   
      $link = htmlspecialchars($link);
 try{
     return mysql_query('UPDATE article SET lien_photo = "'.$link.'" WHERE id ="'.$id.'"')or die(mysql_error());
    } catch(Exception $e){
			    // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
    }
  }

?>