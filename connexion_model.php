<?php
  include("bd_connect.php");
  $connexion = $dbh->prepare('SELECT id_user, password FROM user WHERE login = :login');

//création de la session quand un utilisateur s'est connecté
  if (isset($_POST["boutonConnexion"])) {
    $login=$_POST["login"];
    $password=$_POST["password"];
    $tab = array('login' => $login);
    $connexion->execute($tab);
    $resultat = $connexion->fetch();
    $PasswordOk = password_verify($password,$resultat['password']);
    if ($connexion->rowcount()==1 && $PasswordOk) {
      session_start();
      $_SESSION['login'] = $login;
      header("Location: /vente/index.php");
      // exit();
    }
  }
 ?>
