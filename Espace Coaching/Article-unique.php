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

    
    
    
    
	<div class="main">
	
	<div class="wrap">  
    
    <div class="Conteiner">
    
    
    
    <!-- <section id="gauche">
    </section> -->
    
   	<!-- <section id="article-seul">
   	
   		<article id="illustration">
   			<img />
   		</article>
   		
   		<h1 class="titre">Salut les copains</h1>
   		
   		<p class="article">Salut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copainsSalut les copains</p>
   		
	   		<div id="auteur">
		   		<a href="‰">Charles</a>
	   		</div>
	   		
	   		<div id="note-article"></div>
	   		
	   		<div id="partage"></div>
	   		
	   		<div id="autres-articles"></div>
	   		
   	</section>-->
   	
   	<section id="article-unique">
    
			<article id="illustration">   <img  id="pres" src="<?php if($article['lien_photo']!=""){echo $article['lien_photo'];}
                else{ echo "css/img/article-img.jpg";}?>" alt="background" /></article>
			
			<div id="article-center">
			
    		<h1>
                <?php echo $article['titre'];?>yo
            </h1>
    		<p>
                <?php echo $article['texte']; ?>yooo
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
			
			</div>
			
    	
    </section>

   	
   	
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
</html>
