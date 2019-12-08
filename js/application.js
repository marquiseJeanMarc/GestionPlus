 function calculate_this() {
      
//parti valeurs fixe 
        var valeurs = [20, 80, 2.90, 0.28, 3.40, 0.25, 13.10, 1, 0.10, 0.02];
//parti variable js qui fait le lien pour récupérer se qui se trouve dans les champs du html 
        var tableauxEntrezDonne = [];
        var tableauxEntrezId = [];
        
        tableauxEntrezId.push ('nbProduit');
        tableauxEntrezId.push ('Prix');
        tableauxEntrezId.push ('PrixF');
        tableauxEntrezId.push ('nombrePaiementStripe');
        tableauxEntrezId.push ('nombrePaiementPaypal');
        tableauxEntrezId.push ('nombreDeRembourses');
        tableauxEntrezId.push ('prixDeLaLivraison');
        tableauxEntrezId.push ('budgetPub');
  
for (var e = 0; e < tableauxEntrezId.length; e++){
        tableauxEntrezDonne.push (document.getElementById(tableauxEntrezId[e]).value);}   
//parti  association des variables

        var tableauxResultat = [];
        var tableauxID = [];

        var prixTotalDuFournisseur = ((tableauxEntrezDonne[0])*(tableauxEntrezDonne[2]));
        tableauxResultat.push (prixTotalDuFournisseur);
        tableauxID.push ('resultsPF');

        var totalLivraison = ((tableauxEntrezDonne[0])*(tableauxEntrezDonne[6]));
        tableauxResultat.push (totalLivraison);
        tableauxID.push ('resultsLV');

        tableauxResultat.push ((tableauxEntrezDonne[7]));
        tableauxID.push ('resultsPUB');

        var totalRembourses = ((tableauxEntrezDonne[5])*(tableauxEntrezDonne[1]));
        tableauxResultat.push (totalRembourses);
        tableauxID.push ('resultsRB');

        // calcule de stripe
        var totalDePaiemantStripe = (((tableauxEntrezDonne[3])*(tableauxEntrezDonne[1]))*(valeurs[2])) / 100;
        var totalCommissionStripe = ((tableauxEntrezDonne[3])*(valeurs[3]));
        var Stripe = ( totalCommissionStripe + totalDePaiemantStripe);
        tableauxResultat.push  (Stripe);
        tableauxID.push ('resultsSP');

        // calcule de paypal
        var totalDePaiemantPaypal = (((tableauxEntrezDonne[4])*(tableauxEntrezDonne[1]))*(valeurs[4]))/100;
        var totalCommissionPaypal = ((tableauxEntrezDonne[4])*(valeurs[5]));
        var Paypal = ( totalCommissionPaypal+totalDePaiemantPaypal);
        tableauxResultat.push (Paypal);
        tableauxID.push ('resultsPP');

        var tvaAjoutée = (prixTotalDuFournisseur*(valeurs[0]))/100;
        tableauxResultat.push (tvaAjoutée);
        tableauxID.push ('resultsTA');

        tableauxResultat.push (valeurs[1]);
        tableauxID.push ('resultsBA');

        var TotalDesFrais = (prixTotalDuFournisseur + tvaAjoutée + totalLivraison 
        + Stripe + Paypal + totalRembourses + (eval(tableauxEntrezDonne[7]))+(valeurs[1]));
        tableauxResultat.push (TotalDesFrais);
        tableauxID.push ('TotalDesFrais');

        var chiffreAffaire = ((tableauxEntrezDonne[0])*(tableauxEntrezDonne[1]));
        tableauxResultat.push (chiffreAffaire);
        tableauxID.push ('resultsCA');

        var total =(eval(chiffreAffaire - TotalDesFrais));
        tableauxResultat.push (total);
        tableauxID.push ('total');

        // calcule impots
        var charge = (chiffreAffaire*(valeurs[6]))/100;
        var impot = (chiffreAffaire*(valeurs[7]))/100;
        var cfp = (chiffreAffaire*(valeurs[8]))/100;
        var tfc = (chiffreAffaire*(valeurs[9]))/100;
        var totalCharge = (charge + impot + cfp + tfc);
        tableauxResultat.push (totalCharge);
        tableauxID.push ('resultsCG');
            
       

        var net =(total - totalCharge);
        tableauxResultat.push (net);
        tableauxID.push ('results');

        var netUnite = (eval(net / tableauxEntrezDonne[0]));
        tableauxResultat.push (netUnite);
        tableauxID.push ('netUnite');

 
   console.log(tableauxEntrezId);

    for (var i = 0; i < tableauxResultat.length; i++) {
        document.getElementById(tableauxID[i]).innerHTML = (eval(tableauxResultat[i]).toFixed(2))+ "€";
    }
}
   