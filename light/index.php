<?php
    session_start();
    if($_SESSION["login"]==0){
            $_SESSION["login"]=-1;
    }

    if($_SESSION["login"]==1){
        header("Location: menuUsuario.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/icon.png">

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

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="index.html" class="text-success">
                                            <span><img src="assets/images/trazos.png" alt="" height="70"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="#" method="post">

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="emailaddress">Usuario</label>
                                                <input class="form-control" type="text" id="emailaddress" required="" placeholder="u s u a r i o" name="nombreUsuario">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <!--<a href="pages-forget-password.html" class="text-muted pull-right font-14">Forgot your password?</a>-->
                                                <label for="password">Contraseña</label>
                                                <input class="form-control" type="password" required="" id="password" placeholder="c o n t r a s e ñ a" name="contrasenaUsuario">
                                            </div>
                                        </div>

                                    
                                        <?php 
                                            if(isset($_POST['btn'])){
                                                include("conexion.php");

                                                $query = "SELECT * FROM usuario where usuario='".$_POST['nombreUsuario']. "' and contrasena= '".$_POST['contrasenaUsuario']."'";
                                                

                                                $res = $conn->query($query);
                                                //mysqli_query($conexion,$query);
                                                if($res->num_rows > 0){
                                                    header("Location: menuUsuario.php");
                                                    $_SESSION["login"]=1;
                                                    $in = $res->fetch_assoc();
                                                    $_SESSION['t'] = $in["tipo"];
                                                    $_SESSION['usuario'] = $in["usuario"];
                                                    $conn->close();
 

                                                }else{
                                                    echo "no";
                                                }
                                                $conn->close();
                                               // $query ="SELECT tipo FROM usuario where nombre='".$_POST['nombreUsuario']. "' and contrasena= '".$_POST['contrasenaUsuario']."'";
                                                //echo "$query";
                                                //$_SESSION["tipo"] = $query;

                                                //$res = $conexion->query($query);
                                                //$info = $result->fetch_assoc();
                                                //echo $info["tipo"];
                                                ///$_SESSION["tipo"] = $query;

                                                //echo "$query";
                                            }


                                            

                                    
                                        ?>
                                        <!--<div class="form-group m-b-30">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" type="checkbox">
                                                    <label for="checkbox5">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>-->

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn">Entrar</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <!--<div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-dark m-l-5">Sign Up</a></p>
                                </div>
                            </div>-->

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>