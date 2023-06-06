<?php

function getDataBaseConnexion(){
   $user = "root";
   $pass = "";
   try{ 
      $db = new PDO('mysql:host=localhost;
                   dbname=velo;
                   charset=utf8;
                   port=3306;',
                   $user,
                   $pass);
      //echo "   Connexion reussi";
	  
      return $db;

   }catch(Exception $e){
      die("Erreur : ".$e->getMessage());
   }
  
}
$db = getDataBaseConnexion();


?>