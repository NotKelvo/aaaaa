<?php
ob_start();
include('conectar.php');
session_start();

$user=htmlentities($_POST['user']);
$pass=htmlentities(md5($_POST['pass']));

$nSeguro=mysqli_real_escape_string($conexion,$user);
$pSegura=mysqli_real_escape_string($conexion,$pass);

if(isset($_POST['entrar'])){
$sql="SELECT * FROM user WHERE usuario='$user' AND pass='$pass'";
$resultado = mysqli_query($conexion,$sql);
$num=mysqli_num_rows($resultado);


if($num>0){
$row=mysqli_fetch_array($resultado);
$_SESSION['id_usu']=$row['id'];
$_SESSION['nomUs']=$row['usuario'];
$iniSes2=$_POST[$_SESSION['nomUs']];
echo "<script>alert('Correcto');</script>";
echo "<script>window.location='home.php'</script>";
    
}
else{
    echo "<script>alert('Incorrecto');</script>";
}
}
?>
<!DOCTYPE html>
 <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>San Damiani (Web Externa)</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Important Owl stylesheet -->
        <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
         
        <!-- Default Theme -->
        <link rel="stylesheet" href="owl-carousel/owl.theme.css">
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>


    <body >
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="top" class="navbar navbar-dark navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                   
                    <a class="navbar-brand" href="index.php"><strong>SAN</strong>DAMIANI</a>
                </div>
            </div>
        </div>






        <div id="about" class="content-block content-block-cyan">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>Web Externa</h1>
                        <p>
                            Bienvenido, este es un sitio independiente al sito web "San Damiani".
                            Su uso es, permitir a las personas encargadas crear contenido para la página de una
                            forma más fácil y segura.
                            Podrás subir imagenes, realiza publicaciones con tan solo unos pasos.<BR>
                            <strong>DEBES DE TENER TUS DATOS DE ACCESO</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div id="projects" class="recent-projects">
            <div class="recent-projects-title">
                Acceso a...
            </div>

            <div class="recent-projects-content content-block-gray">
                <div id="owl-example" class="owl-carousel">
                    <div>
                        <img src="img/recent1.jpg" alt="">
                        <a href="#">Crear Contenido</a>
                    </div>
                    <div>
                        <img src="img/recent2.png" alt="">
                        <a href="#">Compartirlo con varias personas</a>
                    </div>
                    <div>
                        <img src="img/recent3.jpg" alt="">
                        <a href="#">Trabajo más accesible</a>
                    </div>
                    <div>
                        <img src="img/recent4.jpg" alt="">
                        <a href="#">Fácil y Rápido de usar</a>
                    </div>
                    <div>
                        <img src="img/recent6.jpg" alt="">
                        <a href="#">Información al instante</a>
                    </div>
                </div>
            </div>
        </div><!-- /.recent-projects -->



        <div id="blog" class="content-block content-block-gray">
            <div class="container">
                <header class="block-heading cleafix">
                    <form method="POST" action="index.php">
                    <h1>INGRESO</h1>
                    <p>Ingresa los datos que se te solicitan</p>
                    <br>
                    <center>
                    <div class=" col-md-6 col-md-offset-3 form-input ">
                    <input class="input" type="text" name="user" placeholder="Usuario" pattern="[A-Za-z0-9_-]{1,15}">
                    <br> 
                    <br>
                    <input class="input"  type="password" name="pass" placeholder="Contraseña" pattern="[A-Za-z0-9_-]{1,15}">    
                    <br>
                    <br>       
                    <input name="entrar" id="entrar" style="background-color: #3acab1; color: black" type="submit" class="btn btn-o btn-lg " value="Ingresar">
                    </center>
                </form>
                </div>
                </header>
            </div><!--/container-->
        </div><!-- /.content-block content-blog-gray -->


       <div id="social" class="content-block">
            <div class="container text-center">
                <div class="hexagon"><a href="https://www.facebook.com/COLEGIO-SAN-DAMIANI-111166852314454/" target="_blank" ><i class="fa fa-facebook"></i></a></div>
                <div class="hexagon"><a href="https://twitter.com/DamianiSan" target="_blank"><i class="fa fa-twitter"></i></a></div>
                <!-- <div class="hexagon"><a href="#"><i class="fa fa-google-plus"></i></a></div> -->
                <div class="hexagon"><a href="https://www.instagram.com/sandamiani.gt/"  target="_blank"><i class="fa fa-instagram" ></i></a></div>
                <!-- <div class="hexagon"><a href="#"><i class="fa fa-envelope"></i></a></div> -->
            </div>
        </div>


              <footer class="content-block content-block-dark">
        <p>8va avenida 1-31 zona 19 colonia la Florida,
            Ciudad de Guatemala.
            </p>
            <p>Llamar al 2437 5834</p>
            <p>&copy; Copyright San Damiani 2018.</p>
        </footer>  

        <script src="js/jquery-2.1.3.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <!-- Include js plugin -->
        <script src="owl-carousel/owl.carousel.js"></script>

        <script src="js/main.js"></script>

    </body>
</html>
