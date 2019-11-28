<?php
// ----------- PHASE 1 : creation d'objet ----------- //
 // Déclaration de l'objet User avec héritage (copier/coller) de la classe abstraite AbstractEntity
class Entreprise extends AbstractEntity 
{
	// Déclaration des attributs
	private $nomEntreprise;
	private $adresse;
	private $telephone;
	private $statut;
	

	// Déclaration du constructeur avec ses arguments qui font références aux attributs
	public function __construct($nomEntrepriseParam, $adresseParam, $telephoneParam, $statutParam) 
	{
		// $this fait référence à l'instance de l'objet (new Objet()).
		$this->nomEntreprise = $nomEntrepriseParam;
		$this->adresse = $adresseParam;
		$this->telephone = $telephoneParam;
		$this->statut = $statutParam;
		
	}

	public function getId() 
	{
		return $this->id;
	}
	// Getter (permet de lire un attibut)
	// Déclaration du getter pour le firstName
	public function getNomEntreprise() 
	{
		return $this->nomEntreprise;
	}
    // Setter (permet d'ecrire un attribut)
	// Déclaration du setter pour le NomEntreprise
	public function setNomEntreprise($nomEntrepriseParam) 
	{
		$this->nomEntreprise = $nomEntrepriseParam;
	}


	public function getAdresse() 
	{
		return $this->adresse;
	}
	public function setAdresse($adresseParam) 
	{
		$this->adresse = $adresseParam;
	}


	public function getTelephone() 
	{
		return $this->telephone;
	}
	public function setTelephone($telephoneParam) 
	{
		$this->telephone = $telephoneParam;
	}


	public function getStatut() 
	{
		return $this->statut;
	}
	public function setStatut($statutParam) 
	{
		$this->statut = $statutParam;
	}
}
?>