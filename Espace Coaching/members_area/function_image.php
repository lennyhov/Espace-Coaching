<?php
/**
TODO
Supprimer les photos du dossier de l'utilisateur 

**/
include '../db.inc.php';
/**
    Ajoute une photo pour le users d'id $id
*/

function insert_img_users_bdd($name_photo, $id){
    try{
        replace_profil_picture($id);
        $path="http://localhost/members_area/media_users/photos_users_".$id."/".$name_photo;
        $req = mysql_query('INSERT INTO images (id , users_id, path, profil) VALUES (NULL, "'.$id.'", "'.$path.'", "1")')or die(mysql_error());
    } catch(Exception $e){
     // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());   
    }
}

function insert_cover_users_bdd($name_photo, $id){
    try{
        replace_cover_picture($id);
        $path="http://localhost/members_area/media_users/photos_users_".$id."/".$name_photo;
        $req = mysql_query('INSERT INTO images (id , users_id, path, profil, cover) VALUES (NULL, "'.$id.'", "'.$path.'", "0", "1")')or die(mysql_error());
    } catch(Exception $e){
     // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());   
    }
}

function replace_profil_picture($id){
    try{
        $req = mysql_query('SELECT id FROM images WHERE users_id = "'.$id.'" AND profil="1"')or die(mysql_error());
        $nb = mysql_num_rows($req);
        if($nb!=0){
            while($rows = mysql_fetch_array($req)){
                mysql_query('DELETE FROM images WHERE id="'.$rows['id'].'"');
            }
        }
    }catch(Exception $e){
     // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());   
    }
    } 

function replace_cover_picture($id){
    try{
        $req = mysql_query('SELECT id FROM images WHERE users_id = "'.$id.'" AND cover="1"')or die(mysql_error());
        $nb = mysql_num_rows($req);
        if($nb!=0){
            while($rows = mysql_fetch_array($req)){
                mysql_query('DELETE FROM images WHERE id="'.$rows['id'].'"');
            }
        }
    }catch(Exception $e){
     // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());   
    }
    } 

    function creerMin($img,$chemin,$nom,$mlargeur=100,$mhauteur=100){
		
        // On supprime l'extension du nom
		$nom = substr($nom,0,-4);
		// On récupère les dimensions de l'image
		$dimension=getimagesize($img);
		// On cré une image à partir du fichier récup
		if(substr(strtolower($img),-4)==".jpg"){$image = imagecreatefromjpeg($img); }
		else if(substr(strtolower($img),-4)==".png"){$image = imagecreatefrompng($img); }
		else if(substr(strtolower($img),-4)==".gif"){$image = imagecreatefromgif($img); }
		// L'image ne peut etre redimensionne
		else{return false; }
		// Création des miniatures
		// On cré une image vide de la largeur et hauteur voulue
		$miniature =imagecreatetruecolor ($mlargeur,$mhauteur); 
		// On va gérer la position et le redimensionnement de la grande image
		if($dimension[0]>($mlargeur/$mhauteur)*$dimension[1] ){ $dimY=$mhauteur; $dimX=$mhauteur*$dimension[0]/$dimension[1]; $decalX=-($dimX-$mlargeur)/2;               $decalY=0;}
		if($dimension[0]<($mlargeur/$mhauteur)*$dimension[1]){ $dimX=$mlargeur; $dimY=$mlargeur*$dimension[1]/$dimension[0]; $decalY=-($dimY-$mhauteur)/2;                $decalX=0;}
		if($dimension[0]==($mlargeur/$mhauteur)*$dimension[1]){ $dimX=$mlargeur; $dimY=$mhauteur; $decalX=0; $decalY=0;}
		// on modifie l'image crée en y plaçant la grande image redimensionné et décalée
		imagecopyresampled($miniature,$image,$decalX,$decalY,0,0,$dimX,$dimY,$dimension[0],$dimension[1]);
		// On sauvegarde le tout
		imagejpeg($miniature,$chemin."/".$nom.".jpg",90);
		return true;
	}

function min_creation($name_photo,$dossier){

    if(is_dir($dossier) == false){
        mkdir($dossier, 0755, true);
    }
    echo $dossier;
    echo $name_photo;
    creerMin($name_photo,$dossier,"min_".$name_photo, 194, 275);
}


function insert_img($img, $dossier, $taillemax, $id, $profil){
     // Verification photo
        $extensions = array('.png', '.jpeg', '.PNG', '.JPEG');
        $extension = strrchr($img['name'], '.');
        $taille = filesize($img['tmp_name']);
            if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
                    {
                    $erreur = 'Vous devez uploader un fichier de type png ou jpeg';
                    }
                    if($taille>$taillemax){
                     $erreur="fichier trop gros 1000000 px maximum"; 
                    }
                    if(isset($erreur)){
                    echo $erreur;
                    return false;
                    }
             else{
            $id_photo = get_id_photo() + 1;
    
            //On nomme la photo en fonction du dernier id trouvé
            $name_photo = $dossier."/photo".$id_photo.$extension;
            //On met la photo dans le dossier correspondant
            if(move_uploaded_file($img['tmp_name'],$name_photo)){
                if($profil == "profil"){
                insert_img_users_bdd("photo".$id_photo.$extension, $id);
                return true;    
                } else if($profil == "cover"){
                insert_cover_users_bdd("photo".$id_photo.$extension, $id);
                return true;
                }
                }
                else{
                    return false;
                }
             }
    }


function get_id_photo(){
    try{
        return mysql_query("SELECT LAST_INSERT_ID() FROM images")or die(mysql_error());
    } catch(Exception $e){
     // En cas d'erreur, on affiche un message et on arrête tout
			        die('Erreur : '.$e->getMessage());   
    }
}

?>