<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
?>

<?php
include "connection.php";
$user = $_SESSION["username"];

/*if(isset($_POST['Accepte'])){
$cin1 = $_POST['v'];
$req="SELECT * FROM demandeatt where cin=$cin1;";
$result=$bdd->query($req);
$reponse=$result->fetchall();

foreach ($reponse as $ligne) 
{ 
$nom = $ligne ['nomcomlet'];
$titre = $ligne ['titre'];                  
$competonce = $ligne ['competonce'];
}

$req1 = "INSERT INTO `demandeaccepte` VALUES ('$cin1', '$nom', '$titre', '$competonce');";
$result1=$bdd->exec($req1);
if ($result1) {
    $sql = "DELETE FROM demandeatt WHERE cin = $cin1";
    $result0=$bdd->exec($sql);
}
}


     



if(isset($_POST['Refuse'])){
$cin1 = $_POST['v'];
$req="SELECT * FROM demandeatt where cin = $cin1;";
$result=$bdd->query($req);
$reponse=$result->fetchall();

foreach ($reponse as $ligne) 
{ 
$nom = $ligne ['nomcomlet'];
$titre = $ligne ['titre'];                   
$competonce = $ligne ['competonce'];
}




$req1 = "INSERT INTO `demanderefuse` (`CIN`, `nomcomlet`, `titre`, `competonce`) VALUES ('$cin1', '$nom', '$titre', '$competonce');";
  $result1=$bdd->exec($req1);
  if ($result1){
  echo "<strong>".$nom."  de numero CIN  ".$cin."  est Refuse </strong><br>";
  // FOREIGN KEY (`cin`) REFERENCES `users` (`cin`))
  $sql = "DELETE FROM demandeatt WHERE cin = $cin1";
  $result0=$bdd->exec($sql);
}}

*/
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
    <title></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="delete.css">

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
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="profileuser.php">
                        <!-- Logo icon -->

                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="cap1.png" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
  
                </div>


            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
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
                                <span class="hide-menu">Offres Stages</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tachesEncadrantStagaire.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Les Sujets a Faire</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dmndsuser.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Demandes</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="contactu.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Contact US</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chatsu.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Messages Recu</span>
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
                        
                    </div>

                </div>

            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            </div>
                           



                            <p class="text-muted"><code></code></p>
                            <div class="table-responsive">
<div class="table-responsive">
                                <h3 class="box-title mb-0">Les Sujet a Faire</h3>
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">stagaire</th>
                                            <th class="border-top-0">Sujet</th>
                                            <th class="border-top-0">Encadrant</th>
                                            <th class="border-top-0">Date debut</th>
                                            <th class="border-top-0">Date Fin</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
                                            include "connection.php";
                                            $mat = $_SESSION["username"];
                                            $req="SELECT * FROM sujets where cin = '$user';";
                                            $result=$bdd->query($req);
                                            $reponse=$result->fetchall();
                                            $i = 0;
                                            foreach ($reponse as $ligne) {
                                                $i++;
                                                  echo " <tr>";
                                                                 echo " <td>";
                                                                 echo $i;
                                                                 echo " </td>";
                                                                 echo " <td>";
                                                                 echo $ligne ['cin'];
                                                                 echo " </td>";
                                                                 echo " <td>";
                                                                 echo $ligne ['sujet'];
                                                                 echo " </td>";
                                                                 echo " <td>";
                                                                 echo $ligne ['mat'];
                                                                 echo " </td>";
                                                                 echo " <td>";
                                                                 echo $ligne ['datedb'];
                                                                 echo " </td>";
                                                                 echo " <td>";
                                                                 echo $ligne ['datefn'];
                                                                 echo " </td>";
                                                               echo " </tr>";
                                            }
                       
                                        ?>
                                    </tbody>
                                </table>
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