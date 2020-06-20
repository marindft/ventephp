<?php
include("bd_connect.php");

$modif = $dbh->query('SELECT * from produit');
$updateProd = $dbh->prepare('UPDATE produit set prixProd=:prixProd WHERE nomProd=:nomProd');
//modification du prix des produits dans la table
if (isset($_POST["boutonModifProd"])) {
  $nomProd=$_POST["choix"];
  $prixProd=$_POST["prixProd"];
  $tabModif = array('nomProd' => $nomProd, 'prixProd' => $prixProd);
  $updateProd->execute($tabModif);
}
?>
