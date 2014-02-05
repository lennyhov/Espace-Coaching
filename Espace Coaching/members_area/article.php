<?php 
include 'function_article.php'; 
    session_start();
if(isset($_SESSION['userid']) && $_SESSION['type_user']=="admin"){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Members Area</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Members Area" /></a>
	    </div>
        
        <div class="content">
            <?php 
            $id = $_GET['id'];
            if(!(isset($_GET['id']))){
             echo "ERREUR : Pas d'enregistrement"; 
             echo "<br /> <a href='validation_article.php'>Retour à la liste des articles</a>";    

            }
            else{
            if(!(isset($_POST['valider']))){
                  $article = article_Selected($_GET['id']);
                $count = mysql_num_rows($article);
                if($count > 0){
                $article = mysql_fetch_array($article);
                echo $article['lien_photo'];
                ?>
            <img src="<?php echo $article['lien_photo'];?>" alt="Photo de profil" /> <br />
            <h1> <?php echo $article['titre']; ?> </h1> 
            <p> Par @<?php echo $article['username'];?></p>
            <p><?php echo $article['texte'];?></p>                
             <form action="article.php?id=<?php echo $_GET['id'];?>" method="POST"> 
            <input type="hidden" name="identifiant" value="<?php echo $id; ?>" > <br />
                 <select name="categorie">
                 <option value="boxe">Boxe</option>
                 <option value="fitness">Fitness</option> 
                 <option value="musculation">Musculation</option>
                 <option value="cardio">Cardio</option>
                 </select> <br />
            <input type="radio" name="ajouter" value="Valider" > Valider <br />
            <input type="radio"  name="ajouter" value="Rejeter" > Rejeter <br />            
            <input type="submit" name="valider" value="Ok "/>
        </form> 
            <?php
              }
                else{
                 echo "Pas d'enregistrement correspondant!";   
                 echo "<br /> <a href='index.php'>Home</a>"; 
                 echo "<br /> <a href='validation_article.php'>Retour à la liste des articles </a>";  
                }
            ?>
          <?php }  
               else{
                    echo $_POST['identifiant'];
                    if($_POST['ajouter']=="Valider"){
                        echo $_POST['categorie'];
                        if(validate_Article($_POST['identifiant'], $_POST['categorie'])){
                        echo "L'article a été validé"; 
                        echo "<br /> <a href='index.php'>Home</a>";  
                        echo "<br /> <a href='validation_article.php'>Retour à la liste des articles </a>";  
                    }
                        else{
                        echo "ERREUR : La validation n'a pas été effectuée";
                        echo "<br /> <a href='index.php'>Home</a>";  
                        echo "<br /> <a href='validation_article.php'>Retour à la liste des articles </a>";  
                        }
                                            }
                    else if ($_POST['ajouter']=="Rejeter"){
                        if(delete_Article($_POST['identifiant'])){
                        echo "L'article a été supprimée"; 
                        echo "<br /> <a href='index.php'>Home</a>";  
                        echo "<br /> <a href='validation_article.php'>Retour à la liste des articles </a>"; 
                        }
                        else{
                        echo "ERREUR : La suppression n'a pas été effectuée";
                        echo "<br /> <a href='index.php'>Home</a>";  
                        echo "<br /> <a href='validation_article.php'>Retour à la liste des articles </a>";  
                        }       
                    }
                } 
            
                }
                                                                  
            ?>
            
             
 
       </div>
        </body>
    
    <?php }?>