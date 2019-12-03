<main>
<fieldset>
    <legend>Données</legend>
    <div id="premiereDonnées">
        <div class="Donnée">
            <p>Produits vendu</p><input type="Number" step="0.01" id="nbProduit" value="0">
        </div>
        <div class="Donnée">
            <p>Prix produit à l'unité</p><input type="Number" step="0.01" id="Prix" value="0">
        </div>
        <div class="Donnée">
            <p>Prix fournisseur à l'unité</p><input type="Number" step="0.01" id="PrixF" value="0">
        </div>
        <div class="Donnée"> 
            <p>Prix de la livraison</p><input type="Number" step="0.01" id="prixDeLaLivraison" value="0">
        </div>
        <div class="Donnée"> 
            <p>Paiement Paypal</p><input type="Number" step="0.01" id="nombrePaiementPaypal" value="0">
        </div>
    </div>
    <div id="Données_resultat">
        <div id="deuxiémeDonnées">
            <div class="Donnée">
                <p>Paiement Stripe</p><input type="Number" step="0.01" id="nombrePaiementStripe" value="0">
            </div>
            <div class="Donnée">
                <p>Produits remboursés</p><input type="Number" step="0.01" id="nombreDeRembourses" value="0">
            </div>
            <div class="Donnée">
                <p>Publicité</p><input type="Number" step="0.01" id="budgetPub" value="0">
            </div>
        </div>

        <fieldset>
            <legend>Résultat</legend>
                <div id="resultat">
                    <div class="Donnée">
                        <p>Résultat Net</p><span id="results"></span>
                    </div>
                    <div class="Donnée">
                        <p>Résultat Net à l'unité</p><span id="netUnite"></span>
                    </div>              
                </div>
        </fieldset>
        <div id="bordeurIndiceCouleur"></div>
    </div>
    <div id="button_indiceCouleurs">
        <input type=button value="Calcul" onClick="calculate_this()" id="submit" >
        <div id="indiceCouleurs">
            <p id="curseurIndice">*</p>
            <span id="colorGreen"></span><p>Totalité des frais sont payés</p>
            <span id="colorOrange"></span><p>Une partie des frais sont payés</p>
            <span id="colorRed"></span><p>Aucun frais n'est payés</p>
        </div>
    </div>
</fieldset>

<fieldset>
<legend>Détails</legend>
    <div class="troixiémeDonnées">
        <div class="Donnée">
            <p>produits fournisseur</p><span id="resultsPF"></span>
        </div>
        <div class="Donnée">
            <p> Frais de livraison</p><span id="resultsLV"></span>
        </div>
        <div class="Donnée">
            <p> Budget pub</p><span id="resultsPUB"></span>
        </div>
        <div class="Donnée"> 
            <p>Produits remboursés</p><span id="resultsRB"></span>
        </div>
        <div class="Donnée"> 
            <p>Frais Stripe</p><span id="resultsSP"></span>
        </div>
    </div>
    <div class="troixiémeDonnées">
        <div class="Donnée">
            <p> Frais Paypal</p><span id="resultsPP"></span>
        </div>
        <div class="Donnée">
            <p>Frais de TVA</p><span id="resultsTA"></span>
        </div>
        <div class="Donnée">
            <p> Frais application</p><span id="resultsBA"></span>
        </div>
        <div class="Donnée"> 
            <p>Total des charges</p><span id="TotalDesFrais"></span>
        </div>
        <div class="Donnée"> 
            <p> Chiffre d'affaire</p><span id="resultsCA"></span>
        </div>
    </div>
    <div id="derniéreDonnées">
        <div class="Donnée">
            <p>  Le CA moins les charges</p><span id="total"></span>
        </div>
        <div class="Donnée">
            <p> Total des charges</p><span id="resultsCG" class="resultsCG"></span>
        </div>    
    </div>
</fieldset>
</main>
