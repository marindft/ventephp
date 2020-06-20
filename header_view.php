<?php if (!isset($_SESSION["login"])) {
?>
<a href="index.php"><button type="button" name="boutonAccueil">Accueil</button></a>
  <a href="/vente/index.php?page=connexion_controller"><button type="button" name="boutonConnexion">Connexion</button></a>
  <a href="/vente/index.php?page=inscription_controller"><button type="button" name="boutonInscription">Inscription</button></a>
  <a href="/vente/index.php?page=panier_controller"><button type="button" name="boutonPanier">Mon Panier</button></a>
  <?php
}
else {
  ?>
  <form method="post">
    <a href="/vente/index.php"><button type="button" name="boutonAccueil">Accueil</button></a>
    <a href="/vente/index.php?page=panier_controller"><button type="button" name="boutonPanier">Mon Panier</button></a>
    <?php echo $_SESSION['login'];?>
    <input type="submit" name="boutonDeconnexion" value="Déconnexion">
  </form>
  <?php
}
?>
