<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }

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
    <title>Ample Admin Lite</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="delete.css">
   <link href="css/style.min.css" rel="stylesheet">

</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

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
                        <h4 class="page-title">Gestion des demandes</h4>
                    </div>

                </div>

            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form method="POST">
                            <h3 class="box-title">Listes Demandes envoyer</h3>
                            <p class="text-muted"><code></code></p>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            
                                            <th class="border-top-0">Titre</th>
                                            <th class="border-top-0">description</th>
                                            <th class="border-top-0">Reponce</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
<?php

    include "connection.php";
    //RECHERCHE SI DEMANDE ACCEPTE
    
    $cin = $_SESSION["username"];
    
    $req="SELECT * FROM demandeaccepte where CIN = $cin ;";
    $result=$bdd->query($req);
    $reponse=$result->fetchall();
    $i = 0;
    foreach ($reponse as $ligne) {
        $i++;}

        if ($i > 0) {
            
        echo " <tr>";
         echo " <td>";

         echo " </td>";
         echo " <td>";
         echo $ligne ['titre'];
         echo " </td>";
         echo " <td>";
         echo $ligne ['competonce'];
         echo " </td>";
         echo " <td>";
         echo "<font color = 'green'>Accepte</font>";
         echo " </td>";
       echo " </tr>";
        }


        //RECHERCHE SI DEMANDE REFUSE


$req="SELECT * FROM demanderefuse where cin = '$cin';";
$result=$bdd->query($req);
$reponse=$result->fetchall();
$j = 0;
foreach ($reponse as $ligne) {
    $j++;}

    if ($j > 0) {
        
    echo " <tr>";
     echo " <td>";

     echo " </td>";
     echo " <td>";
     echo $ligne ['titre'];
     echo " </td>";
     echo " <td>";
     echo $ligne ['competonce'];
     echo " </td>";
     echo " <td>";
     echo "<font color = 'red'>Refuse</font>";
     echo " </td>";
   echo " </tr>";
        }

$req="SELECT * FROM demandeatt where cin = '$cin';";
$result=$bdd->query($req);
$reponse=$result->fetchall();
$k = 0;
foreach ($reponse as $ligne) {
    $k++;}

    if ($k > 0) {
        
    echo " <tr>";
     echo " <td>";
     echo " </td>";
     echo " <td>";
     echo $ligne ['titre'];
     echo " </td>";
     echo " <td>";
     echo $ligne ['competonce'];
     echo " </td>";
     echo " <td>";
     echo "<font color='blue'>En Attent</font>";
     echo " </td>";
   echo " </tr>";
        }


?>

                                    </tbody>
                                </table>
                            
                            </form>


                            <form method="POST">
                            <h3 class="box-title">Listes Demandes recu</h3>
                            <p class="text-muted"><code></code></p>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            
                                            <th class="border-top-0">Titre</th>
                                            <th class="border-top-0">description</th>
                                            <th class="border-top-0">Reponce</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
<?php

    include "connection.php";
    //RECHERCHE SI DEMANDE ACCEPTE
    
    $cin = $_SESSION["username"];
    
    $req="SELECT * FROM demandeaccepte where CIN = $cin ;";
    $result=$bdd->query($req);
    $reponse=$result->fetchall();
    $i = 0;
    foreach ($reponse as $ligne) {
        $i++;}

        if ($i > 0) {
            
        echo " <tr>";
         echo " <td>";

         echo " </td>";
         echo " <td>";
         echo $ligne ['titre'];
         echo " </td>";
         echo " <td>";
         echo $ligne ['competonce'];
         echo " </td>";
         echo " <td>";
         echo "<font color = 'green'>Accepte</font>";
         echo " </td>";
       echo " </tr>";
        }


        //RECHERCHE SI DEMANDE REFUSE


$req="SELECT * FROM demanderefuse where cin = '$cin';";
$result=$bdd->query($req);
$reponse=$result->fetchall();
$j = 0;
foreach ($reponse as $ligne) {
    $j++;}

    if ($j > 0) {
        
    echo " <tr>";
     echo " <td>";

     echo " </td>";
     echo " <td>";
     echo $ligne ['titre'];
     echo " </td>";
     echo " <td>";
     echo $ligne ['competonce'];
     echo " </td>";
     echo " <td>";
     echo "<font color = 'red'>Refuse</font>";
     echo " </td>";
   echo " </tr>";
        }

$req="SELECT * FROM demandeatt where cin = '$cin';";
$result=$bdd->query($req);
$reponse=$result->fetchall();
$k = 0;
foreach ($reponse as $ligne) {
    $k++;}

    if ($k > 0) {
        
    echo " <tr>";
     echo " <td>";

     echo " </td>";
     echo " <td>";
     echo $ligne ['titre'];
     echo " </td>";
     echo " <td>";
     echo $ligne ['competonce'];
     echo " </td>";
     echo " <td>";
     echo "<font color='blue'>En Attent</font>";
     echo " </td>";
   echo " </tr>";
        }

?>

                                    </tbody>
                                </table>
                            
                            </form>





                        </div>
                        </div>
                    </div>
                </div>

            </div>

            <footer class="footer text-center"><a
                    href="https://www.wrappixel.com/"></a>
            </footer>

        </div>

    </div>

    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    
    <script src="js/waves.js"></script>
    
    <script src="js/sidebarmenu.js"></script>
    
    <script src="js/custom.js"></script>
</body>

</html>