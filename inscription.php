<?php


 include "connection.php";
 $err = "";
 $complet = "";
 $errpass = "";
     $v1 = "";
  if(isset($_POST['signup']))
  {

     //comfermer mot pass
        $v = $_POST['re_pass'];
        if ($v != $_POST['pass']) {
           $errpass = "<font color='red'>Verfier votre mot passe</font>";
        }
        else{

    $v1 = $_POST['cin'];
    $v2 = $_POST['name'];
    $v3 = $_POST['Faculte'];
    $v4 = $_POST['Niveau'];
    $v5 = $_POST['Competonces'];
    $v6 = $_POST['email'];
    $v7 = $_POST['pass'];
    $v8 = $_POST['adr'];
    $v10 = $_POST['tele'];
// test si utlisateus deja sauvegarde sur la base

        $query= "SELECT * FROM `users` WHERE cin='$v1'";
        $result = $bdd->query($query);
        $reponse=$result->fetchall();
        $j = 0;
        foreach ($reponse as $ligne) {
        $j++;}
        if($j == 1){
            $err = "deja inscrit clique ici pour <a href='login.php'>Entre</a>";
        }else{
               $req ="INSERT INTO `users` VALUES ('$v1', '$v6', '$v7', '$v4', '$v3', '$v2', '$v5', '$v8','$v10');";
               $res = $bdd->exec($req);  }
             $complet = "<font color='green'>Inscription Terminer</font>";
        }

  }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>


	    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css1/style.css">
</head>
<body>

	                      <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Inscription</h2>
                        
                         <h5 class="form-title"><?php echo $complet;?></h5>
                               <h5 class="form-title"><?php echo $err;?></h5>
                                <h5 class="form-title"><?php echo $errpass;?></h5>




                        <form method="POST"class="register-form">
                            <div class="form-group">
                            
                                <input type="text" name="name" id="name" required placeholder="Nom complet"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="Faculte" id="Faculte" required placeholder="Faculte"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="adr" id="Faculte" required placeholder="adresse"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="Niveau" id="Niveau" required placeholder="Niveau"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="Competonces" id="Competonces" required placeholder="Competonces"/>
                             </div>
                             <div class="form-group">
                                <input type="number" name="cin" id="CIN" min="00999999" max="20000000" required placeholder="CIN"/>
                            </div>

                             <div class="form-group">
                                <input type="number" name="tele" id="CIN" min="20000000" max="99999999"  required placeholder="telephone"/>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" required id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" required id="pass" placeholder="Mot Pass"/>
                            </div>
                        
                            <div class="form-group">
                                <input type="password" name="re_pass" required id="re_pass" placeholder="Repeter Mot pass"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" required class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">deja inscri...</a>
                    </div>
                </div>
            </div>
        </section>

</body>
</html>