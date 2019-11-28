<main>
	<div class="formulaireAccueil">
		<fieldset class="fieldsetConnexion">
			<legend id="legendConnexion">En se qui concerne l'entreprise:</legend>
			<form id="formConnexion" action="<?php echo WEBROOT ?>Entreprise/signIn" method="POST">
	            <div class="info" id="infoNom">
				</div>

				<input type="text" name="nomEntreprise" placeholder="Nom de l'entreprise" required="required" value="Meuble">
				<div class="info" id="infoAdresse">
			    </div>

				<input type="text" name="adresse" placeholder="l'adresse" required="required" value="2 Rue Maurice en cour">
				<div class="info" id="infoTel">
			 	</div>

				<input type="tel" name="tel" placeholder="Le téléphone" value="06 06 06 06 06">
				<div class="info" id="infoStattut">
			    </div>

				<input type="text" name="statut" placeholder="Le statut de l'entreprise" value="micro entreprise">
				
				<input type="submit" class="push_button blue" id="blue" value="Valider">
			</form>
		</fieldset>
			<?php 
				echo '<div id="blueRedirection">';
					echo '<a class="push_button blue" href="'.WEBROOT.'Accueil/inscription">Inscription</a>';
				echo '</div>';
			?>
	</div>
</main>

