// ------------------ CONFIRMATION SUPPRESSION PROFIL ------------------ //
if (document.querySelector("#userUpdate button") != null) {
let btnSuppUser = document.querySelector("#userUpdate button");

btnSuppUser.addEventListener("click", suppUser);
}
function suppUser() {
	if (confirm("Voulez vous supprimer votre compte ?")) {
		window.location.replace("profil.php?delete");
	}
}


// ------------------ AFFICHAGE MODIFICATION PROFIL ------------------ //
if (document.querySelector("#userView button") != null) {
	let btnModifProfil = document.querySelector("#userView button");
	btnModifProfil.addEventListener("click", modifView);
}
function modifView() {
	let userView = document.querySelector("#userView");
	let userUpdate = document.querySelector("#userUpdate");

	userView.style = "display:none";
	userUpdate.style = "display:block";
}

// ------------------ VERIF FORMULAIRE INSCRIPTION ------------------ //
// Récupération des inputs dans une variable correspondante
if (document.querySelector("input[name='nomEntreprise']") != null) 
{
	let nom = document.querySelector("input[name='nomEntreprise']");
	let adresse = document.querySelector("input[name='adresse']");
	let tel = document.querySelector("input[name='tel']");
	let statut = document.querySelector("input[name='statut']");
	

	// Déclaration des regexp
	let regNom = /^[A-Za-zÀ-ÖØ-öø-ÿ]+$/;
	let regAdresse = /^[0-9A-Za-zÀ-ÖØ-öø-ÿ-\s]+$/;
	let regTel = /^[0-9\s]{10,16}$/;
	

	// Déclaration des messages
	let messNom = "nom pas bon";
	let messAdresse = "adresse pas bon";
	let messTel = "Ne peut contenir que des chiffres.ex:12 34 56 78 91 ou 1234567891";
	

	// Ajout d'écouteur d'évènement au changement de la valeur des inputs
	// le 1er paramètre de l'écouteur d'évènement est le type d'évènement (input)
	/* le 2ème paramètre de l'écouteur d'évènement est une fonction anonyme qui fait
	 appel à la fonction paramétrée verif
	*/
	nom.addEventListener("input", function() 
	{
		verif(nom,regNom,'#infoNom',messNom);
	});
	adresse.addEventListener("input",function() 
	{
		verif(adresse,regAdresse,'#infoAdresse',messAdresse);
	});
	tel.addEventListener("input",function() 
	{
		verif(tel,regTel,'#infoTel',messTel);
	});
	

	// Declaration de la fonction paramétrée verif
	 /* la fonction vérif est composée de 4 paramètres :
	 - inputToTest : le nom de la variable correspondant à l'input que l'on veut tester
	 - reg : le regexp correspondant à l'input que l'on veut tester
	 - idInfo : le nom de l'identifiant de la div où l'ont veut afficher le message
	 - message : le message
	 */
	function verif(inputToTest,reg,idInfo,message) 
	{
		// stockage dans la variable info de la div où l'ont veut afficher le message
		let info = document.querySelector(idInfo);
		// Si la longueur de la valeur de l'input est supérieure à 0
		if (inputToTest.value.length > 0) 
		{
			// Si l'expression régulière est différente de la valeur de l'input
			if (!reg.test(inputToTest.value) ) 
			{
				// J'insert le message dans la div où l'ont veut afficher le message
				info.innerHTML = message;
				// J'applique une box shadow rouge à l'input
				inputToTest.style = "box-shadow: 0 0 0.3vw red";
			} 
			else 
			{
				// Je supprime le message
				info.innerHTML = "";
				// J'applique une box shadow vert à l'input 
				inputToTest.style = "box-shadow: 0 0 0.3vw green";
			} 
		} 
		else 
		{
			// Je supprime le message
			info.innerHTML = "";
			// Je supprime le box shadow
			inputToTest.style = "box-shadow: none";
		}
	}
}