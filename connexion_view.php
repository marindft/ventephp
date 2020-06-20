<?php
  if (isset($_SESSION["login"])) {
    if (isset($_POST["boutonConnexion"])) {
        echo $_SESSION['login'];
        ?>
        <p> vous êtes connecté</p>
        <?php
    }
  }
  else {
    if (isset($_POST["boutonConnexion"])) {
      ?>
      <p>Mauvais identifiant ou mot de passe !</p>
      <?php
    }
    if (isset($_POST["boutonDeconnexion"])) {
      ?>
      <p>Vous avez été déconnecté</p>
      <?php
    }
    ?>
    <form method="POST">
      <input type="text" name="login" placeholder="Nom d'utilisateur"> <br>
      <input type="password" name="password" placeholder="Mot de passe"> <br>
      <input type="submit" name="boutonConnexion" value="Se connecter">
    </form>
    <?php
  }
 ?>
