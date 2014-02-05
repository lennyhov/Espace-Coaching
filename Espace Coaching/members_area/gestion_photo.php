<?php
    include 'function_image.php';

    session_start();
    if(isset($_SESSION['userid'])){
    if(!empty($_FILES['photo'])){
        $img = $_FILES['photo'];
        $dossier = "media_users/photos_users_".$_SESSION['userid'];
        $dossiermin = "media_users/min_users_".$_SESSION['userid']; 
        $droits = 0755;
        //Verification dossier photo et insertion de la photo dans le dossier
       if(is_dir($dossier)== false){
        mkdir($dossier, $droits, true);
        }
        if(insert_img($img, $dossier, $dossiermin, $_POST['MAX_SIZE_PHOTO'])){        
            echo "image Uploader"; 
        }
        else{
            echo "img pas upload";
        }
        
    }
    
    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <link rel="stylesheet" href="../css/base.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/layout.css">
		<link rel="stylesheet" href="../css/skeleton.css">
        <title>Edit my personnal informations</title>
    </head>
    <body>
    	<header>

	<nav id="blue">
	
	     <div class="Conteiner">
	    	
			   	<a href="Index.php"><h1>Espace Coaching</h1></a>
			   	
			   	<ul>
			    	<li><a href="members_area" class="blue-right">Connexion</a></li>
					<li><a href="#" class="blue-right">Faq</a></li>
			   	</ul>
	     </div>
     
    </nav>

		    <nav id="white">
		    
		     <div class="Conteiner">
			    <a href="../Index.php">Accueil</a>
			    <a href="../articles.php">Conseils</a>
			    <a href="../recherche.php">Coachs</a>
		     </div>
		     
		    </nav>
</header>
        
        <div>
        <form method="post" action="gestion_photo.php" enctype="multipart/form-data"> 
            <label>Ajouter une photo</label>
            <input type="file" name="photo" />
            <input type="hidden" name="MAX_SIZE_PHOTO" value="1000000" />
            <input type="submit" value="Uploader" />
            </form>
        </div>
    	</body>
    <?php } ?>