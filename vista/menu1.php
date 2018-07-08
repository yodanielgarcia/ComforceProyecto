<?php 
require_once "../controlador/sessionValidate.php"; 
require_once "../controlador/sessionUserTypeAdmin.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Principal</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap-yeti.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />    
</head>
<body>
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Comforce</a> 
            </div>
            <div class="row-fluid">
                <div class="row" style="float: left; margin: 0 0 0 25px;" >
                    <p style="color: white;"><?php $hoy = date("Y-m-d "); echo $hoy; echo utf8_decode($_SESSION['nombre']); ?></p>
                </div>
                <div class="row" style="float: right; margin: 12px 25px 0 0;">
                    <a href="#" class="btn btn-danger" style="width: 100px;" onclick="logOut()">Salir</a>
                </div>                
            </div>          
        </nav>   
        <!-- /. NAV TOP  -->

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                    <li>
                        <a  href="#" onclick="loadUsers()"><i class="fa fa-dashboard fa-2x" ></i> Modificacion y creacion de usuarios</a>
                    </li>
                      <li>
                        <a  href="#"><i class="fa fa-desktop fa-2x"></i> Creacion de procesos</a>
                    </li>
                 
                </ul>
               
            </div>
            
        </nav>
        <!-- /. NAV SIDE  -->

        <div id="wrapper">
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row-fluid" id="contenido">
                        <div class="col-md-12">
                         <h2>Bienvenidos</h2>   
                         <h5>prueba desarrollada por Daniel Garcia</h5>
                         
                        </div>                   
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                </div>
                 <!-- /. PAGE INNER  -->
                </div>
             <!-- /. PAGE WRAPPER  -->
            </div>
         <!-- /. WRAPPER  -->
    
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/appjs.js"></script>
    <script src="assets/js/mainjs.js"></script>
</body>
</html>
        