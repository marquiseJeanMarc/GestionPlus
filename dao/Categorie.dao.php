<?php

require_once('modele/Categorie.class.php');

class DaoCategorie
{
//on lui donne le non du modele ici c'est $categorie
	public function create($categorie) 
	{
// :: veux dire quon fait appel a un objet statique
		DB::select('INSERT INTO categorie (nom_categorie) VALUES (?)', array($categorie->getNom_categorie()));
	}
// on lui donne $id du dela bdd de categorie 
	// public function read($id) 
	// {
	// 	$donnee = DB::select('SELECT * FROM categorie WHERE id = ?', array($id));
	// 	// si mes donneé ne sont pas vide je fait un new 
	// 	if(!empty($donee))
	// 	{
	// 		$categorie = new Categorie($donnee['nom_categorie']);
	// 		$categorie->setId($donnee['id']);	
	// 		$categorie->setArchive($donnee['archive']);

	// 		return $categorie;
	// 	}
	// 	else
	// 	{
	// 		return null;
	// 	}
	// }
	// public function readAll() 
	// {
	// 	$donnee = DB::select('SELECT * FROM categorie');
	// 	$tabCategorie = array();
	// 	if(!empty($donees))
	// 	{
	// 		foreach ($donnees as $key => $donnee) 
	// 		{
	// 			$categorie = new Categorie($donnee['nom_categorie']);
	// 			$categorie->setId($donnee['id']);	
	// 			$categorie->setArchive($donnee['archive']);
	// 		}
	// 			return $tabCategorie;
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