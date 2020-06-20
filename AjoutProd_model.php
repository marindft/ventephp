<?php
include("bd_connect.php");
$table_cible="produit";

$sql_meta="select * from meta_table where table_cible='".$table_cible."' order by ordre";
$query_meta=$dbh->prepare($sql_meta);
$query_meta->execute();
$query_meta->setFetchMode(PDO::FETCH_OBJ);

//ajout d'un produit à la base de données
if (isset($_POST["boutonAjoutProd"]))
{
	$array_champs=array();
	$array_values=array();
	$sql_insert="insert into ".$table_cible;

	while ($fetch_meta=$query_meta->fetch())
	{
		if ($fetch_meta->type_champ=='VARCHAR')
		{
			$separateur="'";
		}
		else
		{
			$separateur="";
		}
		array_push($array_champs, $fetch_meta->name);
		array_push($array_values, $separateur.$_POST[$fetch_meta->name].$separateur);
	}

	$sql_insert.=" (".implode(",",$array_champs).") values (".implode(",",$array_values).");";
	$sql_test = $dbh->prepare($sql_insert);
	$sql_test->execute();
	header("Location: index.php?page=AjoutProd_controller");
	exit();
}
 ?>
