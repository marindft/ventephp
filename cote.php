<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == 'admin') {
  include("GestionProd_controller.php");
}
 ?>
