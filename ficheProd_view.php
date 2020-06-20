<a href="index.php" id="retour"><button type="button" name="boutonAccueil">Retour</button></a>
<div class="imageProd">
  <img src="img/<?php echo $ficheprod["imgProd"]; ?>" alt="image de <?php echo $ficheprod["nomProd"]; ?>">
</div>
<div class="infosProd">
  <h2><?php echo $ficheprod["nomProd"]; ?></h2>
  <h4><?php echo $ficheprod["prixProd"]; ?>€</h4>
  <p><?php echo $ficheprod["descriptionProd"]; ?></p>
  <form method="post">
    <input type="submit" name="boutonPanier" value="Ajouter au panier">
  </form>
</div>
<?php
  if (isset($_POST["boutonPanier"]) && !isset($_SESSION['login'])) {
    ?><p><a href="/vente/index.php?page=connexion_controller">Connectez-vous</a> ou <a href="/vente/index.php?page=inscription_controller">inscrivez-vous</a> pour pouvoir continuer</p><?php
  }
 ?>
