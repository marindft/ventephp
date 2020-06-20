<?php
//destruction de la session
  if (isset($_POST['boutonDeconnexion'])) {
    session_destroy();
    header("Location: /vente/index.php");
    exit();
  }
?>
