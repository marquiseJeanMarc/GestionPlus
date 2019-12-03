<main>
  <div id="formulaireAccueil">
    <div id="CatTypeCat">
      <form action="<?php echo WEBROOT ?>Categorie/create" method="POST">
        <fieldset>
          <legend>Veuillez entrez une catégorie</legend>         
          <?php
            if(isset($categories)){
              foreach ($categories as $key => $categorie) {
                echo '<option value= "'.$categorie ->getId().'">'.$categorie->getNom_categorie().'</option>';
              }
            }
          ?>       
        </fieldset>
      </form>
      <form action="<?php echo WEBROOT ?>TypeCategorie/create" method="POST">
        <fieldset>
          <legend>Veuillez entrez une gamme</legend>
          <p>Ex: chaussures d'homme, viande, buffet...</p>
          <input type="text" name="nom_type_categorie" title="entrez votre sous catégorie">
          <input type="text" name="fk_c" title="entrez votre sous catégorie">
        </fieldset>
      </form>
    </div>
    <form id="formProduits" action="<?php echo WEBROOT ?>Produit/create" method="POST">
      <fieldset id="fieldsetProduit">
        <legend>Veuillez entrez un produit</legend>
        <div id="labelInput">
          <div id="fieldsetProduitLabel">
            <label id="lavelNom">Entrez un nom : </label>
            <label id="labelDescription">Entrez la description : </label>
            <label id="labelImage" class="img">Choisir une image : </label>
            <input type="submit" class="push_button blue" value="Ajouter" title="botton de validation">
          </div>
          <div id="fieldsetProduitInput">
            <input type="text" name="nom_produit" id="nom_produit" title="entrez le nom de votre produit">
            <textarea name="description_produit" id="description_produit" title="entrez une description du produit"></textarea>
            <input type="file" name="img" class="img" title="choisir une image">
          </div>  
        </div>   
      </fieldset>
    </form>
  </div>
</main>

<?php
// afficher le nom et prenom quand il y un new id user qui se trouve dans le controller user signin ligne 99
if(!empty($categorie)){
  foreach ($categorie as $key => $categorie){
    echo $categorie->getNom().'<br/>';
    echo $categorie->getDescription().'<br/>';
    echo '<img src="'.WEBROOT.'img/'.$categorie->getImage().'">';
  }
}
?>


