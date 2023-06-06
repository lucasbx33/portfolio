<?php 
require_once ("connexion.php");
if (!empty($_GET['id'])) {

	$id = $_GET['id'];
	$query1 = $db->query(" DELETE  FROM `ads` WHERE `ads`.`id` = $id ");
}
header("location: index.php")

 ?>