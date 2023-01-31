<?
include "connexion.php"
//include "auth_session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	        <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

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
                        <h2 class="form-title">Entrez votre information</h2>
                        <form method="POST" class="register-form" id="register-form">

                            <div class="form-group">
                                <input type="number" name="cin" id="email" placeholder="CIN"/>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email"/>
                            </div>



                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Envoye"/>
                            </div>
                        </form>
                         <a href="login.php" class="signup-image-link">Rotour page connexion</a>
                    </div>
                </div>
            </div>
        </section>

</body>
</html>