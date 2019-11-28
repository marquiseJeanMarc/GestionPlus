<?php 
// ----------- PHASE 3 : creation du Controlleur de l'objet ----------- //
// Déclaration de l'objet controleur qui hérite du "super controleur" Controller
class CtrlUser extends Controller 
{
// méthode de l'action index
	public function index() 
	{
// Chargement de la vue 'index' avec la méthode render du "super controleur"
		$this->render('TableauDesProduits','index');
	}
   
    public function TableauDesProduits() 
	{
		$this->render('User','index');
	}

    public function categorie() 
	{
		$this->render('TableauDesProduits','index');
	}

// méthode de l'action create
	public function signIn() {
// chargement de la DAO User avec la méthode loadDao du "super controleur"
		$this->loadDao('User');
		$badPoint = 0;
		if ($this->User->readByEmail($this->input['email']) != null) {
			$d['user'] = $this->User->readByEmail($this->input['email']);
			$d['log'] = $this->input['email'].": déjà inscrit";
			$this->set($d);
			$this->render('User','userInscription');
		} 
		else {
			$newUser = new User($this->input['lastName'],$this->input['firstName'], $this->input['email'],(password_hash($this->input['pass1'],PASSWORD_BCRYPT)));

			if (!preg_match("/^[a-zA-Z\s-]+$/", $this->input['lastName'])) {
				$badPoint++;
				$d['log1'] = "<p>Le nom doit contenir uniquement des lettres ou chiffres</p>";
			} 

			if (!preg_match("/^[a-zA-Z\s-]+$/", $this->input['firstName'])) {
				$badPoint++;
				$d['log2'] = "<p>Le prénom doit contenir uniquement des lettres ou chiffres</p>";
			} 

			if (!preg_match("/^[\w.-]+@[\w.-]+\.[a-zA-Z0-9]{2,6}$/", $this->input['email'])) {
				$badPoint++;
				$d['log3'] = "<p>Email invalide</p>";
			} 

			if (!preg_match('/^(?=.{6,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[&?:\/=+§^*¤£@\#!()"$]).*$/',$this->input['pass1'])){
				$badPoint++;
				$d['log4'] = " <p>Le mot de passe doit avoir :</p>
				<ul>
					<li>Au moins une majuscule</li>
					<li>Au moins un chiffre</li>
					<li>Au moins 6 caractères</li>
					<li>Au moins un caractère spécial</li>
				</ul>";
			}
			elseif ($this->input['pass1'] != $this->input['pass2']) {
				$badPoint++;
				$d['log5'] = "<p>La vérification du mot de passe ne correspond pas</p>";
			}
			else{
				$goodPass = password_hash($this->input['pass1'], PASSWORD_BCRYPT);
			}
			if ($badPoint == 0) {
				$newUser = $this->User->create($newUser);

				$_SESSION['id'] = $newUser->getId();
				$_SESSION['nom'] = $newUser->getLastName();
				$_SESSION['prenom'] = $newUser->getFirstName();
				header('Location: '.WEBROOT.'Entreprise/index');
			} else {
				$this->set($d);
				$this->render('User','userInscription');
			}						
		}
	}

	public function read($id) {
		$this->loadDao('User');
		$d['user'] = $this->User->read($id);
		$this->set($d);
		$this->render('User','profil');
	}  

	public function update() {
		$this->loadDao('User');
		$badPoint = 0;
		$user = $this->User->read($_SESSION['id']);
		$d['log'] = "";

		if ($this->input['nom'] != null) {
	        $nom = $this->input['nom'];
	        if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/", $nom)) {
	            $badPoint++;
	           $d['log1'] = "<p>Le prénom doit contenir uniquement des lettres ou chiffres</p>";
	        }
	    } else {
	        $nom = $user->getNom();
	    }

    	if ($this->input['prenom'] != null) {
	        $prenom = $this->input['prenom'];
	        if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/", $prenom)) {
	            $badPoint++;
	            $d['log'] .= "1";
	        }
	    } else {
	        $prenom = $user->getPrenom();
	    }

	    if ($this->input['email'] != null) {
	        $email = $this->input['email'];
	        if (!preg_match("/^[a-z0-9.-]+@[a-z0-9.-]+\.[a-z]{2,6}$/", $email)) {
	            $badPoint++;
	            $d['log'] .= "1";
	        }
	    } else {
	        $email = $user->getEmail();
	    }

		if ($this->input['pass1'] != null) {
        	$pass1 = $this->input['pass1'];
        	$pass2 = $this->input['pass2'];
        
	        if ($pass1 != $pass2) {
	           $badPoint++;
				$d['log5'] = "<p>La vérification du mot de passe ne correspond pas</p>";
			} else {
           		if (!preg_match  ('/^(?=.{6,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[&?:\/=+§^*¤£@\#!()"$]).*$/',$this->input['pass1'])){

 			$badPoint++;
				$d['log4'] = " <p>Le mot de passe doit avoir :</p>
				<ul>
					<li>Au moins une majuscule</li>
					<li>Au moins un chiffre</li>
					<li>Au moins 6 caractères</li>
					<li>Au moins un caractère spécial</li>
				</ul>";
				} else {
	                $mdp_secu = password_hash($pass1,PASSWORD_BCRYPT);
	            }
	        }
		} 
		else {
        	$mdp_secu = $user->getPass();
   		}
   		
     	if ($badPoint == 0) {
     	
	        $newUser = new User($nom,$prenom,$email,$mdp_secu);
	        $newUser->setId($_SESSION['id']);
	        $this->User->update($newUser);
	        $d['log6'] = "Compte modifié";
	        $this->set($d);
	        header ('Location:'.WEBROOT.'Accueil/profil/');
        } 
        else {
            $this->set($d);
            header ('Location:'.WEBROOT.'Accueil/profil/');
        }
		$d['user'] = $user;
		$this->set($d);
		$this->read($_SESSION['id']);
	}

	public function delete($id) {
	}

	public function login() {
		$this->loadDao('User');
		if ($this->User->readByEmail($this->input['email']) != null) {
				$user = $this->User->readByEmail($this->input['email']);
			if (password_verify($this->input['pass1'],$user->getPass())) {
				$_SESSION['id'] = $user->getId();
				$_SESSION['nom'] = $user->getLastName();
				$_SESSION['prenom'] = $user->getFirstName();
				header('Location: '.WEBROOT.'Categorie/index');
			} 
			else{
				$d['log'] = "Mot de passe incorrect";
				$this->set($d);
				$this->render('Accueil','index');
			}
		} 
		else{
			$d['log'] = "Email incorrect";
			$this->set($d);
			$this->render('Accueil','index');
		}
	}
	
	public function logOut(){
		$_SESSION = [];
		session_destroy();
		header('Location: '.WEBROOT.'Accueil/index');
	}
}
?>