<?php 
// ----------- PHASE 3 : creation du Controlleur de l'objet ----------- //
// Déclaration de l'objet controleur qui hérite du "super controleur" Controller
class CtrlCategorie extends Controller 
{
	

	public function index() 
	{
		$this->render('TableauDeBord','index');
	}

	public function create() 
	{
		$this->loadDao('Categorie');
		$categorie = new Categorie($this->input['nom_categorie']);
		$this->Categorie->create($categorie);
		$this->render('Categorie','index');
	}
}
?>