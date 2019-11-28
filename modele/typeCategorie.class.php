<?php

class TypeCategorie extends AbstractEntity 
{
	private $nom_type_categorie;
	private $fk_c;
	

	public function __construct($nom_type_categorieParam,$fk_cParam) 
	{
		$this->nom_type_categorie = $nom_type_categorieParam;
		$this->fk_c = $fk_cParam;
	}


	public function getId() 
	{
		return $this->id;
	}


	public function getNom_type_categorie() 
	{
		return $this->nom_type_categorie;
	}
  	public function setNom_type_categorie($nom_type_categorieParam) 
  	{
		$this->nom_type_categorie = $nom_type_categorieParam;
	}


	public function getFk_c() 
	{
		return $this->fk_c;
	}
  	public function setFk_c($fk_cParam) 
  	{
		$this->fk_c = $fk_cParam;
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