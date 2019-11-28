<main>	
	<div class="formulaireAccueil">
		<fieldset class="fieldsetConnexion">
			<legend class="legendConnexion">Formulaire de contact</legend>
			<form id="formConnexion" action="<?php echo WEBROOT ?>User/signIn" method="POST">
				<input type="text" name="lastName" placeholder="Nom" required="required">
				<input type="text" name="firstName" placeholder="Email">
				<input type="text" name="email" placeholder="Quel est l'objet de votre demande ? ">
				<textarea name="description_produit"  placeholder="Message"></textarea>
				<input type="submit" class="push_button blue blueRedirection ">
			</form>
		</fieldset>
	</div>
</main>