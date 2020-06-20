<form method="post">
  <input type="text" placeholder="rechercher" name="recherche" required>
  <input type="submit" name="boutonRechercher" value="Rechercher">
</form>
<?php while ($rep = $affiche->fetch()) {
  ?>
  <div class="produit">
    <a href="/vente/index.php?page=ficheProd_controller&id=<?php echo $rep['id_prod'];?>">
      <img src="img/<?php echo $rep['imgProd']; ?>" alt="image de <?php echo $rep['nomProd']; ?>">
    </a>
    <div class="">
      <span><?php echo $rep['nomProd'];?></span><br>
      <span><?php echo $rep['prixProd'];?>€</span><br>
    </div>
  </div>
   <?php
} ?>
