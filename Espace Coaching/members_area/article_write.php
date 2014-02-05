<?php session_start();
if(isset($_SESSION['userid'])){

include "function_article.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="fr">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" /> -->
        <link rel="stylesheet" href="../css/base.css">
		<link rel="stylesheet" href="css/layout.css">
		<link rel="stylesheet" href="css/skeleton.css">
		<link rel="stylesheet" href="../css/style.css">
        <title>Espace Membre - Rédiger un article</title>
    </head>
    
    
    <body>
    
    <header>

	<nav id="blue">
	
	     <div class="Conteiner">
	    	
			   	<a href="index.php"><h1>Espace Coaching</h1></a>
			   	
			   	<ul>
			    	<li><a href="members_area" class="blue-right">Connexion</a></li>
					<li><a href="#" class="blue-right">Faq</a></li>
			   	</ul>
	     </div>
     
    </nav>

		    <nav id="white">
		    
		     <div class="Conteiner">
			    <a href="index.php">Accueil</a>
			    <a href="articles.php">Conseils</a>
			    <a href="recherche.php">Coachs</a>
		     </div>
		     
		    </nav>
	</header>
	
	
	
    	<!-- <div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Members Area" /></a>
        	
	    </div>
	    -->
	    
	    
	  <div class="main"> 
	  <div class="wrap">
        <div class="redac">
        	<div class="middle">
            <?php 
            if(!(isset($_POST['article'])) && !(isset($_POST['titre']))){
                ?>
            <form action="article_write.php"  enctype="multipart/form-data" method="POST">
                <label> Titre : </label>
                <input type="text" name="titre" >
     
                <label> Article : </label> <br />
                <textarea cols="25"  rows ="10" type="text" name="article" >
                    </textarea>
               
                <input type="hidden" name="MAX_SIZE_PHOTO" value="1000000" /> 
                <label>illustration :</label>
                <input value="Photo d'illustration" type="file" name="photo" /> <br />
                <p>Votre article fera l'objet d'une modération avant d'être validé !</p>
                <input type="submit" name="Envoyer" id="valider" >
            </form>
            <?php }
            else {
                $id_article = submit_article($_SESSION['userid'], $_POST['titre'], $_POST['article']);
                if(isset($_FILES['photo'])){
                    $dossier = 'Images/Images_articles/';
                    $fichier = 'article_'.$id_article;
                    $extensions = array('.png', '.jpeg', '.PNG', '.JPEG');
                    $extension = strrchr($_FILES['photo']['name'], '.');
                    $taillemax = $_POST['MAX_SIZE_PHOTO'];
                    $taille = filesize($_FILES['photo']['tmp_name']);  
                    
                    if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
                    {
                    $erreur = 'Vous devez uploader un fichier de type png ou jpeg';
                    }
                    if($taille>$taillemax){
                     $erreur="fichier trop gros 1000000 px maximum"; 
                    }
                    if(isset($erreur)){
                    echo $erreur;
                    }
                    
                    else{    
                        if(move_uploaded_file($_FILES['photo']['tmp_name'],$dossier.$fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
                        {
                        $link="http://localhost/members_area/Images/Images_articles/article_".$id_article;
                        add_link_photo($id_article, $link);    
                        echo 'Upload effectué avec succès !';
                        echo "<br /> <a href='index.php'>Home</a>";
                        }
                        else //Sinon (la fonction renvoie FALSE).
                        {
                        echo 'Echec de l\'upload !';
                            echo "<br /><a href='article_write.php'> Réecire votre article </a>";
                        }
                        
                    }
                }
            }
            

            ?>
 
        	</div>
        </div>
        
        
       
 <footer>
  		  	<div class="Conteiner">
		     <a href="#" >Plan du site</a>
		     <a href="#" >Contact</a>
		     <a href="#" >Mentions légales</a>
		     <a href="#" >Conditions générales</a>
		     <a href="#" >Partenaires</a>
		     <a href="#" >Vous êtes coach ?</a>
  		  	</div>
</footer>
	  </div>
	  </div>
		  
        </body>
    <?php }
    
    ?>
     </html>