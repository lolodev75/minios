<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8 is-ie-7" lang="fr"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9 is-ie8" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr"> <!--<![endif]-->
<head>
		<title>Minios</title>
		<meta charset="UTF-8" />
</head>
<body>
<form id="contact" method="post" action="traitement_formulaire.php">
	<fieldset><legend>Vos coordonnées</legend>
		<p><label for="nom">Nom :</label>
			<input type="text" id="nom" name="nom" tabindex="1" /></p>
		<p><label for="prenom">Prénom :</label>
			<input type="text" id="prennom" name="prenom" tabindex="1" /></p>
		<p><label for="email">Email :</label>
			<input type="text" id="email" name="email" tabindex="2" /></p>
	</fieldset>
 
	<fieldset><legend>Votre message :</legend>
		<p><label for="objet">Objet :</label>
			<input type="text" id="objet" name="objet" tabindex="3" /></p>
		<p><label for="message">Message :</label>
			<textarea id="message" name="message" tabindex="4" cols="30" rows="8"></textarea></p>
	</fieldset>
 
	<div style="text-align:center;">
		<input type="submit" name="envoi" value="Envoyer le formulaire !" />
                <? php mail_to loic.seguin.selectra@gmail.com ?>
	</div>
</form>
</body>
</html>