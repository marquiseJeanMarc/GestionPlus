<?php 
    require('message_erreur.php');
?>
<main >	
	<div class="formulaireAccueil">
		<fieldset class="fieldsetConnexion">
			<legend class="legendConnexion">Modifier votre profil:</legend>
			<form id="formConnexion" action="<?php echo WEBROOT ?>User/update" method="POST">
				<input type="text" name="nom" placeholder="Changer le nom" title="changer votre nom" value="<?php  echo $user->getLastName(); ?>">
					<div class="info" id="infoNom">
						<?php 
							if(isset ($log1)){
								echo $log1;
							}
						?>
					</div>
				<input type="text" name="prenom" placeholder="Changer le prénom" title="changer votre prénom" value="<?php  echo $user->getFirstName(); ?>">
					<div class="info" id="infoPrenom">
						<?php 
							if(isset ($log2)){
								echo $log2;
							}
						?>
					</div>
				<input type="text" name="email" placeholder="Changer votre adresse mail" title="changer votre email" value="<?php  echo $user->getEmail(); ?>">
					<div class="info" id="infoEmail">
						<?php 
							if(isset ($log3)){
								echo $log3;
							}
						?>
					</div>			
				<input type="password" id="passwordUn" name="pass1" placeholder="Entrez un nouveau de passe" title="changer votre mot de passe">
					<div class="info" id="infoPass1">
						<?php
					 		if(isset ($log4)){
								echo $log4;
							}
						?>
					</div>
				<input type="password" id="passwordDeux" name="pass2" placeholder="Confirmez votre nouveau mot de passe" title="confirmer votre mot de pase">
					<div class="info" id="infoPass2">
						<?php 
							if(isset ($log5)){
								echo $log5;
							}
						?>					
					</div> 		
				<input type="submit" class="push_button blue blueRedirection" value="Mettre à jour mon profil" title="bouton de validation">
              	<?php 
                	if(isset($log6))
				{
 					echo $log6; 
 				}
 				?>
			</form>
		</fieldset>
	</div>
	<a href="<?php echo WEBROOT ?>User/delete">Supprimer mon compte
	</a> 
</main>