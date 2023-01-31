<?php
    session_start();
    $res = $_SESSION['encadrant'];
    if(!isset($res)) {
        header("Location: login.php");
        exit();
    }
?>

<?php
include "connection.php";
$msg1 = "";


if(isset($_POST['addsujet'])){
    $new = $_POST['new'];
  $req2 = "select * from sujet where sujet = '$new';";
  $result=$bdd->query($req2);
  $a = 0;
  foreach ($result as $ligne) {
    $a++;}

    if ($a > 0) 
      $msg1  =  "<font color = 'red'>Sujet deja dans la list</font>";
    else


            if ($new != "") {
              $sql ="INSERT INTO `sujet` values('$new')";
              $result1=$bdd->exec($sql);
              $msg1 = "<p><font color = 'green'>sujet ajoute</font></p>";
            }else
              $msg1 = "SVP :  ecrire sujet";
            


 }
$msg = "";
if(isset($_POST['aff'])){
    $Encadrent = $res;
    $Stagaire = $_POST['list1'];
    $sujet = $_POST['list2'];
    $date1 = $_POST['dated'];
    $date2 = $_POST['datef'];
    if ($date1 >= $date2) {
        $msg = "SVP : Date fin > Date debut";
    }elseif ($Stagaire == "stagaire" || $sujet == "sujet") {
        $msg = "SVP : selection des champs";
    }else{
                $affect="INSERT INTO `sujets` (`cin`, `mat`, `datedb`, `datefn`, `sujet`) VALUES ('$Stagaire', '$Encadrent', '$date1', '$date2', '$sujet')";
                $result1=$bdd->exec($affect);
                if ($result1)
                $msg = "<h5 class='box-title'><strong>operation TERMINER</strong><h/5>";
    }

    
                

    
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewpor
    t" content="width=device-width, initial-scale=1">
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
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="workEncadrant.php">
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
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="workEncadrant.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profileencad.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="EncadrantListStagaires.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">List Stagaires</span>
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
                        <h4 class="page-title">Liste Encadrents</h4>
                    </div>

                </div>

            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            </div>
                            <h3 class="box-title">Ecrire Sujet a Faire <?php echo $msg; ?> </h3>
                            <h4 class="box-title"><?php echo $msg; ?> </h4>



                            <p class="text-muted"><code></code></p>
                            <div class="table-responsive">


                            
                    <form method="POST">

                            <h4><?php echo $msg1; ?></h4>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0"></label>
                                        <div class="col-md-12 border-bottom p-0">
                                    <input type="text" name="new" placeholder="nouvelle sujet"
                                                class="form-control p-0 border-0">
                                 <button name="addsujet" class='btn btn-success'>Ajoute</button>
                                </div>
                                    </div>
                                
                            
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0"></h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                    <select name="list1" class="form-select shadow-none row border-top">
                                         <option value="stagaire">list stagaire</option>

<?php
                                    
                                $req="SELECT * FROM affect where mat = '$res';";
                                            $result=$bdd->query($req);
                                            $reponse=$result->fetchall();
                                            $x = 0;
                                            foreach ($reponse as $ligne) {
                                                $x++;

                                            echo "<option value=".$ligne ['cin'].">".$ligne ['nomcomlet']."</option>";
                                            }
?>                     
                                        

                                    </select>
                                </div>
                            </div>
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0"></h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                    <select name="list2" class="form-select shadow-none row border-top">
                                        <option value="sujet">Sujets</option>
<?php
                                            
                                            $req="SELECT * FROM sujet;";
                                            $result=$bdd->query($req);
                                            $reponse=$result->fetchall();
                                            $y = 0;
                                            foreach ($reponse as $ligne) {
                                                $y++;

                                            echo "<option value=".$ligne ['sujet'].">".$ligne ['sujet']."</option>";
                                             }
                                             echo " </select>";
                                            
?> 
                                    </select>
                                </div>
                            </div>
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Date Debut : </h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                    <input type="date" id="birthday" name="dated">
                                </div>
                            </div>
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Date Fin : </h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                     <input type="date"  name="datef">
                                </div>
                            </div>
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0"></h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                     <button name="aff" class="btn btn-success">Envoyer</button>
                                </div>










                            </div>
                            <div class="table-responsive">
                                <h3 class="box-title mb-0">Liste des Stagaires Affecte : </h3>
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">cin stagaire</th>
                                            <th class="border-top-0">Date debut</th>
                                            <th class="border-top-0">Date Fin</th>
                                            <th class="border-top-0">Sujet</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
                                            include "connection.php";
                                            
                                            $req="SELECT * FROM sujets where mat = '$res';";
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
                                                                 echo $ligne ['datedb'];
                                                                 echo " </td>";
                                                                 echo " <td>";
                                                                 echo $ligne ['datefn'];
                                                                 echo " </td>";
                                                                 echo " <td>";
                                                                 echo $ligne ['sujet'];
                                                                 echo " </td>";
                                                               echo " </tr>";
                                            }
                        echo $i;
                                        ?>
                                    </tbody>
                                </table>
                            </div>






                            </form>

            </div>

            <footer class="footer text-center"><a
                    href="https://www.wrappixel.com/">OACA</a>
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