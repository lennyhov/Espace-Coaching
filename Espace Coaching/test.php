<?php 
//include 'bdd.php';
include 'vote.php';
?>

<!DOCTYPE html>

<html lang="fr">

<head>
		<meta charset="utf-8">
		<title>Profil Coach</title>
		 <link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/layout.css">
		<link rel="stylesheet" href="css/skeleton.css">
    <script TYPE="text/javascript" SRC="/js/jquery-1.6.min.js"></script>
<script TYPE="text/javascript" SRC="/js/rating/jquery.MetaData.js"></script>
<script TYPE="text/javascript" SRC="/js/rating/jquery.rating.js"></script>
<script TYPE="text/javascript" SRC="/js/jquery.form.js"></script> 
<link HREF="/js/rating/jquery.rating.css" REL="stylesheet" TYPE="text/css">

<script TYPE="text/javascript" >
$('document').ready(function () {
    envoi = true;
    $('input.vote').rating({
    callback: function(value,link) {
            if (envoi) {
                envoi = false;
                $(this.form).ajaxSubmit({
                    dataType:'json',
                    success: function(rep) {
                        var note = rep.note;
                        var nombre = rep.nombre;
                        $('input.vote').rating('select', note);
                        $("#nombre").html(nombre);
                        $('input.vote').rating('disable');
                    }
                });
            }
        }
    });
});
</script>
 
</head>
	
<body>
	<div class="main">
        <?php 
            if(!isset($_POST['mail'])){
        ?>
        <form action="test.php" method="post" >
        <input type="text" name="mail" /> <br />
        <input type="hidden" name="object_id" value="18"/>
        <input type="hidden" name="type" value="1"/> 
	    <input type="button" name="note" value="1" />
        <input type="submit" name="Validation" />
        </form>
        <?php
        }
        else{
            setVote($_POST['object_id'], $_POST['note'],$_POST['mail'], $_POST['type']);
        }
        ?>
    </div>
</body>
</html>
