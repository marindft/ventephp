<?php
include("verify_admin.php");
?>
<h3>Supprimer des produits</h3>
<form method="post">
  <select name="choix">
  <?php
   while ($rep = $suppr->fetch()) {
    ?>
  <option value"<?php echo $rep['nomProd'];?>"><?php
   echo $rep['nomProd'];
   ?></option>
    <?php
}
  ?>
</select> <br>
<input type="submit" name="boutonSupprProd" value="Supprimer">
</form>

<?php if ($supprProd->rowcount()==1) {
  ?><p>Produit supprimé</p><?php
} ?>
