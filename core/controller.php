<?php 
// ----------- INIT 2 : creation du super Controleur ----------- //
class Controller {
	public $input;
	public $files;
	var $vars = array();

	public function __construct() {
		if (isset($_POST)) {
			$this->input = $_POST;

		}
		if (isset($_FILES)) {
			$this->files = $_FILES;
		}
	}

	function loadDao($name) {
		require_once('dao/'.$name.'.dao.php');
		$daoClass = 'Dao'.$name;
		$this->$name = new $daoClass();
	}

	function set($d) {
	//array_marge sa sére a fusionné un tableau qui va se retrouvé dans la variable $var a la 6 ligne
		$this->vars = array_merge($this->vars, $d);
	}

	// Méthode pour charger une vue
	// function render($controller, $filename) {
	// 		extract($this->vars);
	// 		ob_start();
	// 		// $Controller = substr(get_class($this),4);
	// 		require('vue/'.$controller.'/'.$filename.'.php');
	// 		$content = ob_get_clean();
	// 		echo $content;


	// }
		function render($controller, $viewFile,$param = null) {
			// Extraction de $vars
			// permet le passage de $d['maVar'] = value (côté controlleur) à $maVar = value (côté vue)
			extract($this->vars); 
			// Démarrage de la mémoire tempon
			ob_start();
			require_once('vue/'.$controller.'/'.$viewFile.'.php');
			// Vide la mémoire tempon et affecte le contenue dans $content
			$content = ob_get_clean();

			echo $content;
			// Execution de saveUrl 
			$this->saveUrl($controller, $viewFile,$param);
	}

	function saveUrl($ctrl,$vue,$param = null) {
		// Affectation a la variable de session url, l'url à sauvegarder
		$_SESSION['url'] = $ctrl.'/'.$vue.'/'.$param;
	}
}
?>