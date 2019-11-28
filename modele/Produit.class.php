<?php
// ----------- PHASE 1 : creation d'objet ----------- //
 // Déclaration de l'objet User avec héritage (copier/coller) de la classe abstraite AbstractEntity
class Produit extends AbstractEntity 
{
	// Déclaration des attributs
	private $nom_produit;
	private $description_produit;
	private $image;
	private $prix;
	private $stock;
	private $dispo;
	private $fk_tc;


	// Déclaration du constructeur avec ses arguments qui font références aux attributs
	public function __construct($nom_produitParam, $description_produitParam, $imageParam, $prixParam, $stockParam, $dispoParam, $fk_tcParam) 
	{
		// $this fait référence à l'instance de l'objet (new Objet()).
		$this->nom_produit = $nom_produitParam;
		$this->description_produit = $description_produitParam;
		$this->image = $imageParam;
		$this->prix = $prixParam;
		$this->stock = $stockParam;
		$this->dispo = $dispoParam;
		$this->fk_tc = $fk_tcParam;
	}

	public function getId() 
	{
		return $this->id;
	}
    // Getter (permet de lire un attibut)
	// Déclaration du getter pour le firstName
	public function getNom_produit() 
	{
		return $this->nom_produit;
	}
    // Setter (permet d'ecrire un attribut)
	// Déclaration du setter pour le firstName
	public function setNom_produit($nom_produitParam) 
	{
		$this->nom_produit = $nom_produitParam;
	}


	public function getDescription_produit() 
	{
		return $this->description_produit;
	}
	public function setDescription_produit($description_produitParam) 
	{
		$this->description_produit = $description_produitParam;
	}


	public function getImage() 
	{
		return $this->image;
	}
	public function setImage($imageParam) 
	{
		$this->image = $imageParam;
	}


	public function getPrix() 
	{
		return $this->prix;
	}
	public function setPrix($prixParam) 
	{
		$this->prix = $prixParam;
	}


	public function getStock() 
	{
		return $this->stock;
	}
	public function setStock($stockParam) 
	{
		$this->stock = $stockParam;
	}


	public function getDispo() 
	{
		return $this->dispo;
	}
	public function setDispo($dispoParam) 
	{
		$this->dispo = $dispoParam;
	}


	public function getFk_tc() 
	{
		return $this->fk_tc;
	}
	public function setFk_tc($fk_tcParam) 
	{
		$this->fk_tc = $fk_tcParam;
	}
}
?>