<?php
//on verifie si l'utilisateur est bien connecté en temps qu'admin
  if ((!isset($_SESSION["login"])) || (isset($_SESSION["login"]) && $_SESSION["login"] !== 'admin')) {
    header("Location: /vente/index.php");
    exit();
  }
?>
