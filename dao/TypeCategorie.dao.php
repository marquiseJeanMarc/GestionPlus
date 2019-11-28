<?php

require_once('modele/TypeCategorie.class.php');

class DaoTypeCategorie
{
//on lui donne le non du modele ici c'est $typecategorie
	public function create($typeCategorie) 
	{
// :: veux dire quon fait appel a un objet statique
		DB::select('INSERT INTO type_categorie (nom_type_categorie,fk_c) VALUES (?,?)', array($typeCategorie->getNom_type_categorie(),$typeCategorie->getFk_c()));
	}
// on lui donne $id de la bdd de typecategorie 
	// public function read($id) 
	// {
	// 	$donnee = DB::select('SELECT * FROM type_categorie WHERE id = ?', array($id));
	// 	// si mes donneé ne sont pas vide je fait un new 
	// 	if(!empty($donee))
	// 	{

	// 		$typecategorie = new User($donnee['nom_type_categorie']);
	// 		$typecategorie->setFk_c($donnee['fk_c ']);	
	// 		$typecategorie->setId($donnee['id']);	
	// 		$typecategorie->setArchive($donnee['archive']);

	// 		return $typecategorie;

	// 	}
	// 	else
	// 	{
	// 		return null;
	// 	}
	// }

	// public function readAll() 
	// {
	// 	$donnee = DB::select('SELECT * FROM type_categorie');
	// 	$tabTypeCategorie = array();
		
	// 	if(!empty($donees))
	// 	{
	// 		foreach ($donnees as $key => $donnee) 
	// 		{
	// 			$supercategorie = new User($donnee['nom_type_categorie']);
	// 			$typecategorie->setFk_c($donnee['fk_c ']);	
	// 			$supercategorie->setId($donnee['id']);	
	// 			$supercategorie->setArchive($donnee['archive']);
	// 		}
	// 			return $tabTypeCategorie;

	// 	}
	// 	else
	// 	{
	// 		return null;
	// 	}
	// }
	// 	public function update(){

	// 	}
	// 	public function delete(){

	// 	}
}
?>