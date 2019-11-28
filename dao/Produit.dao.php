<?php

require_once('modele/Produit.class.php');

class DaoProduit
{
//on lui donne le non du modele ici c'est $categorie
	public function create($produit) 
	{
// :: veux dire quon fait appel a un objet statique
		DB::select('INSERT INTO produit (nom_produit,description_produit,image,prix,stock,dispo,fk_tc) VALUES (?,?,?,?,?,?,?)', array($produit->getNom_produit(),$produit->getDescription_produit(),$produit->getImage(),$produit->getPrix(),$produit->getStock(),$produit->getDispo(),$produit->getFk_tc()));
	}
// on lui donne $id du dela bdd de categorie 
	public function read($id) 
	{
		$donnee = DB::select('SELECT * FROM categorie WHERE id = ?', array($id));
		// si mes donneé ne sont pas vide je fait un new 
		if(!empty($donee))
		{
			$produit = new Produit($donnee['nom_produit']);
			$produit->setId($donnee['id']);
			$produit->setDescription_produit($donnee['description_produit']);
			$produit->setImage($donnee['image']);	
			$produit->setPrix($donnee['prix']);	
			$produit->setStock($donnee['stock']);	
			$produit->setDispo($donnee['dispo']);	
			$produit->setFk_tc($donnee['fk_tc']);		
			$produit->setArchive($donnee['archive']);

			return $produit;
		}
		else
		{
			return null;
		}
	}
	public function readAll() 
	{
		$donnee = DB::select('SELECT * FROM produit');
		$tabProduit = array();
		if(!empty($donees))
		{
			foreach ($donnees as $key => $donnee) 
			{
				$produit = new Produit($donnee['nom_categorie']);
				$produit->setId($donnee['id']);	
				$produit->setDescription_produit($donnee['description_produit']);
				$produit->setImage($donnee['image']);	
				$produit->setPrix($donnee['prix']);	
				$produit->setStock($donnee['stock']);	
				$produit->setDispo($donnee['dispo']);	
				$produit->setFk_tc($donnee['fk_tc']);		
				$produit->setArchive($donnee['archive']);
			}
				return $tabProduit;
		}
		else
		{
			return null;
		}
	}
		public function update(){

		}
		public function delete(){

		}
}
?>