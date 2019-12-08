<?php 
// ----------- PHASE 3 : creation du Controlleur de l'objet ----------- //
// Déclaration de l'objet controleur qui hérite du "super controleur" Controller
class CtrlEntreprise extends Controller 
{

	public function index() {
		$this->render('Entreprise','index');
	}

	// méthode de l'action create
	public function signIn() 
	{
		// chargement de la DAO User avec la méthode loadDao du "super controleur"
		$this->loadDao('Entreprise');

		$newEntreprise = new Entreprise($this->input['nomEntreprise'],$this->input['adresse'], $this->input['tel']);
			
			$this->Entreprise->create($newEntreprise);
			$_SESSION['id'] = DB::lastId();
	        header('Location: '.WEBROOT.'Accueil/categorie');
			// $this->render('Categorie','index');
	}

}
?>