<?php include 'function_article.php'; ?>

<!DOCTYPE html>
<html lang="fr">
   <head>
        <meta charset="utf-8" />
        <title>Espace Coaching Recherche</title>
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/layout.css">
		<link rel="stylesheet" href="css/skeleton.css">   
	</head>
 
    <body>
    
	<div class="main">
	
	<div class="wrap">  
    
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
    <?php 
        if(!isset($_GET['id'])){
         
            echo "AUCUN ARTICLE CORRESPONDANT";    
            
        }
        else{
            $article = get_article_by_id($_GET['id']);
             $nb = mysql_num_rows($article);
            $article = mysql_fetch_array($article);
            if($nb>0){
        ?>
        
   
    
    <section id="back">
    
    <div class="Conteiner">
    <div id="illustration">
     <img  id="pres" src="<?php if($article['lien_photo']!=""){echo $article['lien_photo'];}
                else{ echo "css/img/article-img.jpg";}?>" alt="background" />
    </div>
        
    <section id="left">
    <p><?php echo $article['date_creation']; ?></p>
    <img src="css/img/stars-coach-2.png" alt="étoiles" />
    </section>

   
    <section id="article-unique">
    
	
    
    		<h1>
                <?php echo $article['titre'];?>
            </h1>
    		<p>
                <?php echo $article['texte']; ?>
            </p>


			<a href="Profil-coach.php?id=<?php echo $article['id_users'];?>" style="margin-bottom:30px;"> <?php echo $article['username'];?></a>
			<a href="Profil-coach.php?id=<?php echo $article['id_users'];?>">> Profil du Coach</a>
			<a href="#">> Articles de Vincent</a>
			
			<div id="note">
			<p>Noter cet article</p>
			<img src="css/img/stars-coach-2.png" alt="étoile" />
			</div>
			
			
			<div id="article-share">
			<a href="#" id="facebook"><img src="css/img/fb.png" alt="lien facebook" /></a>
	    	<a href="#" id="twitter"><img src="css/img/twitter.png" alt="lien facebook" /></a>
	    	<a href="#" id="google"><img src="css/img/google.png" alt="lien facebook" /></a>
			</div>
			
			<?php 
             /**   $precedent = mysql_fetch_array(get_article_before_id($article['id_article'], $article['date_creation'], $article['categorie']));
                $suivant = mysql_fetch_array(get_article_after_id($article['id_article'], $article['date_creation'], $article['categorie']));
            */
            ?>
			<div id="article-nav">			
			<a href="Article-unique.php?id=<?php echo $precedent['id'];?>">
			<img style="margin-right: 13px;" src="css/img/flèche-gauche.png" alt="flèche" />
			
			<p class="flèche">Article précédent</p>
			
			</a>
			
			<a href="Article-unique.php?id=<?php echo $suivant['id'];?>">
			<p style="margin-left: 115px;" class="fléche">Article suivant</p>
			<img style="margin-left: 271px;" src="css/img/flèche-droite.png" alt="flèche" />
			</a>
			</div>
			
    	
    </section>
    </div>
    </section>
        <?php }
        else{
            echo "AUCUN ARTICLE CORRESPONDANT";
        }
        }
        ?>
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
</html>
