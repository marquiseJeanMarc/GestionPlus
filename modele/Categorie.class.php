<?php

class Categorie extends AbstractEntity 
{
	private $nom_categorie;

	public function __construct($nom_categorieParam) 
	{
		$this->nom_categorie = $nom_categorieParam;
	}


	public function getId() 
	{
		return $this->id;
	}


	public function getNom_categorie() 
	{
		return $this->nom_categorie ;
	}
  	public function setNom_categorie($nom_categorieParam) 
  	{
		$this->nom_categorie = $nom_categorieParam;
	}


	public function getArchive() 
	{
		return $this->archive;
	}
	public function setArchive($archive) 
	{
		$this->archive = $archive;
	}
}
?>