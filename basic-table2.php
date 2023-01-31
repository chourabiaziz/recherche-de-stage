<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
?>

<?php
include "connection.php";
$msg = "";
if(isset($_POST['sup'])){
     $mat = $_POST['v'];

                 if ($mat == "e1") {
                    $msg == "SVP : selection un champ !";}
                    
                 else{

                 $sql = "DELETE FROM encadrant WHERE mat = '$mat'";
                 $result0=$bdd->exec($sql);
                 $msg == "operation terminer";
                      }
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
    <title>Liste Encadreurs</title>
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

        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard1.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="offres.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Offres Stages</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table12.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Demandes</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Plus info de demandes</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table2.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Liste Encadrant</span>
                            </a>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="statistique.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Statistique</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="contact.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Contact US</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chats.php"
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
                        <h4 class="page-title">Gestion Encadrents</h4>
                    </div>
                          
                </div>

            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            </div>
                            <h3 class="box-title">Liste Encadreurs disponible</h3>
<?php
                            include "connection.php";
                            //include "auth_session.php";
                            if(isset($_POST['btn']))
                            {
                            
                            $mat = $_POST['mat'];
                            $nom = $_POST['nom'];
                            $domaine = $_POST['dom'];
                            $post = $_POST['post'];
                            $pass = $_POST['pass'];
                    
                            $req1 = "INSERT INTO `encadrant`VALUES ('$mat', '$nom', '$domaine', '$post',$pass);";
                               $result1=$bdd->exec($req1);
                               if ($result1){
                               echo "<h3 class='box-title'><strong> l'encadrent   ".$nom."  de numero Matricule ".$mat." est ajoute dans la list Encadrents </strong><h/3>";
                               }else{
                                echo "Encadrent deja dans la list";
                               }}

?>


                            <p class="text-muted"><code></code></p>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Matricule</th>
                                            <th class="border-top-0">Nom Prenom</th>
                                            <th class="border-top-0">Domaine</th>
                                            <th class="border-top-0">Post</th>
                                            
                                           
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                                            
                                                $req="SELECT * FROM encadrant;";
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
                                                                     echo $ligne ['mat'];
                                                                     echo " </td>";
                                                                     echo " <td>";
                                                                     echo $ligne ['nom'];
                                                                     echo " </td>";
                                                                     echo " <td>";
                                                                     echo $ligne ['domaine'];
                                                                     echo " </td>";
                                                                     echo " <td>";
                                                                     echo $ligne ['post'];
                                                                     echo " </td>";
                                                                     
                                                                     echo " </tr>";
                                                                 }


                                    ?>



                                            

                                    </tbody>

                                </table>
                            
                              <form method="POST" class="form-horizontal form-material">

                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Liste d'Encadrant : </h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                    <select name="v" class="form-select shadow-none row border-top">
                                        <option value="e1">List Encadrant</option>
<?php
                                            
                                            $req="SELECT * FROM encadrant;";
                                            $result=$bdd->query($req);
                                            $reponse=$result->fetchall();
                                            $x = 0;
                                            foreach ($reponse as $ligne) {
                                                $x++;
                                echo "<option value=".$ligne ['mat'].">".$ligne ['nom']."</option>";
                                             }

echo "</select>";
/*to do
$mat = $_POST['v'];
if(isset($_POST['sup'])){
     $req0="DELETE FROM encadrant WHERE mat=$mat";
     $result0=$bdd->exec($req0);
}*/
?> 
                                



                                </div>
                            </div>


                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Supprimer :  </h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                     <button name="sup" class="btn btn-success">Supprimer</button>
                            </div></div>
                        </form>



                                        <form method="POST" class="form-horizontal form-material">
                                    <h2>Ajoute nouvelle Encadreur</h2>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Matricule</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input required type="text" name="mat" placeholder="Matricule"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Nom Prenom</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input required type="text" name="nom" placeholder="Nom Prenom"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Domaine</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input required type="text" name="dom" placeholder="Domaine"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Post</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input required type="text" name="post" placeholder="Post"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">mot pass</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input required type="text" name="pass" placeholder="********"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class='form-group mb-4'><div class='col-sm-12'><button type="submit" name="btn" class='btn btn-success'>ajoute</button>
                                    </div>
                                </div>


                                        
                              
                            </div>
                        </div>
                    </div>
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