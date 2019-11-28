<?php 
// ----------- PHASE 2 : creation du DAO ----------- //
// charge le modèle lié à la DAO
	require_once('modele/User.class.php');
// Déclaration de l'objet dao avec l'héritage du "super controlleur" Controller
class DaoUser extends Controller {
	// Déclaration de méthode du dao avec l'objet $user en argument
	public function create($user) {
		DB::select('INSERT INTO users (nom,prenom,email,pass1) VALUES (?,?,?,?)', array($user->getLastName(),$user->getFirstName(),$user->getEmail(),password_hash($this->input['pass1'], PASSWORD_BCRYPT)));
		$user->setId(DB::lastId());
		return $user;
	}

	public function read($id) {
		$donnees = DB::select('SELECT * FROM users WHERE id = ?', array($id));
		if (!empty($donnees)){
			$user = new User($donnees['nom'],$donnees['prenom'],$donnees['email'],$donnees['pass1']);
			// on récupère l'id de l'utilisateur de la nouvelle instance de l'objet
			$user->setId($donnees['id']);
			return $user;
		} 
		else{
			return null;    
		} 
	}

	public function update($user) {
		$donnees = DB::select('UPDATE users SET nom = ?, prenom = ?, email = ?, pass1 = ? WHERE id = ?', array($user->getLastName(),$user->getFirstName(),$user->getEmail(),$user->getPass(),$user->getId()));
		if (!empty($donnees)) {
			$user = new User($user['nom'],$user['prenom'],$user['email'],$user['pass1']);
			//on récupère l'id de l'utilisateur de la nouvelle instance de l'objet
			//récupère l'id de l'utilisateur créé dans update
			$user->setId($donnees['id']);
			return $user;
		}    
	}

	public function readByEmail($email) {
		$donnees = DB::select('SELECT * FROM users WHERE email = ?', array($email));
		if (!empty($donnees)) {
			$user = new User($donnees['nom'],$donnees['prenom'],$donnees['email'],$donnees['pass1']);
			$user->setId($donnees['id']);
			return $user;
		} 
		else {
			return null;
		}
	}

	// public function delete() {
	// 	$donnees = DB::select('DELETE FROM users WHERE id = $_SESSION["id"]');
		
		
	// }
}
?>