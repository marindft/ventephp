<?php
include("verify_admin.php");
?>
<h3>Modifier des produits</h3>
<form method="post">
  <select name="choix">
  <?php
   while ($rep = $modif->fetch()) {
    ?>
  <option value"<?php echo $rep['nomProd'];?>"><?php
   echo $rep['nomProd'];
   ?></option>
    <?php
}
  ?>
</select> <br>
<input type="number" name="prixProd" placeholder="Prix Produit" maxlength="4" min="1" required> <br>
<input type="submit" name="boutonModifProd" value="Modifier">
</form>

<?php if ($updateProd->rowcount()==1) {
  ?><p>Produit modifié</p><?php
} ?>
