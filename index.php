<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php 
		// WEBROOT => dossier du projet de la racine serveur
			define('WEBROOT',str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
		// ROOT => dossier du projet de la racine du disque dur
			define('ROOT',str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
		?>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="<?php echo WEBROOT ?>css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fascinate&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<title>GESTION PLUS</title>
	</head>
	<body>
		<?php
		if (isset($_SESSION['id'])){
			?>
			<header>
				<h1>PLUS</h1>
				<div id="icones">
					<p class="image">
						<a href="<?php echo WEBROOT ?>Accueil/TableauDesProduits"><img src="<?php echo WEBROOT ?>img/détaillée-64.png" alt="icone du tableau des produits"></a>
					</p>
					<p class="image">
						<a href="<?php echo WEBROOT ?>Accueil/categorie"><img src="<?php echo WEBROOT ?>img/ajouter-au-panier-64.png" alt="icone ajouter un produit"></a>
					</p>
					<p class="image">
						<a href="<?php echo WEBROOT ?>Accueil/contact"><img src="<?php echo WEBROOT ?>img/iconcontact.png" alt="icone de contact"></a>
					</p>
					<p class="image">
						<a href="<?php echo WEBROOT ?>Accueil/profil/"><img src="<?php echo WEBROOT ?>img/iconuser.png" alt="icone utilisateur"></a>
					</p>
				</div>
				<div id="iconesDroite">				
					<a href="<?php echo WEBROOT ?>User/logOut"><img src="<?php echo WEBROOT ?>img/icondeconnexion.png" alt="icone déconnexion"></a>					
					<img id="imgElephant" src="<?php echo WEBROOT ?>img/man.png" alt="photo avatar">
					<?php
					echo '<p>Bonjour'.' '.$_SESSION['prenom'].'</p>';
					?>
				</div>
			</header>
			<aside>
				<div id="blockGestion">
					<p>GESTION</p>
				</div>
				<div id="espace">
					<p>descriptif du produit</p>
					<img src="<?php echo WEBROOT ?>img/POINT_INTERROGATION.jpg" alt="un point d'interrogation">
				</div>
				<div id="tableauDeBort_aside">
					<h3>TABLEAU DIAGNOSTIC</h3>
					<div id="inputSupprime">
						<input type="checkbox" class="supprimer" name="suppprimes" title="case supprimer">
						<label id="supp">supprimer</label>
					</div>
					<div class="border"></div>
					<div id="champsDéroulant">
						<div class="inputChampsDéroulant">
							<input type="checkbox" class="supprimer" name="suppprimes" title="case sélectionner ">
							<label class="inputAside">dr martens</label>
						</div>
						<div class="inputChampsDéroulant">
							<input type="checkbox" class="supprimer" name="suppprimes" title="case sélectionner">
							<label class="inputAside">vans</label>
						</div>
						<div class="inputChampsDéroulant">
							<input type="checkbox" class="supprimer" name="suppprimes" title="case sélectionner">
							<label class="inputAside">lacets oxford</label>
						</div>
						<div class="inputChampsDéroulant">
							<input type="checkbox" class="supprimer" name="suppprimes" title="case sélectionner">
							<label class="inputAside">basket zoom 2k</label>
						</div>
					</div>
				</div>
			</aside>
			<footer>
				<p>Formation Developpeur Web et Web Mobile Niveau III | Marquise Jean-Marc &copy; Nouas Sete 2019</p>
			</footer>
	
	<?php } ?> 	
			<?php
			// ----------- INIT 1 : creation du routage ----------- //
			// Charge le core de l'appli
			require_once('vue/User/message_erreur.php');
			require_once('core/bdd.php');
			require_once('core/controller.php');
			require_once('core/abstractEntity.php');
			// Gestion du routage pour afficher la page par default
			if (isset($_GET['p'])){
				if ($_GET['p'] == ""){
					$_GET['p'] = "Accueil/index";
				}
			} 
			else{
				$_GET['p'] = "Accueil/index";
			}
			// Chargement du controleur
			// $tabControlleur est le tableau contenant tout les nom de controlleurs accepté par l'appli
			$tabController = array("Accueil","Categorie","Entreprise","Produit","TableauDesProduits","TypeCategorie","User");
			$param = explode("/",$_GET['p']);
			// Si le nom de controlleur venant de l'url est dans le $tabControlleur
			if (in_array($param[0], $tabController)){
				$controller = $param[0];
				if (isset($param[1])){
					$action = $param[1];
				} 
				else{
					$action = 'index';
				}
				require_once('controlleur/'.$controller.'.ctrl.php');
				$controller = 'Ctrl'.$controller;
				$controller = new $controller();
				// Execution de l'action du controleur avec les paramètres supplementaire si existant
				// Si action non présente dans le controleur, alors page 404
				if (method_exists($controller,$action)){
					// On enlève les indices 0 et 1 du tableau $param
					unset($param[0]);
					unset($param[1]);
					// Ont execute $action de $controller avec $param en paramètre
					call_user_func_array(array($controller,$action), $param);
					// Sinon $action non présente dans $controller
				} 
				else{
					echo 'erreur 404';
				}
		    } else{
					echo 'erreur 404';
				}
		?>		
		<script src="<?php echo WEBROOT ?>js/script.js"></script>
		<script src="<?php echo WEBROOT ?>js/application.js"></script>
		<script src="<?php echo WEBROOT ?>js/scriptEntreprise.js"></script>
		<script> var url = "<?php echo $_SESSION['url']?>";</script>
		<script>window.onload = changeUrl(url);</script>
		<script src="https://kit.fontawesome.com/23b1799503.js" crossorigin="anonymous"></script>
	</body>
</html>                               