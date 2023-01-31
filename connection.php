<?php
   try{
      $bdd=new PDO("mysql: host=localhost; dbname=newbase","root","");
   }
   catch(Exception $e){
      die('erreur'. $e->getMessage());
      echo "<br>";
   }

?>