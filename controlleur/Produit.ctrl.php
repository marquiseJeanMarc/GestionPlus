<?php 
// ----------- PHASE 3 : creation du Controlleur de l'objet ----------- //
// Déclaration de l'objet controleur qui hérite du "super controleur" Controller
class CtrlProduit extends Controller 
{
	public function create() 
	{		
	$this->loadDao('Produit');

		$produit = new Produit($this->input['nom_produit'],$this->input['description_produit'],$this->input['image'],$this->input['prix'],$this->input['stock'],$this->input['dispo'],$this->input['fk_tc']);
		$this->Produit->create($produit);

			$this->render('Categorie','index');		
	}	
}
?>