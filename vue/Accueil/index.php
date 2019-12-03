<main>
	<div class="formulaireAccueil">
		<div id="btInscription">
			<?php
			echo '<p id="pInscription">Découvrez un site qui calcule la rentabilité <br/>
			d\'un produit.<br/>
			Pas encore inscrit! créez votre profil<br/>
			pour retrouver votre interface et vos produits</p>';
			echo '<a class="push_button blue" href="'.WEBROOT.'User/userInscription">Inscription</a>';
			?>
		</div>
		<fieldset class="fieldsetConnexion">
			<legend class="legendConnexion">Vos coordonnées de connexion:</legend>
			<form id="formConnexion" action="<?php echo WEBROOT ?>User/login" method="POST">
				<input type="email" name="email" placeholder="Email" title="votre email">
				
				<div class="info" id="infoPass1"></div>
				<input type="password" name="pass1" placeholder="Mot de passe"  title="votre mot de passe">
				<?php 
					if(isset($log))
					{
						echo '<p id="pInscription">'.$log.'</p>'; 
					}
				?>
				<input type="submit" class="push_button blue" value="Se connecter">
			</form>
		</fieldset>
	</div>
</main>


  

