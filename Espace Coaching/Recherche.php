<!DOCTYPE html>
<?php include 'func.inc.php' ?>
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
	
	if (isset($_POST['recherche']) || isset($_POST['dep1'])|| isset($_POST['dep2'])|| isset($_POST['dep3'])) {
		$recherche = mysql_real_escape_string(htmlentities(trim($_POST['recherche'])));
	}
	
	$erreur = array();
	
	if ( empty($recherche) ) {
		$erreur[] = 'Entrez un mot-clé';
		
	} else if (strlen($recherche) < 2) {
		
		$erreur[] = 'Entrez au moins deux caractères';
		
	} else if (1==2) {
		
		$erreur[] = ' Votre recherche de ' .$recherche. ' n\'a retourné aucun résultat ';
	}
	
	
	if (empty($erreur)) {
		search_results($recherche, $_POST['dep1'], $_POST['dep2'], $_POST['dep3']);
	} else {
		foreach( $errors as $error ) {
			echo $error, '</br>';
		}
	}
	
	
	
	
	?>
	
   
 
    <section id="barre">
    
	    <article id="barre-recherche">
	     <div class="Conteiner">
	     
		    <p><span class="blue-2">Recherchez</span> par mot-clé</p>
		    
		    <form action="Résultats.php" method="GET">
                <input type="hidden" name="recherche" value="nom" />
                <input type="hidden" name="cpage" value="1" />
				<input type="text" name="requete" size="50" style="height:40px; font-size:1.2em; width: 523px; margin-right:24px; vertical-align: middle; ">
				<input type="submit" value="Rechercher" style="height: 45px; font-size: 1.2em; width: 140px; color: white; font-family: Calibri, Myriad Pro; background-color: #0798c2; border:none; vertical-align: middle;">
			</form>
	     </div>
		</article>
		
    </section>
	

	
	<section id="cliquable">
	
	
	
		<article id="map">
		 <div class="Conteiner">
			<p>Recherche par la carte</p>
			    <div id="francemap" style="width: 390px; height: 301px; margin-top:69px;">
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
			hoverColor: "#EC0000",
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
	</script>    </div>
		 </div>
		</article>
	
		<article id="selecteurs">
		
			<p>Choisir un département</p>
			<div id="select-background">
			<p>Région</p>
                <form method="GET" action="Résultats.php?recherche=departement&cpage=1" >
                    <input type="hidden" name="recherche" value="departement" />
                    <input type="hidden" name="cpage" value="1" />
			<select name="dep1">
                <option value="999">Selectionner un departement</option>
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
			<p>Départements</p>
			<select name="dep2" value="999">
                <option value="999">Selectionner un departement</option>
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
			<p>Ville</p>
			<select name="dep3" value="999">
                <option value="999">Selectionner un departement</option>
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
			
			  
			 <input type="submit" name="submit" value="Rechercher" />        
                    
            </form>
			</div>
		
		</article>
	
	</section>
 

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
		</
    
    </body>
</html>