


<?php
 try{
      $bdd=new PDO("mysql: host=localhost; dbname=newbase","root","");
   }
   catch(Exception $e){
      die('erreur'. $e->getMessage());
      echo "<br>";
   }

    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }



    $v = $_SESSION["username"];

        $res= "SELECT * FROM `users` WHERE cin='$v' limit 1";
        $result = $bdd->query($res);
        $reponse=$result->fetchall();
        $i = 0;
        foreach ($reponse as $ligne) {
        $i++;
            $p = $ligne ['password'];
    }

// MODIFICATION NOM
     $msg = "";
     $msg1 = "";
     $msg2 = "";

   
   if(isset($_POST['b1'])){
         $no = $_POST['nom'];
    if ($no == "") {
        $msg = "<font color = 'red'>  SVP : Ecrire votre nom</font>";
    }else{
   $req="UPDATE users SET nomcomlet='$no' WHERE cin='$v'";
   $result=$bdd->exec($req);
   $msg = "<h5><font color = 'green'>Modification terminer</font></h5>";
    }

}

   if(isset($_POST['b2'])){
         $no = $_POST['pass'];
         $pass1 = $_POST['pass1'];
    if (($no == "")||($pass1 != $p)) {
        $msg1 = "<h5><font color = 'red'>  SVP : Ecrire votre mot passe </font></h5>";
    }else{
   $req="UPDATE users SET password='$no' WHERE cin='$v'";
   $result=$bdd->exec($req);
   $msg1 = "<h5><font color = 'green'>Modification terminer</font></h5>";
    }

}

   if(isset($_POST['b3'])){
         $no = $_POST['tele'];
    if ($no == "") {
        $msg2 = "<h5><font color = 'red'>  SVP : Ecrire votre numero</font></h5>";
    }else{
   $req="UPDATE users SET tele='$no' WHERE cin='$v'";
   $result=$bdd->exec($req);
   $msg2 = "<h5><font color = 'green'>Modification terminer</font></h5>";
    }

}


// MODIFICATION COMPETONCES
 /*
    $msg = "";
   if(isset($_POST['b1'])){
    $nom = $_POST['nom'];
    if ($nom = "") {
          $msg = "SVP : Ecrire votre nom";
    }else{
               $req="UPDATE users SET nomcomlet='$nom' WHERE cin='$v'";
               $result=$bdd->exec($req);
                $msg = "Modifation terminer";
   
   
    }
  
}


   $com = $_POST['com'];
   if(isset($_POST['b2'])){
   $req="UPDATE users SET competonce= '$com' WHERE cin='$v'";
   $result=$bdd->exec($req);
}
// MODIFICATION mot pass CORRECTION
 /*  $p = $_POST['pass'];
   if(isset($_POST['b4'])){
   $req="UPDATE users SET password= '$p' WHERE cin='$v'";
   $result=$bdd->exec($req);*/

?>
<!DOCTYPE html>
<html dir="ltr" lang="en"> 

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Profile</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">

        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">

            <div class="scroll-sidebar">

                               <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profileuser.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profil</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="offresu.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Gestion des annonces</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dmndsuser.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Gestion des Demandes</span>
                            </a>
                        </li>



                        <li>
                                <a href="login.php"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Deconnexion</a>
                        </li>
                       
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

       <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profil</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">

                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box"> <h4 class="page-title">Stagaire : <?php echo "<b>".$ligne ['nomcomlet']."</b>";?></h4> </div>
                        <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Email : <?php echo $ligne ['email'];?></label>
                                        <div class="col-md-12 border-bottom p-0">

                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">CIN : <?php echo $ligne ['cin'];?></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Faculte : <?php echo $ligne ['fac'];?></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Niveau : <?php echo $ligne ['niv'];?></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Adresse : <?php echo $ligne ['adr'];?></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Telephone : <?php echo $ligne ['tele'];?></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            
                                        </div>
                                    </div>
                                    
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" class="form-horizontal form-material">
                                    
                                    
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Nom <?php echo $msg;?></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="user001"
                                                class="form-control p-0 border-0" name="nom"
                                                id="example-email">
                                                <button name="b1" class="btn btn-success">Modifier</button>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Mot Passe <?php echo $msg1;?></label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Mot pass courant" name="pass1" class="form-control p-0 border-0">
                                            <input type="text" placeholder="Mot pass nouveau" name="pass" class="form-control p-0 border-0">
                                            <button name="b2" class="btn btn-success">Modifier </button>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Telephone <?php echo $msg2;?></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number"  placeholder="+216 12345678" class="form-control p-0 border-0" name="tele"
                                                id="example-email">
                                                <button  name="b3" class="btn btn-success">Modifier</button>
                                        </div>
                                    </div>
                                    
                                    

                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"><a
                    href="https://www.wrappixel.com/">OACA</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>