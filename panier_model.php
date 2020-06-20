<?php
include("bd_connect.php");

$updateqtt = $dbh->prepare('UPDATE produit SET quantiteProd=:quantite where id_prod=:id');
$supprprod = $dbh->prepare('DELETE FROM produit where id_prod=:id');

//on verifie si on est bien connecté et si les cookies ont été créé
if (isset($_SESSION['login']) && isset($_COOKIE[$_SESSION['login']])) {
  foreach ($_COOKIE[$_SESSION['login']] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        $panierprod[$name] = $dbh->query('SELECT * FROM produit where id_prod='.$name)->fetch();
        //on supprime les produits du panier si on a cliqué sur le bouton
        if (isset($_POST['button'.$name])) {
          setcookie($_SESSION['login']."[".$name."]",$value, time() - 1, null, null, false, true);
          header("Location: /vente/index.php?page=panier_controller");
          exit();
        }
    }
}
//suppression des cookies et des produits dans la table quand la commande est validée
if (isset($_POST['boutonCommande'])) {
  foreach ($_COOKIE[$_SESSION['login']] as $name => $value) {
    $qttprod = $dbh->query('SELECT * FROM produit where id_prod='.$name)->fetch();
    $fincookieidprod = $qttprod['id_prod'];
    $newqtt = $qttprod['quantiteProd'] - $value;
    if ($newqtt <= 0) {
      $tab = array('id' => $name);
      $supprprod->execute($tab);
    }
    else {
      $tab = array('quantite' => $newqtt, 'id' => $name);
      $updateqtt->execute($tab);
    }
    setcookie($_SESSION['login']."[".$fincookieidprod."]",$value, time() - 1, null, null, false, true);
  }
  header("Location: /vente/index.php");
  exit();
}
 ?>
