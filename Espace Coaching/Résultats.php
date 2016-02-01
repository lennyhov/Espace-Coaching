<?php 
include "func.inc.php";
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Espace Coaching Résultats</title>
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
			    <a href="Recherche.php">Coachs</a>
		     </div>
		     
		    </nav>
	</header>
    
    <!-- début recherche -->
    <section id="nouvelle-recherche">
   	 <div class="Conteiner">
	    <p>Nouvelle recherche</p>
         <form method="get" action="Résultats.php">
        <input type="hidden" name="recherche" value="departement" />
        <input type="hidden" name="cpage" value="1" />
	    <select name="dep1">
        <option value="999"> Sélectionner le departement</option>
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
		<select name="dep2">
        <option value="999"> Sélectionner le departement</option>
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
		<select name="dep3">
        <option value="999"> Sélectionner le departement</option>
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
    </section>
    <!-- fin recherche -->
    
    <!-- début résultats -->
  
    
    <!-- coup d'oeil sur -->
		 
		<?php
            $perPage=6;

    
        if($_GET['recherche']=="nom"){
                if($_GET['cpage']==1){
                 $reponsetop= search_by_name_top($_GET['requete']); 
                 $reponse = research($_GET['requete'], 2,3);
                } else{
                $reponse = research($_GET['requete'], $_GET['cpage'], $perPage); 
                }
            $nb = mysql_fetch_assoc(count_by_name($_GET['requete']));
            $nb_resultats= $nb['nbResult'];
            }

        else if($_GET['recherche']=="departement"){
            if($_GET['cpage']==1){
                 $reponsetop= search_departement_top($_GET['dep1'],$_GET['dep2'],$_GET['dep3']);
                 $reponse=search_departement($_GET['dep1'],$_GET['dep2'],$_GET['dep3'], 2, 3);
            }
            else{
            $reponse = search_departement($_GET['dep1'],$_GET['dep2'],$_GET['dep3'], $_GET['cpage'], $perPage); 
            }
            $nb= mysql_fetch_assoc(count_by_departement($_GET['dep1'],$_GET['dep2'],$_GET['dep3']));
            $nb_resultats= $nb['nbResult'];
            }
            $nbPage = ceil(($nb_resultats)/$perPage);
            $nb_coach = mysql_num_rows(mysql_query("SELECT * FROM users"));
            // Verification de ce que la fonction research retourne
            if($_GET['cpage']==1 && $reponse=="NoResult" &&$reponsetop=="NoResult"){
                echo "Aucun résultat correspondant à votre recherche";
            }
            else if($_GET['cpage']&& $reponse==false &&$reponsetop==false){
             echo "Mauvais argument envoyé";    
            }
            else{
            ?>
          <p class="Conteiner" id="nombre"><span class="blue">> 
              <?php if(isset($nb_resultats)){
            echo $nb_resultats;?> coachs sur <?php echo $nb_coach;?></span> ont été trouvés</p>   
        <?php }?>

              <section id="résultats">
                          <?php 

                if($_GET['cpage']==1){
                    
                ?>
                      <article id="coup-doeil">
	    <div class="Conteiner">
            <?php while($row = mysql_fetch_array($reponsetop)){
                    $photo = mysql_fetch_array(get_profil_picture($row['id']));
                    ?>
		    <li>
		    <div class="coach-resultat">
		    <img class="barre-2" src="css/img/barre-résultats.png" alt="barre" />

		    	<div class="infos">
		    	
							    
			    <!-- visuel -->
			    <img src="<?php if(isset($photo)){
                     echo $photo['path'];   
                    }
                    else{
                        echo "css/img/profil-2.png";} ?>" alt="coach-pic" />
			    <!-- infos -->
				    <a class="name" href="Profil-coach.php?id=<?php echo $row['id'];?>">
					<?php echo $row['username']; ?>
				    </a>
				    <p><?php echo $row['adresse'].' '.$rows['departement'];?></p>
				    <img class="stars-2" src="css/img/stars-coach-2.png" alt="étoiles" />
				    <!-- liens un par un -->
				    <a class="tags" href="#"><?php echo $row['specialite1'];?></a> <a class="tags" href="#"><?php echo $row['specialite2'];?></a> <a class="tags" href="#"><?php echo $row['specialite3'];?></a>
				    <!-- boutton -->
		    	</div>
				    <a href="Profil-coach.html" class="bouton-bleu">Voir le profil</a>
		    </div>  
		    </li>    
        
            <?php }?>
    </div>
	    
	    </article> <?php 
                    } ?>                
                   <article id="second-résultats">
	    <div class="Conteiner">
            <?php while($row = mysql_fetch_array($reponse)){?>
	       <ul>
		    <li>
		    <div class="coach-resultat">
				<img class="barre-2" src="css/img/barre-résultats.png" alt="barre" />
				<div class="infos">
			    
			    <!-- visuel -->
			    <img src="css/img/profil-2.png" alt="coach-pic" />
			    <!-- infos -->
				    <a class="name" href="<?php echo $row['id'];?>">
				    <?php echo $row['username'];?>
				    </a>
				    <p><?php echo $row['adresse'].' '.$row['departement'];?></p>
				    <img class="stars-2" src="css/img/stars-coach-2.png" alt="étoiles" />
				    <!-- liens un par un -->
				    <a class="tags" href="#">Fitness</a> <a class="tags" href="#">musculation</a> <a class="tags" href="#">course à pied</a></div>
				    <!-- boutton -->
				    <a href="#" class="bouton-bleu">Voir le profil</a>
		    </div>  
		    </li>
               </ul>
            <?php }?>
            </div>
                </article>
                  </section>
    <?php 
            } ?>
        
    
    <article id="pré-footer">
	  <div class="Conteiner">
	  <ul>
          <?php
            if($nbPage>1){
          for($i=1; $i<=$nbPage; $i++){
              if($_GET['recherche']=="departement"){
              echo  "<li><a class='page' href='Résultats.php?recherche=departement&cpage=$i&dep1=".$_GET['dep1']."&dep2=".$_GET['dep2']."&dep3=".$_GET['dep3']."'>$i</a>/</li>";
              }
              else if($_GET['recherche']=="nom"){
                echo  "<li><a class='page' href='Résultats.php?recherche=nom&cpage=$i&requete=".$_GET['requete']."'>$i</a>/</li>";  
              }
              else{
               break;   
              }
          }
            }
          ?>
	  </ul>

	    <a style="margin-left:334px; margin-bottom:50px;" href="#">Nouvelle recherche |</a>
	    <a href="#">Retour à l'accueil</a>
	    
	  </div>
	  </article>		    
	    

    <!-- fin résultats -->
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