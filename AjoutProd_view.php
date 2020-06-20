<?php include("verify_admin.php"); ?>
<h3>Ajouter des produits</h3>
<form method="post">
  <?php
  while ($fetch_meta=$query_meta->fetch()) {
    if ($fetch_meta->type_balise == 'input') {
      if ($fetch_meta->type_input == 'text') {
        echo "<label>".$fetch_meta->label."</label>";
        echo "<input type='".$fetch_meta->type_input."' name='".$fetch_meta->name."' maxlength='".$fetch_meta->maxlength."' $fetch_meta->required><br>";
        echo "</input>";
      }
      elseif ($fetch_meta->type_input == 'number') {
        echo "<label>".$fetch_meta->label."</label>";
        echo "<input type='".$fetch_meta->type_input."' name='".$fetch_meta->name."' maxlength='".$fetch_meta->maxlength."' min='".$fetch_meta->min."'$fetch_meta->required><br>";
        echo "</input>";
      }
      elseif ($fetch_meta->type_input == 'file') {
        echo "<label>".$fetch_meta->label."</label>";
        echo "<input type='".$fetch_meta->type_input."' name='".$fetch_meta->name."' value='".$fetch_meta->value."' accept='".$fetch_meta->type_format."' $fetch_meta->required><br>";
        echo "</input>";
      }
    }
    elseif ($fetch_meta->type_balise == 'textarea') {
      echo "<textarea name='".$fetch_meta->name."' rows='8' cols='80' placeholder='".$fetch_meta->placeholder."' maxlength='".$fetch_meta->maxlength."' $fetch_meta->required>";
      echo "</textarea><br>";
    }
  }
   ?>
  <input type="submit" name="boutonAjoutProd" value="Ajouter">
</form>

<?php
if(isset($_POST['boutonAjoutProd'])) {
      if ($ajout->rowcount()==1) {
        ?><p>Produit ajouté</p><?php
      } else {
        ?><p>Impossible de créer ce produit, veuillez réessayer</p><?php
      }
  }
 ?>
