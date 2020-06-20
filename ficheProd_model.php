<?php
include("bd_connect.php");
$ficheprod = $dbh->query('SELECT * FROM produit where id_prod='.$_GET["id"])->fetch();

//création des cookies des produits ajoutés au panier
if (isset($_POST["boutonPanier"]) && isset($_SESSION['login'])) {
  $cookieidprod = $ficheprod['id_prod'];
  $qttprod = $ficheprod['quantiteProd'];
  if (isset($_COOKIE[$_SESSION['login']])) {
    foreach ($_COOKIE[$_SESSION['login']] as $name => $value) {
      //on bloque la quantité maximum si on l'a atteinte
      if ($value >=$qttprod) {
        setcookie($_SESSION['login']."[".$cookieidprod."]",$qttprod, time() + 1800, null, null, false, true);
      }
      else {
        if ($cookieidprod == $name) {
          //on augmente la quantité de 1 si le produit est déjà dans le panier
          setcookie($_SESSION['login']."[".$cookieidprod."]",$value+1, time() + 1800, null, null, false, true);
        }
        else {
          setcookie($_SESSION['login']."[".$cookieidprod."]",1, time() + 1800, null, null, false, true);
        }
      }
    }
  }
  else {
    setcookie($_SESSION['login']."[".$cookieidprod."]",1, time() + 1800, null, null, false, true);
  }
  header("Location: index.php?page=panier_controller");
  exit();
}
 ?>
