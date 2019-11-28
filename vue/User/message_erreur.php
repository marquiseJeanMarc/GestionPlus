	<?php 
		$errNom = "";
		$errPrenom = "";
		$errEmail = "";
		$errEmailInBdd = "";
		$errPass = "";
		$errPassSame = "";
		// extrait du GET log les erreurs dans un tableau
		if (isset($_GET['log'])) 
		{
			$tabLog = explode('_',$_GET['log']);
			
			foreach ($tabLog as $key => $error) 
			{
				switch ($error) 
				{
					case '1':
						$errNom = 'Le nom doit contenir uniquement des lettres<br>';
					
						break;
					case '2':
						$errPrenom = 'Le prénom doit contenir uniquement des lettres<br>';

					break;
					case '3':
						$errEmail = 'l\'email n\'est pas valide<br>';
					break;
					case '4':
						$errPass = 'Le mot de passe doit avoir :
							<ul>
							<li>Au moins une majuscule</li>
							<li>Au moins un chiffre</li>
							<li>Au moins 6 caractères</li>
							<li>Au moins un caractère spécial</li>
							</ul><br>
						';
						break;
					case '5':
						$errPassSame = 'La vérification du mot de passe ne correspond pas<br>';
						break;
					case '6':
						$errEmailInBdd = '- Email déjà inscript<br>';
						break;

						default:
						break;
				}
			}
		}
	 ?>

	
