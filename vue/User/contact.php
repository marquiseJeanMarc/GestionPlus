<main>	
	<div class="formulaireAccueil">
		<fieldset class="fieldsetConnexion">
			<legend class="legendConnexion">Formulaire de contact</legend>
			<form id="formConnexion" action="<?php echo WEBROOT ?>User/signIn" method="POST">
				<input type="text" name="lastName" placeholder="Nom" required="required" title="entrez votre nom">
				<input type="text" name="firstName" placeholder="Email" title="entrez votre email">
				<input type="text" name="email" placeholder="Quel est l'objet de votre demande ? " title="entrez l'objet de votre demande">
				<textarea name="description_produit" placeholder="Message" ></textarea>
				<input type="submit" class="push_button blue blueRedirection" title="botton de validation">
			</form>
		</fieldset>
	</div>
</main>