<?php
include('config.php');
include 'function_users.php';
include 'function_image.php';
    
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="../css/base.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/layout.css">
		<link rel="stylesheet" href="../css/skeleton.css">

        
        <title>Sign up</title>
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
<?php
        $form=true;
       if(isset($_POST['username'],$_POST['password'],$_POST['passverif'], $_POST['nom'], $_POST['email'])) {
      $info = verification_insert_info($_POST['username'] ,$_POST['prenom'],$_POST['nom'],$_POST['password'], $_POST['passverif'], $_POST['telephone'], $_POST['adresse'], $_POST['ville'], $_POST['departement'], $_POST['code_postal'], $_POST['specialite1'], $_POST['specialite2'], $_POST['specialite3'],$_POST['website'], $_POST['description'], $_POST['citation'], $_POST['auteur'], $_POST['email'], $_POST['avatar']);
        if(is_string($info)){
        echo $info;
        $form = true;
        }
        else{
         $form =false;
            
    if((empty($_FILES['photo']))==false){
        $img = $_FILES['photo'];
        $dossier = "media_users/photos_users_".$info;
        $droits = 0755;
        //Verification dossier photo et insertion de la photo dans le dossier
       if(is_dir($dossier)== false){
        mkdir($dossier, $droits, true);
        }
        if(insert_img($img, $dossier, $_POST['MAX_SIZE_PHOTO'], $info, "profil")){        
            echo "image Uploader"; 
        }
        else{
            echo "img pas upload";
            $form =true;
        }
         if(!empty($_FILES['cover'])){
        $img = $_FILES['cover'];
        $dossier = "media_users/photos_users_".$info;
        $droits = 0755;
        //Verification dossier photo et insertion de la photo dans le dossier
       if(is_dir($dossier)== false){
        mkdir($dossier, $droits, true);
        }
        if(insert_img($img, $dossier, $_POST['MAX_SIZE_PHOTO'], $info, "cover")){        
            echo "image Uploader"; 
        }
        else{
            echo "img pas upload";
        } 
    }
        
    }else{
       echo "on est pas dedans"; 
    }
        }
       }

        ?>
<div class="main">

<div class="wrap">

	<div class="Conteiner">
		<section id="inscription">
			<div class="inscription">
	<?php if($form){?>
    <form action="sign_up.php" method="post" enctype="multipart/form-data">
        <p style="text-transform: uppercase; font-family:HelveticaNeue, CalibriRegular, Gill Sans; margin-bottom: 40px;">Veuillez remplir le formulaire ci-dessous pour vous inscrire : <br />
        <div class="center">
            <label for="username">Pseudo</label><input type="text" name="username" value="<?php if(isset($_POST['username'])){echo htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            
            <label for="prenom">Prenom</label><input type="text" name="prenom" value="<?php if(isset($_POST['prenom'])){echo htmlentities($_POST['prenom'], ENT_QUOTES, 'UTF-8');} ?>" required /><br />
            
            <label for="nom">Nom</label><input type="text" name="nom" id="nom" required /><br />
            
            <label for="password">Mot de passe    <span class="small">(6 characters min.)</span></label><input type="password" name="password" /><br />
            
            <label for="passverif">Mot de passe    <span class="small">(verification)</span></label><input type="password" name="passverif" /><br />
            
            <label for="email">Email</label><input type="text" name="email" value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');} ?>" required /><br />

            <label for="adresse">Adresse</label><input type="text" name="adresse" value="<?php if(isset($_POST['adresse'])){echo htmlentities($_POST['adresse'], ENT_QUOTES, 'UTF-8');} ?>" /><br />

            <label for="ville">Ville</label><input type="text" name="ville" value="<?php if(isset($_POST['ville'])){echo htmlentities($_POST['ville'], ENT_QUOTES, 'UTF-8');} ?>" /><br />

            <label for="code_postal">Code Postal</label><input type="text" name="code_postal" value="<?php if(isset($_POST['code_postal'])){echo htmlentities($_POST['code_postal'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            


            <label for="departement">Département</label><select name="departement">
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
<br />
            
			<label for="téléphone">Téléphone</label><input type="tel" name="téléphone" id="téléphone" required/><br />
			
            <label for="specialite1">Specialite 1 </label>
            <input type="text" name="specialite1" value="<?php echo $_POST['specialite1']; ?>"/><br />
            <label for="specialite2">Specialite 2 </label>
            <input type="text" name="specialite2" value="<?php echo $_POST['specialite2']; ?>"/><br />
            <label for="specialite3">Specialite 3 </label>
            <input type="text" name="specialite3" value="<?php echo $_POST['specialite3']; ?>"/><br />
             <label for="Website"> Site Web </label>
            <input type="text" name="website" value="<?php echo $_POST['website']; ?>"/><br />
            <label for="description">Description de vous-même</label>
            <textarea name="description" rows="8" cols="45">
		    </textarea><br />
		   
		    <label for="citation">Citation Préférée</label>
		    <input type="text" name="citation" id="auteur" value="<?php echo $_POST['citation']; ?>" /><br />
		    
		    <label for="auteur">Auteur de la citation</label>
		    <input type="text" name="auteur" id="auteur" value="<?php echo $_POST['auteur']; ?>" /><br />
            <label for="photo">Photo de profil</label>
            <input type="hidden" name="MAX_SIZE_PHOTO" value="1000000"; />
            <input type="file" name="photo" /> <br />
            <label for="cover">Photo de profil</label>
            <input type="file" name="cover" /> <br />
            <!--<input type="submit" value="Send" />-->
            <input style="position:relative; left:17%; background-color: #0aaddd;
border: none;
color: white;
height: 30px;

margin-top: 20px;
font-size:1em;" type="submit" value="S'inscrire" />
            
		</div>
    </form>
    <?php } else{
                echo "Vous êtes bien inscrit sur le site </br> <a href='connexion.php'>Connectez vous</a>";
                }?>
    
</div>
<!-- fin inscription -->
    </section>
    
</div>
<!-- fin conteiner -->

<div class="foot"><a href="../index.php">Retour à l'accueil</a> - <a href="login.php">Je suis déjà inscrit</a></div>

<!-- fin back -->


</div>
<!-- fin wrap -->
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
<!-- fin main -->


		
		

	</body>

</html>