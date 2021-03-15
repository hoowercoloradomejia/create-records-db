<?php
   $name = $_REQUEST["name"];
   $genero = $_REQUEST["genero"];
   $talla1 = $_REQUEST["talla1"];
   $talla2 = $_REQUEST["talla2"];
   $talla3 = $_REQUEST["talla3"];

   $host = "localhost";
   $dbname = "disfraz";
   $username = "root";
   $password = "";

   $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
   $sql = " INSERT INTO `mustafa` (`id`, `name`, `genero`, `talla1`, `talla2`, `talla3`) VALUES (NULL, '$name', '$genero', '$talla1', '$talla2', '$talla3')";

   $q = $cnx->prepare($sql);

   $result = $q->execute();

   if($result){
      echo " El disfraz fue almacenado Exitosamente";
   }else{
      echo "Disfraz no almecenado $name";
   }


?>
