<?php 
// ----------- PHASE 2 : creation du DAO ----------- //
// charge le modèle lié à la DAO
require_once('modele/Entreprise.class.php');
// Déclaration de l'objet dao avec l'héritage du "super controlleur" Controller
class DaoEntreprise extends Controller 
{
	// Déclaration de méthode du dao avec l'objet $entreprise en argument
	public function create($entreprise) 
	{
		DB::select('INSERT INTO users_entreprise (nomEntreprise,adresse,tel) VALUES (?,?,?)', array($entreprise->getNomEntreprise(),$entreprise->getAdresse(),$entreprise->getTelephone()));
	}
	// public function read($id) {
	// 	$donnees = DB::select('SELECT * FROM users WHERE users_id = ?', array($id));
	// 	if (!empty($donnees)){
	// 		$user = new User($donnees['nomEntreprise'],$donnees['adresse'],$donnees['tel'],$donnees['pass1']);
	// 		// on récupère l'id de l'utilisateur de la nouvelle instance de l'objet
	// 		$user->setId($donnees['idusers_entreprise']);
	// 		return $entreprise;
	// 	} 
	// 	else{
	// 		return null;    
	// 	} 
	// }
	// public function read($id) 
	// {
	// 	$donnees = DB::select('SELECT * FROM  users_entreprise WHERE id = ?', array($id));
	// 	$entrepriseData = $donnees->fetch();
	// 	// Affectation à la variable $entreprise de la nouvelle instance de l'objet User avec en paramètre les données venant de la BDD.
	// 	$entreprise = new User($entrepriseData['nomEntreprise'],$entrepriseData['adrese'],$entrepriseData['tel'],$entrepriseData['statut']);
	// 	$entreprise->setId($entrepriseData['id']);

	// 	return $entreprise;
	// }

	// public function update($entreprise) {
	// 	DB::select('UPDATE users_entreprise SET nomEntreprise = ?, adresse = ?, tel = ?, statut = ? WHERE id = ?', array($entreprise->getNomEntreprise(),$entreprise->getAdresse(),$entreprise->getTelephone(),$entreprise->getStatut(),$entreprise->getId()));
	// }
}

 ?>