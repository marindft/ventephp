<?php
include("bd_connect.php");

$suppr = $dbh->query('SELECT * from produit');
$supprProd = $dbh->prepare('DELETE FROM produit WHERE nomProd=:nomProd');

//si le bouton supprimer est cliqué on supprime le produit de la table
if (isset($_POST["boutonSupprProd"])) {
  $nomProd=$_POST["choix"];
  $tabSuppr = array('nomProd' => $nomProd);
  $supprProd->execute($tabSuppr);
}
?>
