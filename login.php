<?php
    $bdd=new PDO("mysql: host=localhost; dbname=newbase","root","");
    session_start();
    // When form submitted, check and create user session.
    $msg = "";

    if (isset($_POST['signin'])) {
    $v1 = $_POST['cin'];
    $v2 = $_POST['pass'];



        $query= "SELECT * FROM `encadrant` WHERE mat='$v1' AND pass='$v2'";
        $result = $bdd->query($query);
        $reponse=$result->fetchall();
        $i = 0;
        foreach ($reponse as $ligne) {
        $i++;}


        $query= "SELECT * FROM `users` WHERE cin='$v1' AND password='$v2'";
        $result = $bdd->query($query);
        $reponse=$result->fetchall();
        $j = 0;
        foreach ($reponse as $ligne) {
        $j++;}

           $msg = "";
     if($v1 == "11661407" && $v2 == "0000") {
            $_SESSION['Username'] = "11661407";
            header("Location: profile.php");
            }

      

     elseif ($j == 1) {

            if($v1 == "11661407")
            {
            $_SESSION['Username'] = "11661407";
            header("Location: dashboard1.php");
            }
            else
            {
            $_SESSION['username'] = $_POST['cin'];
            header("Location: profileuser.php");
            }


        }else

            $msg = "<div class='form'>
                  Incorrect CIN / Mot Pass<br/>
                  <p>clique ici pour <a href='login.php'>Reconnexion</a>.</p>
                  <p class='link'><a href='resetpass.php'>Vous avez oublié votre mot de passe ·</a>.</p>
                  </div>";
                  }
        
    
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    
    <link rel="stylesheet" href="css1/style.css">
     </head>
      <body>                         <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="resetpass.php" class="signup-image-link">Vous avez oublié votre mot de passe</a>
                        <a href="inscription.php" class="signup-image-link">Ecrire nouveau compte</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Veuillez vous connecter</h2>
                        <h5 class="form-title"><?php echo $msg;?></h5>
                        <form method="POST" class="register-form">
                            <h3 name="info">



                                
                            </h3>
                            <div class="form-group">
                                <input type="text" name="cin" required id="CIN" placeholder="CIN,Matrocul,Admin"/>
                            </div>
                            <div class="form-group">
                                
                                <input type="password" name="pass" required id="your_pass" placeholder="Mot pass"/>
                            </div>

                            <div class="form-group form-button">
                    <input type="submit" name="signin" id="signin" class="form-submit" value="Entre"/>
                            </div>
                        </form>
                    
                </div>
            </div>
        </section>

    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
                        </body>
                        </html>