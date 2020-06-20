<?php
$page = "AfficheProd_controller";

if (empty($page)) {
  $page = trim($page.".php");
}

$page = str_replace("../","protect",$page);
$page = str_replace(";","protect",$page);
$page = str_replace("%","protect",$page);



if (isset($_SESSION['login'])) {
  if (isset($_GET["page"])) {
    $page=$_GET["page"];
  }
}
else {
  if (isset($_GET["page"])) {
    $page=$_GET["page"];
  }
}
include $page.".php";
 ?>
