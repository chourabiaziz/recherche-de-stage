

<?php
include "connection.php";
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
                            <h3 class="box-title">Liste Offres Stages </h3>



                            <p class="text-muted"><code></code></p>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Titres de Stage</th>
                                            <th class="border-top-0">domaine</th>
                                            <th class="border-top-0">technologie</th>
                                            <th class="border-top-0">description</th>
                                              <th class="border-top-0">nombres max des stagaires </th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                                            <?php
                                                            include "connection.php";

        $req1="UPDATE total SET totA = totA + '1'";
        $result1=$bdd->exec($req1);


                                                            $req="SELECT * FROM stage1 where nbr > '0';";
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
                                                                 echo $ligne ['titre'];
                                                                 echo " </td>";
                                                                 echo " <td>";
                                                                 echo $ligne ['domaine'];
                                                                 echo " </td>";
                                                                 echo " <td>";
                                                                 echo $ligne ['technologie'];
                                                                 echo " </td>";
                                                                 echo " <td>";
                                                                 echo $ligne ['description'];
                                                                 echo " </td>";
                                                                 echo " <td>";
                                                                 echo $ligne ['nbr'];
                                                                 echo " </td>";
                                                                 
                                                                
                                                               echo " </tr>";

                                                               }

echo "</tbody></table>";

?>





            </div>

            <footer class="footer text-center"><a
                    href="inscription.php">Demande Stage?</a>
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