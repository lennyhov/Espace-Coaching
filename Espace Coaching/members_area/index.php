
<?php
include('config.php');
     session_start();

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="../css/base.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/layout.css">
		<link rel="stylesheet" href="../css/skeleton.css">
        <title>Espace membres</title>
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
    
    
<div class="main">

<div class="wrap">    


  
       
			<div class="Conteiner">

				<section id="inscription">

					<div class="inscription">
<?php
 
//We display a welcome message, if the user is logged, we display it username
?>
	
 	<div class="presentation">
	<p>Bonjour et bienvenue sur Espace Coaching <?php if(isset($_SESSION['username'])){echo ' '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?> !</p><br />
	<p>Vous pouvez vous inscrire et ainsi être visible sur notre site librement.</p><br />
	<p> Si c'est déjà le cas, vous pouvez vous connecter en cliquant sur le lien ci-dessous.</p><br />
	<p><span style="color:red;">Attention</span>, l'inscription est strictement réservée aux coachs</p>
	<p>Les informations fournies lors de l'inscription apparaîtront sur votre profil, visible publiquement.</p>
	</div>
	<?php
	//If the user is logged, we display links to edit his infos, to see his pms and to log out

 
	if(isset($_SESSION['username']))
	{
	?>
<a href="edit_infos2.php">> Modifier mon profil</a><br />
<a href="article_write.php">> Ecrire un article</a> <br />   
      
<?php
    if($_SESSION['type_user']=='admin'){
        include 'function_article.php';
        $count=unvalidate_nb();
        ?>
        <a href='validation_article.php'> Article to validate </a> 
        <?php  
        echo $count;
            ?> <br /> 
            
          <?php
    }
    ?>
    <a href="connexion.php">déconnexion</a>
            <?php
}
else
{
//Otherwise, we display a link to log in and to Sign up
?>
<a href="sign_up.php">S'inscrire</a><br />
<a href="connexion.php">Se connecter</a>
<?php
}
?>
        </div>
    </section>

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
	</body>
</html>