<?php ?>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Espace Coaching Résultats</title>
  <link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/layout.css">
		<link rel="stylesheet" href="css/skeleton.css"> 
    <style>
    /* essai etoile */
ul.notes-echelle {
	margin:0;
	padding:0;
	font:.75em/1.2 Arial, Helvetica, sans-serif;
}
ul.notes-echelle li {
	float:left;
	margin:0;
	padding:0;
	list-style:none;
	min-width:20px;
	min-height:20px;
}
/* Correctif IE6 sur min-width & min-height */
* html ul.notes-echelle.js li {
	width:20px;
	height:20px;
}
ul.notes-echelle li label {
	display:block;
	text-align:center;
	line-height:20px;
	background:url(etoiles.gif) center top no-repeat;
	cursor:pointer;
}
        ul.notes-echelle li.note-off label {
	background-position:center -60px;
}
        /* Effet lorsque une note est cochée */
 ul.notes-echelle li.note-checked {
	font-weight:bold;
}
/* Effet lorsque une note est tabulée au clavier */
 ul.notes-echelle.js li.note-focus {
	outline:1px dotted #000;
}
        
    ul.notes-echelle.js input {
	position:absolute;
	left:-999%;
}
 

    </style>
</head>
<script>
    $("ul.notes-echelle input")
	// Lorsque le focus est sur un bouton radio
	.focus(function() {
		// On supprime les classes de focus
		$(this).parents("ul.notes-echelle").find("li").removeClass("note-focus");
		// On applique la classe de focus sur l'item tabulé
		$(this).parent("li").addClass("note-focus");
		// [...] cf. code précédent
	})
	// Lorsque l'on sort du sytème de notation au clavier
	.blur(function() {
		// On supprime les classes de focus
		$(this).parents("ul.notes-echelle").find("li").removeClass("note-focus");
		// [...] cf. code précédent
	})
	// Lorsque la note est cochée
	.click(function() {
		// On supprime les classes de note cochée
		$(this).parents("ul.notes-echelle").find("li").removeClass("note-checked");
		// On applique la classe de note cochée sur l'item choisi
		$(this).parent("li").addClass("note-checked");
	});
    
    // On simule un survol souris des boutons cochés par défaut
$("ul.notes-echelle input:checked").parent("li").trigger("mouseover");
// On simule un click souris des boutons cochés
$("ul.notes-echelle input:checked").trigger("click");
    
    </script>
<body>

<div class="main">

<div class="wrap">    

<ul class="notes-echelle">
	<li>
		<label for="note01" title="Note&nbsp;: 1 sur 5">1</label>
		<input type="radio" name="notesA" id="note01" value="1" />
	</li>
	<li>
		<label for="note02" title="Note&nbsp;: 2 sur 5">2</label>
		<input type="radio" name="notesA" id="note02" value="2" />
	</li>
	<li>
		<label for="note03" title="Note&nbsp;: 3 sur 5">3</label>
		<input type="radio" name="notesA" id="note03" value="3" />
	</li>
    <li>
		<label for="note04" title="Note&nbsp;: 4 sur 5">4</label>
		<input type="radio" name="notesA" id="note04" valu e="4" />
	</li>
    <li>
		<label for="note05" title="Note&nbsp;: 5 sur 5">5</label>
		<input type="radio" name="notesA" id="note05" value="5" />
	</li>
</ul>
</div>
</div>
</body>