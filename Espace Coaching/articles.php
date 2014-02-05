<?php 
include 'function_article.php'; 

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
        <title>Espace Coaching Recherche</title>
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/layout.css">
		<script type="text/javascript" src="js/js-image-slider.js"></script>
		
		<link rel="stylesheet" href="css/js-image-slider.css">
		<link rel="stylesheet" href="css/skeleton.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>  
		<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>  
		
		
		
	
	
	
    
		<!-- <script type="text/javascript">  
				   $(function(){  
				      setInterval(function(){  
				         $(".slideshow ul").animate({marginLeft:-615},800,function(){  
				            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));  
				         })  
				      }, 3500);  
				   });  
		</script>  
        -->
<!--
		<script type="text/javascript">
				$(document).ready(function(){   // le document est chargé
				$("a").click(function(){   // on selectionne tous les liens et on définit une action quand on clique dessus
				page=($(this).attr("href")); // on recuperer l' adresse du lien
				$.ajax({ // ajax
				url: page, // url de la page à charger
				cache: false, // pas de mise en cache
				success:function(html){ // si la requête est un succès 
				afficher(html);     // on execute la fonction afficher(donnees)
				},
				error:function(XMLHttpRequest, textStatus, errorThrows){ // erreur durant la requete
				}
				});
				return false; // on desactive le lien
				});
				});function afficher(donnees){ // pour remplacer le contenu du div contenu
				$("#dessous").empty(); // on vide le div
				$("#dessousa").append(donnees); // on met dans le div le résultat de la requête ajax
				}
		</script>
				 -->
		
	</head>
	
	
	
	
	
<body>
	

<div class="main">

<div class="wrap" style="background-color:#FCFCFC;">    


<!-- script fb permet les commentaires plus bas -->
<div id="fb-root"></div>


		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'))
		;</script>
		
		
		
		
		
		<header>

			<nav id="blue">
			
			     <div class="Conteiner">
			    	
					   	<a href="#"><h1>Espace Coaching</h1></a>
					   	
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
					    <a href="Recherche.php">Coachs</a>
				     </div>
				     
				    </nav>
		</header>
		
		
		
		
		
		<!-- nav entre rubriques -->
		
		<div id="rubriques">
		  <ul>
			<li><a class="current" href="articles.php?categorie=boxe">Boxe</a></li>
			<li><a href="articles.php?categorie=cardio">Cardio</a></li>
			<li><a href="articles.php?categorie=perte">Perte de poids</a></li>
			<li><a href="articles.php?categorie=Musculation">Musculation</a></li>
			<li><a href="articles.php?categorie=Sante">Santé</a></li>
			<li><a href="articles.php?categorie=Nutrition">Nutrition</a></li>
		  </ul>
			
		</div>
		
		<?php 
		if($_GET['categorie']){
            ?>
		  <!-- début section article -->
		  <div id="dessous">
		<div class="Conteiner">
	
	 	<section id="left-article">
	 	
	 	<article id="top-article">
	 	<h2>Top Articles</h2>
	    
	    <div id="slider">
            <?php $req = get_3_last_article($_GET['categorie']);
            while($rows = mysql_fetch_array($req)){?>
            <a href="Article-unique.php?id=<?php echo $rows['id_article']?>" target="_blank">
                <img src="<?php if($rows['lien_photo']!=""){ 
                 //echo "img/up.jpg";
                echo $rows['lien_photo'];
            } else{ 
                echo "img/up.jpg"; 
            }?>" alt="Welcome to Menucool.com" />
            </a>
       
            <?php }?>
        </div>
        
	 	</article>
	 	
	 	<!-- articles en dessous diapo -->
		 	
		 	<article class="autre-article">
		 	
		 	<h2>Autre-article</h2>
                <?php $req=get_alaune_last_article(1, $_GET['categorie']);
                while($rows=mysql_fetch_array($req)){
                ?>
		 	<img src="css/img/barre-bleu.png" alt="barre" />
		 	
			 	<div class="une">
				 	<img src="<?php 
                    if($rows['lien_photo']!=""){
                    echo $rows['lien_photo'];
                }else{
                    echo "css/img/visuel.jpg";
                }?>" alt="visuel" />
				 	<h3><?php echo $rows['titre']; ?></h3>
				 	
				 	<p>par :<a href="Profil-coach.php?id=<?php echo $rows['id_users'];?>"><span class="blue"> <?php echo $rows['nom'].' '.$rows['prenom'];?>  </span></a></p>
				 	
				 	<p class="resume"> </p>
				 	
				 	<a class="article-lien" href="Article-unique.php?id=<?php echo $rows['id_article'];?>">lire l'article</a>
			 	</div>
                <?php }?>
			 	
			 <!-- liste d'articles en dessous du visuel -->
			 	
                <ul>
			 	     
			 	<?php $req=get_other_last_article(1, $_GET['categorie']);
                    
                    while($rows = mysql_fetch_array($req)){
                    ?>
			 		<li>
			 		<div class="liste-articles">
                        
			 		<img src="css/img/grey-bar.png" alt="barre-grise" />
			 		<img src="<?php  if($rows['lien_photo']!=""){
                    echo $rows['lien_photo'];
                }else{
                    echo "css/img/visuel-2.png";
                } ?>" alt="visuel" />
			 		<a href="Article-unique.php?id=<?php echo $rows['id_article'];?>"><h3><?php echo $rows['titre']; ?></h3></a>
			 		<a href="Profil-coach.php?id=<?php echo $rows['id_users'];?>"> <?php echo $rows['nom'].' '.$rows['prenom'];?></a>
			 		<p><?php echo $rows['date_creation'];?></p>
			 		</div>
			 		</li>
                    <?php }?>
			 		
			 		 	
			 	</ul>
		 	
		 	</article>
		 	
		 	<article class="autre-article">
		 	
		 	<h2>Autre-article</h2>
		 	<img src="css/img/barre-bleu.png" alt="barre" />
		 	 <?php $req=get_alaune_last_article(2, $_GET['categorie']);
                while($rows=mysql_fetch_array($req)){
                ?>
			 	<div class="une">
				 	<img src="<?php 
                    if($rows['lien_photo']!=""){
                    echo $rows['lien_photo'];
                }else{
                    echo "css/img/visuel.jpg";
                }?>" alt="visuel" />
				 	<h3><?php echo $rows['titre']; ?></h3>
				 	
						 	<p>par :<a href="Profil-coach.php?id=<?php echo $rows['id_users'];?>"><span class="blue"> <?php echo $rows['nom'].' '.$rows['prenom'];?>  </span></a></p>
				 	
				 	<p class="resume"> </p>
				 	
				 	<a class="article-lien" href="Article-unique.php?id=<?php echo $rows['id_article'];?>">lire l'article</a>
			 	</div>
			 	<?php }?>
			 <!-- liste d'articles en dessous du visuel -->
			 	<ul>
			 		 	<?php $req=get_other_last_article(2, $_GET['categorie']);
                    
                    while($rows = mysql_fetch_array($req)){
                    ?>
			 		<li>
			 		<div class="liste-articles">
                        
			 		<img src="css/img/grey-bar.png" alt="barre-grise" />
			 		<img src="<?php  if($rows['lien_photo']!=""){
                    echo $rows['lien_photo'];
                }else{
                    echo "css/img/visuel-2.png";
                } ?>" alt="visuel" />
			 		<a href="Article-unique.php?id=<?php echo $rows['id_article'];?>"><h3><?php echo $rows['titre']; ?></h3></a>
			 		<a href="Profil-coach.php?id=<?php echo $rows['id_users'];?>"> <?php echo $rows['nom'].' '.$rows['prenom'];?></a>
			 		<p><?php echo $rows['date_creation'];?></p>
			 		</div>
			 		</li>
                    <?php }?>
			 		
			 	</ul>
		 	
		 	</article>
		 	
	 	</section>
	 	<!-- fin du côté gauche -->
	 	
	 	<section id="droit">
		 	<form action="rechercher.php" method="Post">
				<input type="text" placeholder="Cherchez votre article ici" name="requete" size="50" >
		 	</form>
		 	
		 	<!-- début derniers-articles -->
		 	<div id="derniers-articles">
		 	<h2>Derniers articles</h2>
			 	<img src="css/img/barre-bleu.png" alt="barre" />
			 	
			 	<ul>
			 	
                    <?php
                        $last_articles = get_3_last_article($_GET['categorie']);
                        while($rows = mysql_fetch_array($last_articles)){

                    ?>

			 		<li>
			 		<div class="liste-articles-2">
			 		<img src="<?php if($rows['lien_photo']!=""){
                                    echo $rows['lien_photo'];
                                    }
                            else{
                                echo "css/img/visuel-2.png";
                            }
                         ?>" alt="visuel" />
			 		<a href="Article-unique.php?id=<?php echo $rows['id_article'];?>"><h3><?php echo $rows['titre'];?></h3></a>
			 		<a style="margin-left:14px; color:black; line-height:1.7;"href="Profil-coach.php?id=<?php echo $rows['id_users'];?>
                                                                                    "><?php echo $rows['username'];?></a>
			 		<p><?php echo $rows['date_creation'];?></p>
			 		</div>
			 		</li>
                    <?php }?>
                 <!--   <li>
			 		<div class="liste-articles-2">
			 		<img src="css/img/grey-bar.png" alt="barre-grise" />
			 		<img src="css/img/visuel-2.png" alt="visuel" />
			 		<a href="#"><h3>Manger plus sainement</h3></a>
			 		<a href="#"><h3>Manger plus sainement</h3></a>
			 		<a href="Profil-coach.php">V.Martin</a>
			 		<p>25/08/13</p>
			 		</div>
			 		</li>
			 		
			 		<li>
			 		<div class="liste-articles-2">
			 		<img src="css/img/grey-bar.png" alt="barre-grise" />
			 		<img src="css/img/visuel-2.png" alt="visuel" />
			 		<a href="#"><h3>Manger plus sainement</h3></a>
			 		<a href="Profil-coach.php">V.Martin</a>
			 		<p>25/08/13</p>
			 		</div>
			 		</li>	 	
			 	</ul>
			 	-->
			 	
			 	<div id="facebook">
			 	<div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="292" data-height="295" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>
			 	
			 	<div class="fb-comments" data-href="http://example.com" data-width="292" num_posts="2" order-by="social"></div>				 					</div>
	 	
	 	</section>
	 	</div>
	 	</div>
            <?php } else{
            echo "ERROR";
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
		  </div>
</body>
</html>