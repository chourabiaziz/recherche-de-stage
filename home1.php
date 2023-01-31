<?php
 include "connection.php";
  if(isset($_POST['vue'])){
        $req="UPDATE total SET totA = totA + '1'";
        $result=$bdd->exec($req);
  }
  


?>




<!DOCTYPE html>
<!--Code by Divinector (www.divinectorweb.com)-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>How to Create responsive Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">    
</head>
<body>
    <header>
    <div class="wrapper">

<ul class="nav-area">

<li><a href="inscription.php">Inscription</a></li>
<li><a href="login.php">Connexion</a></li>
</ul>
</div>


<div class="welcome-text">
        <h1>
Demande Stage <span>(OACA)</span></h1>
<a href="indexOffres.php" name="vue">OFFRES STAGE</a>
    </div>
</header>


</body>
</html>
