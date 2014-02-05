<?php session_start(); ?>
<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Espace Coaching Accueil</title>
        <link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/layout.css">
		<link rel="stylesheet" href="css/skeleton.css">
	
    </head>
 
    <body>
    <div class="main">
	
	<div class="wrap">
    
    <div id="background">

    <header>
    <nav id="blue">
     <div class="Conteiner">
    	
		   	<a href="Untitled.php"><h1>Espace Coaching</h1></a>
		   	<ul>
		   	
		    	<li><a href="members_area/index.php" class="blue-right">Connexion</a></li>
				<li><a href="#" class="blue-right">Faq</a></li>
		   	</ul>
     </div>
    </nav>
    
    
    <nav id="black">
     
     
    <div class="Conteiner">
    	
    	 
	    <ul>
	    <!-- pour la recherche, le script qui marche est sur Recherche2.php -->
		    <li><a href="Recherche.php"><h2 id="trouver">Trouver un coach</h2></a></li>
			<li><img src="css/img/barre-header.png" alt="barre" /></li>
		    <li><a href="articles.php?categorie=boxe"><h2 id="conseil">Conseils de coach</h2></a></li>
		    <li><img src="css/img/barre-header.png" alt="barre" /></li>
		    <li><a href="#"><h2 id="coaching">Coaching en ligne</h2></a></li>   
	    </ul>
    	
    </div>
    
    <div id="black-background">
     <!-- -->
     </div>
    
    
    </nav>

    </header>		


    
    
    
   <!-- début recherche rapide -->
   
	
	
	<div class="Conteiner">     
	
    <section id="Recherche-Rapide">
		
	
	<article id="recherche">
	    <h3>Recherche Rapide</h3>
	    
	
	    
	    <p>Par département</p>
	    
        <form action="Résultats.php" method="get">
	    <div class="select">
		    <select name="dep">
                <option value="999"> Sélectionner une région</option>
				<option value="00">(00) Hors France</option>
				<option value="01">(01) Ain </option>
				<option value="02">(02) Aisne </option>
				<option value="03">(03) Allier </option>
				<option value="04">(04) Alpes de Haute Provence </option>
				<option value="05">(05) Hautes Alpes </option>
				<option value="06">(06) Alpes Maritimes </option>
				<option value="07">(07) Ardèche </option>
				<option value="08">(08) Ardennes </option>
				<option value="09">(09) Ariège </option>
				<option value="10">(10) Aube </option>
				<option value="11">(11) Aude </option>
				<option value="12">(12) Aveyron </option>
				<option value="13">(13) Bouches du Rhône </option>
				<option value="14">(14) Calvados </option>
				<option value="15">(15) Cantal </option>
				<option value="16">(16) Charente </option>
				<option value="17">(17) Charente Maritime </option>
				<option value="18">(18) Cher </option>
				<option value="19">(19) Corrèze </option>
				<option value="2A">(2A) Corse du Sud </option>
				<option value="2B">(2B) Haute-Corse </option>
				<option value="21">(21) Côte d'Or </option>
				<option value="22">(22) Côtes d'Armor </option>
				<option value="23">(23) Creuse </option>
				<option value="24">(24) Dordogne </option>
				<option value="25">(25) Doubs </option>
				<option value="26">(26) Drôme </option>
				<option value="27">(27) Eure </option>
				<option value="28">(28) Eure et Loir </option>
				<option value="29">(29) Finistère </option>
				<option value="30">(30) Gard </option>
				<option value="31">(31) Haute Garonne </option>
				<option value="32">(32) Gers </option>
				<option value="33">(33) Gironde </option>
				<option value="34">(34) Hérault </option>
				<option value="35">(35) Ille et Vilaine </option>
				<option value="36">(36) Indre </option>
				<option value="37">(37) Indre et Loire </option>
				<option value="38">(38) Isère </option>
				<option value="39">(39) Jura </option>
				<option value="40">(40) Landes </option>
				<option value="41">(41) Loir et Cher </option>
				<option value="42">(42) Loire </option>
				<option value="43">(43) Haute Loire </option>
				<option value="44">(44) Loire Atlantique </option>
				<option value="45">(45) Loiret </option>
				<option value="46">(46) Lot </option>
				<option value="47">(47) Lot et Garonne </option>
				<option value="48">(48) Lozère </option>
				<option value="49">(49) Maine et Loire </option>
				<option value="50">(50) Manche </option>
				<option value="51">(51) Marne </option>
				<option value="52">(52) Haute Marne </option>
				<option value="53">(53) Mayenne </option>
				<option value="54">(54) Meurthe et Moselle </option>
				<option value="55">(55) Meuse </option>
				<option value="56">(56) Morbihan </option>
				<option value="57">(57) Moselle </option>
				<option value="58">(58) Nièvre </option>
				<option value="59">(59) Nord </option>
				<option value="60">(60) Oise </option>
				<option value="61">(61) Orne </option>
				<option value="62">(62) Pas de Calais </option>
				<option value="63">(63) Puy de Dôme </option>
				<option value="64">(64) Pyrénées Atlantiques </option>
				<option value="65">(65) Hautes Pyrénées </option>
				<option value="66">(66) Pyrénées Orientales </option>
				<option value="67">(67) Bas Rhin </option>
				<option value="68">(68) Haut Rhin </option>
				<option value="69">(69) Rhône </option>
				<option value="70">(70) Haute Saône </option>
				<option value="71">(71) Saône et Loire </option>
				<option value="72">(72) Sarthe </option>
				<option value="73">(73) Savoie </option>
				<option value="74">(74) Haute Savoie </option>
				<option value="75">(75) Paris </option>
				<option value="76">(76) Seine Maritime </option>
				<option value="77">(77) Seine et Marne </option>
				<option value="78">(78) Yvelines </option>
				<option value="79">(79) Deux Sèvres </option>
				<option value="80">(80) Somme </option>
				<option value="81">(81) Tarn </option>
				<option value="82">(82) Tarn et Garonne </option>
				<option value="83">(83) Var </option>
				<option value="84">(84) Vaucluse </option>
				<option value="85">(85) Vendée </option>
				<option value="86">(86) Vienne </option>
				<option value="87">(87) Haute Vienne </option>
				<option value="88">(88) Vosges </option>
				<option value="89">(89) Yonne </option>
				<option value="90">(90) Territoire de Belfort </option>
				<option value="91">(91) Essonne </option>
				<option value="92">(92) Hauts de Seine </option>
				<option value="93">(93) Seine Saint Denis </option>
				<option value="94">(94) Val de Marne </option>
				<option value="95">(95) Val d'Oise </option>
				<option value="971">(971) Guadeloupe </option>
				<option value="972">(972) Martinique </option>
				<option value="973">(973) Guyane </option>
				<option value="974">(974) Réunion </option>
				<option value="975">(975) Saint Pierre et Miquelon </option>
				<option value="976">(976) Mayotte </option>
			</select> 
	    </div>  
	 <input id="chercher" type="submit" name="submit" value="Rechercher" />
    </form>
	<p>Par la carte</p>
    <div id="francemap" style="width: 390px; height: 293px; margin-left:55px;">
    	<!-- <img src="css/img/map.png" alt="France-Map" /> -->
    		 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		    <script src="js/jquery.vmap.js" type="text/javascript"></script>
		    <script src="js/jquery.vmap.france.js" type="text/javascript"></script>
			<script src="js/jquery.vmap.colorsFrance.js" type="text/javascript"></script>
	
    
	<script type="text/javascript">
	$(document).ready(function() {
		$('#francemap').vectorMap({
		    map: 'france_fr',
			hoverOpacity: 0.5,
			hoverColor: "#FAFAFA",
			backgroundColor: "rgba(0,0,0,0)",
			color: "#0aaddd",
			borderColor: "#000000",
			selectedColor: "#92D6EB",
			enableZoom: true,
			showTooltip: true,
		    onRegionClick: function(element, code, region)
		    {
		        var message = 'Région : "'
		            + region 
		            + '" || Id : "'
		            + code
					+ '"';
             
		        alert(message);
		    }
		});
	});
	</script>
    </div>
	<div id="background-recherche"></div>
    </article>
    <!-- fin recherche rapide -->

    <!-- début top coach -->
    <article id="topcoach">
	    <h3>Top Coach</h3>
	   
	    <ul>
		    <li>
			    <img src="css/img/portrait.png" alt="Portrait Coach" class="portrait"/>
			    <a href="Profil-coach.php">
			    <p>Vincent Martin</p>
			    </a>
			    <img src="css/img/stars.png" alt="Note" class="stars"/>
			    <p>Paris, île de France</p>
			    <p class="tag">Fitness, Musculation, Course à Pied</p>		       
		    </li>
		    <li><img class="barre" src="css/img/barre.png" alt="barre" />
		    <li>
			    <img src="css/img/portrait.png" alt="Portrait Coach" class="portrait"/>
			    <a href="#">
			    <p>Vincent Martin</p>
			    </a>
			    <img src="css/img/stars.png" alt="Note" class="stars"  />
			    <p>Paris, île de France</p>
			    <p class="tag">Fitness, Musculation, Course à Pied</p>		       
		    </li>
		     <li><img class="barre" src="css/img/barre.png" alt="barre" />
			<li>
			    <img src="css/img/portrait.png" alt="Portrait Coach" class="portrait" />
			    <a href="#">
			    <p>Vincent Martin</p>
			    </a>
			    <img src="css/img/stars.png" alt="Note" class="stars" />
			    <p>Paris, île de France</p>
			    <p class="tag">Fitness, Musculation, Course à Pied</p>		       
		    </li>

	    </ul>
	     <div id="background-coach"></div>
	    
    </article>
    <!-- fin top coach -->
    
    <!-- début top articles -->
    <article id="articles">
	    <h3>Top Article</h3>
		    <ul class="articles-top">
		    	<li>
		    	<a href="#">
		    	<p><span class="blue">Stretching -</span> Mieux gérer son entraînement</p>	
		    	</a>
		    	</li>
		    	
		    	<li>
		    	<a href="#">
		    	<p><span class="blue">Stretching -</span> Mieux gérer son entraînement</p>	
		    	</a>
		    	</li>
		    	
		    	<li>
		    	<a href="#">
		    	<p><span class="blue">Stretching -</span> Mieux gérer son entraînement</p>	
		    	</a>
		    	</li>	       
		    </ul>
		    <a href="articles.php">Voir autres articles</a>
		    <div id="background-article"></div>
    </article>
    <!-- fin top articles -->
	
	
	
    </section>
    </div>
    
    <!-- Débute annonce -->
    <article id="appel">
    <div class="Conteiner">
    <ul>
    <li>
    <h3><span class="blue">Vous</span> êtes Coach?</h3>
    <p>Profitez de <span class="blue">notre plateforme</span> pour mettre en avant gratuitement vos 	   compétence/votre savoir faire, et vous faire connaître !</p>
    </li>
    <li>
    <h3><span class="blue">Vous</span> cherchez un coach?</h3>
    <p>Trouvez le coach qui vous correspond près de chez vous gratuitement grâce à notre 				<span class="blue">outil de recherche </span></p>
    </li>
    </ul>
    </div>
    
    </article>
    <!-- fin annonce -->
    
    <!-- début espace photos -->
    <article id="photos-vidéos">
    <div class="Conteiner">
    
    <article id="Espace-photos">
    
    <h4>Espace Photos</h4>
    <ul>
	    <li>
	        <a href="#">
	    	<img src="css/img/espace-photo-1.png" alt="picture" />
	    	</a>
	    </li>
	    <li>
	        <a href="#">
	    	<img src="css/img/espace-photo-1.png" alt="picture" />
	    	</a>
	    </li>
	    <li>
	        <a href="#">
	    	<img src="css/img/espace-photo-1.png" alt="picture" />
	    	</a>
	    </li>
		<li>
	        <a href="#">
	    	<img src="css/img/espace-photo-1.png" alt="picture" />
	    	</a>
	    </li>
		<li>
	        <a href="#">
	    	<img src="css/img/espace-photo-1.png" alt="picture" />
	    	</a>
	    </li>
		<li>
	        <a href="#">
	    	<img src="css/img/espace-photo-1.png" alt="picture" />
	    	</a>
	    </li>
    </ul>
    
   <div class="liens">
   <a class="big" href="#"><span class="blue">Accéder aux photos</span></a>
   <ul class="liens-photos">
		    
		    <li><a href="#"><span class="blue">Perte de poids -</span> Transformation d'Isabelle</a></li>
		    <li><a href="#"><span class="blue">Prise de masse -</span> Les résultats de Didier</a></li>
		    <li><a href="#"><span class="blue">Course à pieds -</span> Le cross de Mouloud</a></li>
	    </ul>
   </div>

    </article>
    
 
    <!-- fin espace photos -->
    
    <!-- début espace vidéo -->
    <article id="Espace-vidéos">
	    <h4>Espace Vidéos</h4>
		    <video src="#"></video>
		    
		 <div class="liens">
			<a class="big" href="#"><span class="blue">Accéder aux vidéos</span></a>
			
		    <ul class="liens-photos">
			   
			    <li><a href="#"><span class="blue">Perte de poids -</span> Transformation d'Isabelle</a></li>
			    <li><a href="#"><span class="blue">Prise de masse -</span> Les résultats de Didier</a></li>
			    <li><a href="#"><span class="blue">Course à pieds -</span> Le cross de Mouloud</a></li>
		    </ul>
		    
		  </div>
	    
    </article>
   
    <!-- fin espace vidéo -->
    
 
    
    
    <div id="share">
   
    	<a href="#" id="facebook"><img src="css/img/fb.png" alt="lien facebook" /></a>
    	<a href="#" id="twitter"><img src="css/img/twitter.png" alt="lien facebook" /></a>
    	<a href="#" id="google"><img src="css/img/google.png" alt="lien facebook" /></a>
    
    <ul>
    	<li>
    	<a href="#">retourner en haut de page |</a></li>
    
    	<li>
    	<a href="#">s'inscrire</a></li>
    </ul>
    

    	
     </div>
    
    
   
    
    </div>
     <!-- fin conteiner -->
    </article>
     </div>
     <!-- fin background -->
     
    <!-- fin photos-vidéos -->
    <footer>
    <div class="Conteiner">
     <a href="#" >Plan du site</a>
     <a href="#" >Contact</a>
     <a href="mentions.php" >Mentions légales</a>
     <a href="#" >Conditions générales</a>
     <a href="#" >Partenaires</a>
     <a href="faq.php" >Vous êtes coach ?</a>
    </div>
    </footer>
    
    </div>
    </div>
    <!-- end of conteiner -->
    </body>
</html>