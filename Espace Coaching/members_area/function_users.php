<?php
include '../db.inc.php';


/** 
    Recupération de l'enregistrement d'un user d'id $id
    */

/**
    Fonction permettant de recuperer l'enregistrement d'un user en fonction de son ID
    return false si on lui a envoyé un id vide
    return l'enregistrement correspondant à la recherche sinon
    
*/


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
    Fonction permettant de modifier les informations de l'utilisateur
**/

function update_info($arrray){
     try{
        $req = mysql_query('UPDATE users SET username="'.$array['username'].'",  username="'.$array['prenom'].'", nom="'.$array['name'].'", password="'.$array['password'].'", telephone="'.$array['telephone'].'", adresse="'.$array['adresse'].'", ville="'.$array['ville'].'", departement="'.$array['departement'].'", code_postal="'.$array['code_postal'].'", specialite1 = "'.$array['specialite1'].'", specialite2="'.$array['specialite2'].'", specialite3="'.$array['specialite3'].'", website="'.$array['website'].'", description="'.$array['description'].'", citation="'.$array['citation'].'", auteur="'.$array['auteur'].'", email="'.$array['email'].'",  avatar="'.$array['avatar'].'" WHERE id="'.mysql_real_escape_string($array['id']).'"');
         return $req;
     }
     catch(Exception $e)
			{
			   // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
     }
}

function insert_info($array){
    try{
        $req = mysql_query('INSERT INTO users (id, username, prenom , nom, password, telephone, adresse,ville,departement,code_postal,
        specialite1,specialite2, specialite3, website, description, citation, auteur,email, avatar, signup_date) VALUES(NULL,"'.$array['username'].'","'.$array['prenom'].'","'.$array['nom'].'", "'.$array['password'].'","'.$array['telephone'].'", "'.$array['adresse'].'","'.$array['ville'].'", "'.$array['departement'].'", "'.$array['code_postal'].'","'.$array['specialite1'].'","'.$array['specialite2'].'", "'.$array['specialite3'].'", "'.$array['website'].'" ,"'.$array['description'].'", "'.$array['citation'].'","'.$array['auteur'].'","'.$array['email'].'","'.$array['avatar'].'", NOW())')or die(mysql_error());
    $UID=mysql_insert_id(); 
    return $UID;
    }catch(Exception $e){
        // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());
    }
    
    
}


/**
fonction de verrification des informations entrées pour l'update
*/

function verification_insert_info($username,$prenom, $nom,$password, $passverif, $telephone, $adresse, $ville, $departement, $code_postal, $specialite1, $specialite2, $specialite3, $website, $description, $citation, $auteur, $email, $avatar){
 //We check if the form has been sent
	if(isset($username, $password, $passverif, $email, $nom))
	{
		//We remove slashes depending on the configuration
		if(get_magic_quotes_gpc())
		{
        $username = stripslashes($username);
        $prenom = stripslashes($prenom);
		$nom = stripslashes($nom);
		$telephone = stripslashes($telephone);
		$adresse = stripslashes($adresse);
        $ville = stripslashes($ville);
        $departement = stripslashes($departement);
        $code_postal  = stripslashes($code_postal);
        $specialite1 = stripslashes($specialite1);
        $specialite2 = stripslashes($specialite2);
        $specialite3 = stripslashes($specialite3);
        $website = stripslashes($website);
		$description = stripslashes($description);
		$password = stripslashes($password);
		$passverif = stripslashes($passverif);
		$citation = stripslashes($citation);
		$auteur = stripslashes($auteur);
		$email = stripslashes($email);
		$avatar = stripslashes($avatar);
		}
		//We check if the two passwords are identical
		if($password==$passverif)
		{
			//We check if the password has 6 or more characters
			if(strlen($password)>=6)
			{
                if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$email)){
					$username = mysql_real_escape_string(htmlspecialchars($username));
                    $prenom = mysql_real_escape_string(htmlspecialchars($prenom));
                    $nom = mysql_real_escape_string(htmlspecialchars($nom));
					$password = mysql_real_escape_string(htmlspecialchars($password));
                    $ville = mysql_real_escape_string(htmlspecialchars($ville));
                    $adresse = mysql_real_escape_string(htmlspecialchars($adresse));
                    $specialite1 = mysql_real_escape_string(htmlspecialchars($specialite1));
                    $specialite2 = mysql_real_escape_string(htmlspecialchars($specialite2));
                    $specialite3 = mysql_real_escape_string(htmlspecialchars($specialite3));
                    $website = mysql_real_escape_string(htmlspecialchars($website));
		            $description = mysql_real_escape_string(htmlspecialchars($description));
		            $citation = mysql_real_escape_string(htmlspecialchars($citation));
		            $auteur = mysql_real_escape_string(htmlspecialchars($auteur));
					$email = mysql_real_escape_string(htmlspecialchars($email));
					$avatar = mysql_real_escape_string(htmlspecialchars($avatar));
					//We check if there is no other user using the same username
					$dn = mysql_fetch_array(mysql_query('SELECT count(*) as nb from users WHERE username="'.$username.'"'));
					//We check if the username changed and if it is available
					if($dn['nb']==0 or $_POST['username']==$_SESSION['username']){                        
                        $donnee = array( "username" => $username,
                                        "nom" => $nom,
                                        "prenom" =>$prenom,
                                        "password" => $password,
                                        "ville" => $ville,
                                        "telephone" => $telephone,
                                        "departement" => $departement,
                                        "code_postal" => $code_postal,
                                        "adresse" => $adresse,
                                        "specialite1" => $specialite1,
                                        "specialite2" => $specialite2,
                                        "specialite3" => $specialite3,
                                        "website" => $website,
                                        "description" => $description,
                                        "citation" => $citation,
                                        "auteur" => $auteur,
                                        "email" => $email,
                                        "avatar" => $avatar); 
                        $req = insert_info($donnee);
                        if(is_int($req)){
                            echo "Mis à jour des données";
                            return $req;
                        }
                        else{
                         return "Problème au moment de l'insertion des données";
                        }

                    } else{
                        return "Nom d'utilisateur déjà utilisé";
                     }
                } else{
                 return "L'email entré n'est pas valide";  
                }
                
            } else{
                return "Le mot de passe entrés doit faire plus de 6 caractères";
            }
        } else{
            return "Les mots de passes entrés ne sont pas identiques";
        }
        
    } else{
        return "les données obligatoire n'ont pas été entrés";
    }
}

/**
fonction de verrification des informations entrées pour l'update
*/

function verification_update_info($id,$username,$prenom,$nom,$password, $passverif, $telephone, $adresse, $ville, $departement, $code_postal, $specialite1, $specialite2, $specialite3, $website, $description, $citation, $auteur, $email, $avatar){
 //We check if the form has been sent
	if(isset($username, $password, $passverif, $email, $nom))
	{
		//We remove slashes depending on the configuration
		if(get_magic_quotes_gpc())
		{
        $username = stripslashes($username);
		$nom = stripslashes($nom);
		$prenom = stripslashes($prenom);
		$telephone = stripslashes($telephone);
		$adresse = stripslashes($adresse);
        $ville = stripslashes($ville);
        $departement = stripslashes($departement);
        $code_postal  = stripslashes($code_postal);
        $specialite1 = stripslashes($specialite1);
        $specialite2 = stripslashes($specialite2);
        $specialite3 = stripslashes($specialite3);
        $website = stripslashes($website);
		$description = stripslashes($description);
		$password = stripslashes($password);
		$passverif = stripslashes($passverif);
		$citation = stripslashes($citation);
		$auteur = stripslashes($auteur);
		$email = stripslashes($email);
		$avatar = stripslashes($avatar);
		}
		//We check if the two passwords are identical
		if($password==$passverif)
		{
			//We check if the password has 6 or more characters
			if(strlen($password)>=6)
			{
                if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$email)){
					$username = mysql_real_escape_string(htmlspecialchars($username));
					$prenom = stripslashes($prenom);
                    $nom = mysql_real_escape_string(htmlspecialchars($nom));
					$password = mysql_real_escape_string(htmlspecialchars($password));
                    $ville = mysql_real_escape_string(htmlspecialchars($ville));
                    $adresse = mysql_real_escape_string(htmlspecialchars($adresse));
                    $specialite1 = mysql_real_escape_string(htmlspecialchars($specialite1));
                    $specialite2 = mysql_real_escape_string(htmlspecialchars($specialite2));
                    $specialite3 = mysql_real_escape_string(htmlspecialchars($specialite3));
                    $website = mysql_real_escape_string(htmlspecialchars($website));
		            $description = mysql_real_escape_string(htmlspecialchars($description));
		            $citation = mysql_real_escape_string(htmlspecialchars($citation));
		            $auteur = mysql_real_escape_string(htmlspecialchars($auteur));
					$email = mysql_real_escape_string(htmlspecialchars($email));
					$avatar = mysql_real_escape_string(htmlspecialchars($avatar));
					//We check if there is no other user using the same username
					$dn = mysql_fetch_array(mysql_query('SELECT count(*) as nb from users WHERE username="'.$username.'"'));
					//We check if the username changed and if it is available
					if($dn['nb']==0 or $_POST['username']==$_SESSION['username']){                        
                        $donnee = array("id" => $id, 
                                        "username" => $username,
                                        "prenom" => $prenom,
                                        "nom" => $nom,
                                        "password" => $password,
                                        "ville" => $ville,
                                        "telephone" => $telephone,
                                        "departement" => $departement,
                                        "code_postal" => $code_postal,
                                        "adresse" => $adresse,
                                        "specialite1" => $specialite1,
                                        "specialite2" => $specialite2,
                                        "specialite3" => $specialite3,
                                        "website" => $website,
                                        "description" => $description,
                                        "citation" => $citation,
                                        "auteur" => $auteur,
                                        "email" => $email,
                                        "avatar" => $avatar); 
                        if(update_info($donnee)){
                            echo "Mis à jour des données";
                            return $donnee;
                        }
                        else{
                         return "Problème au moment de l'insertion des données";
                        }

                    } else{
                        return "Nom d'utilisateur déjà utilisé";
                     }
                } else{
                 return "L'email entré n'est pas valide";  
                }
                
            } else{
                return "Le mot de passe entrés doit faire plus de 6 caractères";
            }
        } else{
            return "Les mots de passes entrés ne sont pas identiques";
        }
        
    } else{
        return "les données obligatoire n'ont pas été entrés";
    }
}

?>