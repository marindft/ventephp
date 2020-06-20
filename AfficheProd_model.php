<?php
  include('bd_connect.php');
  //affichage de tout les produits via la barre de recherche
  if (isset($_POST['boutonRechercher'])) {
    $affiche = $dbh->prepare('SELECT * FROM produit where nomProd LIKE "%'.$_POST['recherche'].'%" order by nomProd');
    $affiche->execute();
  }
  else {
    $affiche = $dbh->prepare('SELECT * from produit order by nomProd');
    $affiche->execute();
  }
 ?>
