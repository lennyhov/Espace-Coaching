<?php include "func.inc.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
		<meta charset="utf-8">
		<title>Profil Coach</title>
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
	    	
			   	<a href="Index.php"><h1>Espace Coaching</h1></a>
			   	
			   	<ul>
			    	<li><a href="members_area" class="blue-right">Connexion</a></li>
					<li><a href="#" class="blue-right">Faq</a></li>
			   	</ul>
	     </div>
     
    </nav>

		    <nav id="white">
		    
		     <div class="Conteiner">
			    <a href="Index.php">Accueil</a>
			    <a href="articles.php">Conseils</a>
			    <a href="recherche.php">Coachs</a>
		     </div>
		     
		    </nav>
</header>

	
        <?php
          if(!isset($_GET["id"])){
           echo "NO PAGE FOUND";   
          }
          else {

              $_GET['id'] = (int) $_GET['id'];
              $profil = get_user_by_Id($_GET['id']);
              if($profil == false){
                echo "No result";  
              }
              else {
                $photo = mysql_fetch_array(get_profil_picture($_GET['id']));
                $cover = mysql_fetch_array(get_cover_picture($_GET['id']));
                $profil = mysql_fetch_array(get_user_by_Id($_GET['id']));
            ?>
		  <!-- début profil -->
		  <div id="wrapper">
		  
		            
		  <section id="visuel">
		  
		  <img src="<?php if(isset($cover['path'])){ echo $cover['path'];}
                  else{
                      echo "css/img/background-coach.png"; }?>" />
          
          <article id="Nom-coach">
		  <p class="Nom"><?php echo $profil['nom']; ?></p>
		  <p class="prenom"><?php echo $profil['prenom']; ?></p>
          </article>
		  
		  <article id="barre-noire">
		  
		     <div class="Conteiner">
		     
			    
		  
			  
			  <ul>
				  
				  <li>
				  	  <p><?php echo $profil['ville'].', '. $profil['departement']; ?>
				  	  </p>
				  </li>
				  
				  <li>
				  	  <a href="#"><p>Photos</p></a>
				  </li>
				  
				  <li>
					  <a href="#"><p>Vidéos</p></a>
				  </li>
				  
				  <li><img id="profil-stars" src="css/img/stars-coach.png" alt="étoile" /></li>
			  </ul>
			  

		     </div>
		  </article>
		  </section>
		  
		  
		  <section id="présentation">
		   <img id="profil" src="<?php if(isset($photo['path'])){ echo $photo['path'];}
                                            else { echo "css/img/profil-2.png";}?>" alt="photo-coach" />
		 
		  <div class="Conteiner">
			  <article id="côté-gauche">
			  
			  		                        					  <p class="titre-profil" style="margin-top:15px;">Spécialités</p>
					  <p class="text"><?php if(isset($profil['specialite1']) || isset($profil['specialite2']) || isset($profil['specialite3'])){
                                                if(isset($profil['specialite1'])){
                                                    echo $profil['specialite1'].'<br />';}
                           if(isset($profil['specialite2'])){echo $profil['specialite2'].'<br />';}
                             if(isset($profil['specialite3'])){echo $profil['specialite3'].'<br />';}}
                          else{
                                echo 'Remise en forme';
                          }?></p>
					  <p class="titre-profil">Contact</p>
					  
					  <div class="join">
					  <p class="contact">Téléphone</p>
					  <p class="text"><?php echo $profil['telephone'];?> </p>
					  </div>
					  
					  <div class="join">
					  <p class="contact">Mail</p>
					  <p class="text"><?php echo $profil['email'];?> </p>
					  </div>
					  
					  <div class="join">
					  <p class="contact">Site web</p>
					  <p class="text"><?php echo $profil['website']?></p>
					  </div> 
					  
					  <video src="#"></video>
					  <a href="#">> Voir toutes les vidéos</a>
			
			
			  </article>
			  </div>
			   <div id="white-background"></div>
			  
		  <div id="blue-background"></div>
		  <div class="Conteiner">
		  <article id="côté-droit">
		  
		  	
				
				  <p class="titre-profil">Description</p>
				  <p class="description"><?php echo $profil['description'];?></p>
				  
				  <p class="titre-profil">Articles de Vincent</p>
                  <ul>
				  <?php
                    $articles = get_article_by_UserId($profil['id']);
                     
                    if($articles != false && $articles != "NoResult"){
                        
                        while ($row = mysql_fetch_array($articles)){     
                            if($row[valide] == 1){
                 ?>
				  
				  <li>
				  <a href="#"><span class="blue-2">> <?php  echo $row['titre']; ?>-</span> </a>
				  </li>
				  <!--
				  <li>
				  <a href="#"><span class="blue-2">> Minceur -</span> perdre du poids efficacement</a>
				  </li>
				  
				  <li>
				  <a href="#"><span class="blue-2">> Minceur -</span> perdre du poids efficacement</a>
				  </li>
				  
				  <li>
				  <a href="#"><span class="blue-2">> Minceur -</span> perdre du poids efficacement</a>
				  </li>
				  
				  <li>
				  <a href="#"><span class="blue-2">> Minceur -</span> perdre du poids efficacement</a>
				  </li>
				-->
				  
				  <?php
                        }
                    }
                    }
                        ?>
                      		 

               <li>
				  <a id="vidéoo-coach" href="#"><span class="blue-2">> Voir tous les articles</span></a>
				  </li>
				  
				  </ul>
				  <p class="titre-profil">Citation favorite</p>
				  <p class="citation"><?php echo $profil['citation'];?></p>
				  <p class="auteur"><?php echo $profil['auteur'];?></p>
				  
		  </article>
		  </div>
		  
		  </section>
		  </div>
        <?php } 
          }      ?>
         
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