<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">

<form id="contact" method="post" action="<?php echo $path('contactSubmit')?>">
	<fieldset><legend>Vos coordonnées</legend>
		<p><label for="nom">Nom :</label>
			<input type="text" id="nom" name="nom" tabindex="1" /></p>
		<p><label for="prenom">Prénom :</label>
			<input type="text" id="prenom" name="prenom" tabindex="1" /></p>
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
                 
	</div>
</form>
        
<?php include __DIR__ . '/../bottom.php'; ?>
