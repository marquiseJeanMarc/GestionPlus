document.getElementById('nom').addEventListener('change', function() {
    var recupe=document.getElementById('nom').value;
    console.log(recupe);
});

document.getElementById('prenom').addEventListener('change', function() {
    var recupe=document.getElementById('prenom').value;
    console.log(recupe);
});
//'keyup'= contrôle chaque caractères taper et dis ok ou non ok
document.getElementById('email').addEventListener('keyup', function() {
    var recupe=document.getElementById('email').value;
//la variable email comprend une nouvelle expression régulière (...)    
var email = new RegExp (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/);
//Si regexp est conforme
   if (email.test(recupe)) {
 console.log("Adresse e-mail valide !");
//sinon
}   else {
   console.log("Adresse e-mail invalide !");
}
});


document.getElementById('numTel').addEventListener('change', function() {
    var recupe=document.getElementById('numTel').value;
    console.log(recupe);
});


document.getElementById('motDePasse').addEventListener('keyup', function() {

   var recupe=document.getElementById('motDePasse').value;

   var okRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[\?\*\.\^\$\+\|\-]).*$", "g");
       if(okRegex.test(recupe)){

       console.log('votre mot de passe est correct !!!!!');
} else {
       console.log('votre mot de passe est incorrect !!!!');
}

});

document.getElementById('motDePasse2').addEventListener('keyup', function() {
   var motDePasse=document.getElementById('motDePasse').value;
   var motDePasse2=document.getElementById('motDePasse2').value;

   if(motDePasse == motDePasse2){
       console.log('mot de passe valide');
   } else {
       console.log('mot de passe non identique');
   }

});