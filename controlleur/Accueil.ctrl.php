<?php 
class CtrlAccueil extends Controller {
	public function index() {
		$this->loadDao('User');
		$this->render('Accueil','index');
	}

	public function inscription() 
	{
		$this->render('User','userInscription');
	}

	public function accueil() 
	{
		$this->render('Accueil','index');
	}

	public function TableauDesProduits() {
		
		$this->render('TableauDesProduits','index');		
	}

	public function contact() 
	{
		$this->render('User','contact');
	}

 	public function profil() 
	{
		$this->loadDao('User');
		//La chaine de caractére user qui se trouve dans ~$d['user']~ corespond a La variable $user qui se trouve dans la vue profil.php ~value="<?php  echo $user->getLastName();~

		$d['user'] = $this->User->read($_SESSION['id']);
		$this->set($d);
		$this->render('User','profil');
	}
	
	public function categorie() 
	{
		$this->render('Categorie','index');
	}
}
?>