
<main>	
<?php 
    require('message_erreur.php');
?>
	<div class="formulaireAccueil">
		<fieldset class="fieldsetConnexion">
			<legend class="legendConnexion">Vos coordonnées d'inscription:</legend>
			<form id="formConnexion" action="<?php echo WEBROOT ?>User/signIn" method="POST">
				<input type="text" id="inputNom" name="lastName" placeholder="Votre Nom" required="required" value="marquise">
					<div class="info" id="infoNom">
						<?php 
							if(isset ($log1)){
								echo $log1;
							}
						?>
					</div>
				<input type="text" id="inputPrenom" name="firstName" placeholder="Votre prénom" value="marc">
					<div class="info" id="infoPrenom">
						<?php 
							if(isset ($log2)){
								echo $log2;
							}
						?>
					</div>			
				<input type="email" id="inputEmail" name="email" placeholder="Votre email" value="marquisejean-marc@outlook.fr">
					<div class="info" id="infoEmail">
						<?php 
							if(isset ($log3)){
								echo $log3;
							}
						?>
					</div>			
				<input type="password" id="inputPass1" name="pass1" placeholder="Entrez un mot de passe">
					<div class="info" id="infoPass1">
						<?php
					 		if(isset ($log4)){
								echo $log4;
							}
						?>
					</div>				
				<input type="password" id="inputaPass2" name="pass2" placeholder="Confirmez votre mot de passe">
					<div class="info" id="infoPass2">
						<?php 
							if(isset ($log5)){
								echo $log5;
							}
						?>
					</div> 			
				<input type="submit" class="push_button blue blueRedirection" value="Valider l'inscription">
					<?php 
            			if(isset($log)){
							echo '<p id="pInscription">'.$log.'</p>'; 
						}
					?>
			</form>
		</fieldset>
		<?php 
		echo '<div id="blueRedirection">';
		echo '<a href="'.WEBROOT.'Accueil/accueil">Retour</a>';
		echo '</div>';
		?>
	</div>
</main>
		

