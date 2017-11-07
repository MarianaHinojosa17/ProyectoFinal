<?php
    session_start();
    if($_SESSION["login"]!=1){
        header("Location: index.php");
    }
                                                  

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Modificar o Eliminar Producto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Plugins css-->
        <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/plugins/switchery/switchery.min.css">
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Summernote css -->
        <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />


        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="index.html" class="logo">
                            <img src="assets/images/trazos.png" alt="logo" class="logo-lg" style="width:170px; height:40px" />
                            <!--<img src="assets/images/logo_sm.png" alt="logo" class="logo-sm hidden" />-->
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav left menu -->
                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <!--<li><a href="#">About</a></li>-->
                                <li><a href="#">Ayuda</a></li>
                                <!--<li><a href="#">Contact</a></li>-->
                            </ul>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                    <form role="search" class="navbar-left app-search pull-left">
                                         <input type="text" placeholder="Search..." class="form-control">
                                         <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                        <li class="list-group notification-list" style="height: 267px;">
                                           <div class="slimscroll">
                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-bell-o bg-custom"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">Updates</h5>
                                                        <p class="m-0">
                                                            <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-user-plus bg-danger"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New user registered</h5>
                                                        <p class="m-0">
                                                            <small>You have 10 unread messages</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                                <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>
                                           </div>
                                        </li>
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                                <!--<small class="font-600">See all notifications</small>-->
                                            <!--</a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>

                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10"></i> Perfil</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Herramientas</a></li>
                                        <!----<li><a href="javascript:void(0)"><i class="ti-lock m-r-10"></i> Lock screen</a></li>-->
                                        <li class="divider"></li>
                                        <!--<li><a href="javascript:void(0)" name=btn><i class="ti-power-off m-r-10"></i>Cerrar Sesión</a></li>-->

                                        <script>
                                          function logout(){
                                            $.get("logout.php");
                                            return false;
                                          }
                                        </script>
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <a href="login.php" onClick="logout()"><input class="btn btn-lg btn-primary btn-block" type="submit" name="btn" value="Cerrar Sesion"></input></a>
                                            </div>
                                        </div>


                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                                </div>
                                <?php

                                $u = $_SESSION['usuario'];
                                $t = $_SESSION['t'];

                                echo "<div class='user-info'>
                                    <a href='#'>$u</a>
                                    <br>
                                    <p class='text-muted m-0'>$t</p>
                                </div>";
                                ?>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <?php

                            if ($_SESSION["t"] == "Administrador")
                            {
                              echo "
                                  <ul class='metisMenu nav' id='side-menu'>
                                <li><a href='index.html'><i class='ti-home'></i> Dashboard </a></li>

                                <li><a href='typography.html'><i class='mdi mdi-marker'></i> Pedidos </a></li>

                                <li><a href='typography.html'><i class='mdi mdi-magnify'></i> Busqueda </a></li>

                                <li>
                                    <a href='javascript: void(0);' aria-expanded='true'><i class='mdi mdi-account'></i>Usuario<span class='fa arrow'></span></a>
                                    <ul class='nav-second-level nav' aria-expanded='true'>
                                        <li><a href='agregarUsuario.php'>Agregar Usuario</a></li>
                                        <li><a href='modificar-eliminarUsuario.php'>Modificar Usuario / Eliminar Usuario</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href='javascript: void(0);' aria-expanded='true'><i class='mdi mdi-basket'></i>Stock<span class='fa arrow'></span></a>
                                    <ul class='nav-second-level nav' aria-expanded='true'>
                                        <li><a href='agregarProducto.php'>Agregar Producto</a></li>
                                        <li><a href='modificar-eliminarProducto.php'>Modificar Producto / Eliminar Producto</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href='javascript: void(0);' aria-expanded='true'><i class='mdi mdi-basket'></i>Proveedor<span class='fa arrow'></span></a>
                                    <ul class='nav-second-level nav' aria-expanded='true'>
                                        <li><a href='agregarProveedor.php'>Agregar Proveedor</a></li>
                                        <li><a href='modificar-eliminarProveedor.php'>Modificar Proveedor / Eliminar Proveedor</a></li>
                                    </ul>
                                </li>

                                
                            </ul>
                              ";
                            }
                            ?>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="m-b-20 header-title">Eliminar o Modificar Producto</h3>

                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" role="form" method="post">

                                          <div class="form-group">
                                                <div class="col-md-12">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nombre de Producto</label>
                                                <div class="col-md-6">
                                                    <input type="text" name="nombreProd" class="form-control" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2">
                                                    <input name="buscar" value="Buscar" type="submit" class="btn btn-primary"></input>
                                                </div>
                                            </div>

                                            <br>
                                            <hr size="10" width="80%" />
                                            <br>
                                            <br>

                                             <div class="form-group">
                                                <label class="col-md-2 control-label">Nombre</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="nombre" class="form-control" value="" placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Descripción</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="descripcion"  value="" rows="5" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Cantidad</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="cantidad" value="" class="form-control" placeholder="" required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Proveedor</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="proveedor" class="form-control" value="" placeholder="" required="">
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <label class="col-md-2 control-label">Foto</label>
                                                <div class="col-md-6">
                                                <input type="file" name="foto" class="filestyle" data-buttonname="btn-default" required="">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                        <div class="col-md-6">
                                                            
                                                        </div>
                                            </div>

                                            <?php

                                                $nombre = "";
                                                $descripcion = "";
                                                $cantidad = "";
                                                $proveedor = "";
                                                $foto = "";


                                              /*if(isset($_POST['buscar']))
                                              {
                                                include("conexion.php");

                                                $query = "SELECT * FROM usuario where usuario='".$_POST['usuario2']. "'";
                                                
                                                $res = $conn->query($query);

                                                if($res->num_rows > 0){
                                                    $in = $res->fetch_assoc();
                                                    $nombre = $in["nombre"];
                                                    $domicilio = $in["domicilio"];
                                                    $edad = $in["edad"];
                                                    $tipo = $in["tipo"];
                                                    $telefono = $in["telefono"];
                                                    $usuario = $in["usuario"];
                                                    $pass = $in["contrasena"];
                                                    $foto = $in["foto"];
                                                }
                                              }*/

                                            ?>
                                           
                                            <?php

                                              if(isset($_POST['eliminar']))
                                              {
                                                //echo"holaaaaaaa1";
                                                include("conexion.php");
                                                
                                                  $nombreProd = $_POST['nombreProd'];

                                                  $consulta = mysqli_query($conn, "UPDATE producto SET eliminar = 1 where nombre = '$nombreProd'");
                                              }

                                            ?>


                                            <div class="form-group">
                                                <div class="col-md-8">
                                                </div>

                                                <div class="col-md-2">
                                                    <input name="modificar" value="Modificar" type="submit" class="btn btn-primary"></input>
                                                </div>

                                                <div class="col-md-2">
                                                    <input name="eliminar" value="Eliminar" type="submit" class="btn btn-primary"></input>
                                                </div>


                                            </div>

                                        </form>
                                    </div>

                                </div>

                    <!-- end container -->



                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->

<script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

        <script src="assets/plugins/moment/moment.js"></script>
      <script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
      <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
      <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
      <script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
      <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/summernote/summernote.min.js"></script>

        <!-- form advanced init js -->
        <script src="assets/pages/jquery.form-advanced.init.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>