<?php
// ----------- PHASE 1 : creation d'objet ----------- //
// Déclaration de l'objet User avec héritage (copier/coller) de la classe abstraite AbstractEntity
class User extends AbstractEntity 
{
	// Déclaration des attributs
	private $lastName;
	private $firstName;
	private $email;
	private $pass;
	

	// Déclaration du constructeur avec ses arguments qui font références aux attributs
	public function __construct($lastNameParam, $firstNameParam, $emailParam, $passParam) {
		// $this fait référence à l'instance de l'objet (new Objet()).
		
		$this->lastName = $lastNameParam;
		$this->firstName = $firstNameParam;
		$this->email = $emailParam;
		$this->pass = $passParam;
		
	}

	public function getId() 
	{
		return $this->id;
	}
    // Getter (permet de lire un attibut)
	// Déclaration du getter pour le firstName
		public function getLastName() 
	{
		return $this->lastName;
	}
	// Setter (permet d'ecrire un attribut)
	// Déclaration du setter pour le firstName
	public function setLastName($lastNameParam) 
	{
		$this->lastName = $lastNameParam;
	}

	public function getFirstName() 
	{
		return $this->firstName;
	}  
	public function setFirstName($firstNameParam) 
	{
		$this->firstName = $firstNameParam;
	}

	public function getEmail() 
	{
		return $this->email;
	}
	public function setEmail($emailParam) 
	{
		$this->email = $emailParam;
	}

	public function getPass() 
	{
		return $this->pass;
	}
	public function setPass($passParam) 
	{
		$this->pass = $passParam;
	}
}
?> 