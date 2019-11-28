<?php 
// ----------- PHASE 3 : creation du Controlleur de l'objet ----------- //
// Déclaration de l'objet controleur qui hérite du "super controleur" Controller
class CtrlTypeCategorie extends Controller 
{


public function create() 
	{
	$this->loadDao('TypeCategorie');
		$typeCategorie = new TypeCategorie($this->input['nom_type_categorie'],$this->input['fk_c'],);
		$this->TypeCategorie->create($typeCategorie);
		$this->render('Categorie','index');
		}
}
?>
