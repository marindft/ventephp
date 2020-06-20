<?php if (isset($_SESSION['login']) && isset($_COOKIE[$_SESSION['login']])) {
  ?><table>
    <tr>
      <th>Produit(s) </th>
      <th>Quantité </th>
      <th>Prix unitaire </th>
      <th>Prix total </th>
      <th></th>
    </tr>
    <?php
    $prixtot = 0;
  foreach ($_COOKIE[$_SESSION['login']] as $name => $value) {
    ?><tr>
      <td><img src="img/<?php echo $panierprod[$name]["imgProd"]; ?>" alt="image de <?php echo $panierprod[$name]["nomProd"]; ?>"></td>
        <td><?php echo $value;?></td>
        <td><?php echo $panierprod[$name]["prixProd"]; ?> €</td>
        <td><?php $prixtotprod = $value*$panierprod[$name]["prixProd"];
        echo $prixtotprod; $prixtot = $prixtot + $prixtotprod;?> €</td>
        <td>
          <form method="post">
            <input type="submit" name="button<?php echo $panierprod[$name]["id_prod"]?>" value="Supprimer">
          </form>
        </td>
      </tr>
  <?php
    }
  ?>
  </table>
  <p>Total : <?php echo $prixtot;?>€</p>
  <form method="post">
    <input type="submit" name="boutonCommande" value="Commander">
  </form>
  <?php
}
else {
  ?><p>Votre panier est vide</p><?php
} ?>
<a href="/vente/index.php"><button type="button" name="boutonRetour">Continuer mes achats</button></a>

<?php
  if (isset($_POST['boutonCommande'])) {
    echo "<script>alert('Commande effectuée');</script>";
  }
 ?>
