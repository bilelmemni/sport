<?php
include "../production/classe/utilisateur.php";
$utilisateur = new utilisateur();
if (isset($_POST['addUtilisateur'])) {
    $addUtilisateur = $utilisateur->addUtilisateur($_POST);
     header(("location: listeU.php"));
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Salle de sport</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="ajouterAbon.php" class="site_title"><i class="fa fa-paw"></i> <span>Salle de sport</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/adem.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Adem Fakhfakh</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
           
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Admin</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Utilisateur <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="ajouterU.php">Ajouter utilisateur</a></li>
                    <li><a href="listeU.php">Liste utilisateur</a></li>
                  </ul>
                </li>
              
                <li><a><i class="fa fa-desktop"></i> Activité <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="ajouterAct.php">Ajouter Activité</a></li>
                    <li><a href="listeAct.php">Liste activité</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Entraineur <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="ajouterEn.php">Ajouter entraineur</a></li>
                    <li><a href="listeEn.php">liste entraineur</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Emploi <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="ajouterEmp.php">Ajouter emploi</a></li>
                    <li><a href="listeEmp.php">Liste emploi</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-clone"></i>Abonnement <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="ajouterAbon.php">Ajouter abonnement</a></li>
                    <li><a href="listeAbon.php">Liste abonnement</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-clone"></i>Salle<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="ajouterSalle.php">Ajouter salle</a></li>

                    <li><a href="listeSalle.php">Liste salle</a></li>

                  </ul>
                </li>
              </ul>
            </div>


          </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="index.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/adem.jpg" alt="">Adem Fakhfakh
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    
                    <a class="dropdown-item"  href="index.php"><i class="fa fa-sign-out pull-right"></i> Déconnecter</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                 
                  <ul class="dropdown-menu liste-unstyled msg_liste" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/adem.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/adem.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/adem.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/adem.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Ajouter Utilisateur </h3>
                        </div>

                    
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                                      <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                       
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form method="post" action="">
                                        <div class="row">
                                        
                                        <div class="form-group col-12">
                                                <label for="inputMaxParticipants">Cin</label>
                                                <input name="cin" type="text" class="form-control" id="inputMaxParticipants" placeholder="Cin">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="inputMaxParticipants">Nom</label>
                                                <input name="nom" type="text" class="form-control" id="inputMaxParticipants" placeholder="nom Utilisateur">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="inputMaxParticipants">Prénom</label>
                                                <input name="prenom" type="text" class="form-control" id="inputMaxParticipants" placeholder="prenom Utilisateur">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="inputMaxParticipants">Adresse</label>
                                                <input name="adresse" type="text" class="form-control" id="inputMaxParticipants" placeholder="Adresse">
                                            </div>
                                           
                                            <div class="form-group col-12">
                                                <label for="inputMaxParticipants">Email</label>
                                                <input name="email" type="texte" class="form-control" id="inputMaxParticipants" placeholder="Email">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="inputMaxParticipants">Password</label>
                                                <input name="pass" type="text" class="form-control" id="inputMaxParticipants" placeholder="Password">
                                            </div>
                                            
                                         
                                            <div class="form-group col-12 text-center">
                                                <button type="submit" name="addUtilisateur" class="btn btn-primary">Ajouter Utilisateur</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
