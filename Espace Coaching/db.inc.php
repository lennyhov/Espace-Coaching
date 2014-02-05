<?php
include 'var_serveur.php';
mysql_connect($_SESSION['serveur'], $_SESSION['serveur_user'], $_SESSION['serveur_mdp']);
mysql_select_db('Espace_Coaching_Connexion');


?>