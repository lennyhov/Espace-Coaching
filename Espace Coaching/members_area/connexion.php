<?php
include('../db.inc.php');
session_start();
?>
<!DOCTYPE html PUBLIC>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <link rel="stylesheet" href="../css/base.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/layout.css">
		<link rel="stylesheet" href="../css/skeleton.css">
        <title>Connexion</title>
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
    	
<div id="main">
<div id="wrap">
<div id="back">

        <div class="content">	

       
			<div class="Conteiner">


				<section id="inscription">

					<div class="inscription">
						<?php
//If the user is logged, we log him out
if(isset($_SESSION['username']))
{
	//We log him out by deleting the username and userid sessions
	unset($_SESSION['username'], $_SESSION['userid']);
?>
<div class="message">Vous êtes maintenant déconnecté. À bientôt !<br />
<a href="index.php">Home</a></div>
<?php
}
else
{
	$ousername = '';
	//We check if the form has been sent
	if(isset($_POST['username'], $_POST['password']))
	{
		//We remove slashes depending on the configuration
		if(get_magic_quotes_gpc())
		{
			$ousername = stripslashes($_POST['username']);
			$username = mysql_real_escape_string(stripslashes($_POST['username']));
			$password = stripslashes($_POST['password']);
		}
		else
		{
			$username = mysql_real_escape_string($_POST['username']);
			$password = $_POST['password'];
		}
		//We get the password of the user
		$req = mysql_query('select password,id, type_user from users where username="'.$username.'"');
		$dn = mysql_fetch_array($req);
            
		//We compare the submited password and the real one, and we check if the user exists
		if($dn['password']==$password and mysql_num_rows($req)>0)
		{
			//If the password is good, we dont show the form
			$form = false;
			//We save the user name in the session username and the user Id in the session userid
			$_SESSION['username'] = $_POST['username'];
            $_SESSION['type_user'] = $dn['type_user'];
			$_SESSION['userid'] = $dn['id'];
         
?>
<div class="message">Vous êtes maintenant connecté à l'espace membre.<br />
<a href="index.php">Home</a></div>
<?php
		}
		else
		{
			//Otherwise, we say the password is incorrect.
			$form = true;
			$message = 'Identifiant ou mot de passe incorrect';
		}
	}
	else
	{
		$form = true;
	}
	if($form)
	{
		//We display a message if necessary
	if(isset($message))
	{
		echo '<div class="message">'.$message.'</div>';
	}
	//We display the form
?>

    <form action="connexion.php" method="post">
    
        <div class="center">
            <label for="username">Pseudo</label><input type="text" name="username" id="username" value="<?php echo htmlentities($ousername, ENT_QUOTES, 'UTF-8'); ?>" /><br />
            <label for="password">Mot de passe</label><input type="password" name="password" id="password" /><br />
            <input style="background-color: #0aaddd;
border: none;
color: white;
height: 30px;
margin-left: 150px;
margin-top: 20px;
font-size:1em;" type="submit" value="Connexion" />

		</div>
    </form>

    					
					</div>


			</div>
			<div class="foot"><a href="index.php">Retour à l'accueil</a> - <a href="login.php">Problème de connexion ?</a></div>
			</div>
<?php
	}
}
?>
	</div>
	</div>
	</div>	
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
	</body>
</html>