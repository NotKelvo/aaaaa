<?php
ob_start();
session_start();
    if(isset($_POST['salir'])){
        $_SESSION['id_usu']='';
        session_destroy();
    }
    if(empty($_SESSION['id_usu'])){
        echo "<script>alert('Saliendo');</script>";
        header('Location: index.php');
        //echo "<script>window.location.replace='index.php'</script>";
    }
?>
<!DOCTYPE html>
 <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <script type="text/javascript">
function mostrarReferencia(){
if (document.fcontacto.op[1].selected == true) {
document.getElementById('desdeotro').style.display='block';
} 
else {
document.getElementById('desdeotro').style.display='none';
}
}
</script>


        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>


    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="top" class="navbar navbar-dark navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="home.php"><strong>SAN</strong>DAMIANI</a>
                </div>
            </div>
        </div>

        <div id="about" class="content-block content-block-cyan">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <center>
                        <form method="POST"  enctype="multipart/form-data">
                        <center>
                        <input  type="submit" class="btn btn-o btn-lg pull-right" name="salir"  value="Cerrar Sesion">
</center>
</form>
<br>
<br>
<br>
                        <h1>Web Externa</h1>
                        <p>
                           <h1> Bienvenido(a): <?php $iniSes=$_SESSION['nomUs'];  echo $iniSes?></strong></h1>
                        </p>
                        </center>

                    </div>
                </div>
            </div>
        </div>




        <div id="blog" class="content-block content-block-gray ">
            <div class="container">
                <header class="block-heading cleafix">
                    <form method="POST" action="foto.php" enctype="multipart/form-data">
                    <center>
                    <h1>GALERÍA</h1>
                    <p>Sube imágenes, agregales nombre para que se muestren en la galería...</p>
                    </center>
                    <br>
                    <div class=" col-md-12 form-input">
                    <input class="input" type="text" name="nombrefo" placeholder="Agrega nombre a la foto..." required>
                    <br> 
                    <br>
                    <input class="input"  type="file" name="foto" placeholder="Foto" required>                
                    <br><br>
                    <input name="entrar" id="entrar" type="submit" class="btn btn-o btn-lg pull-right" value="Subir">
                </form>
                </div>
                </header>
            </div><!--/container-->
        </div><!-- /.content-block content-blog-gray -->
        <hr>
        <div id="blog" class="content-block content-block-gray">
            <div class="container">
                <header class="block-heading cleafix">
                    <form action="home.php" method="post" name="fcontacto">
                        <center>
                    <h1>PUBLICACIONES</h1>
                    <p>Escribe una publicacion con o sin imagen.</p>
                    </center>
                                        <div class="col-md-12 form-input">

                <select onclick="mostrarReferencia();" name="op" class="input">
                                <option value="">Publicación sin imagen</option>
                                <option value="1">Publicación con imagen</option>
                </select>
                <br>
               
                </div>
                </form>
                
                    <form method="POST" action="publicacion.php" enctype="multipart/form-data">

                    <br>
                    <div class=" col-md-12  form-input">
                    <input class="input" type="text" name="titulo" placeholder="Agrega un titulo a la publicación..." required>
                    <br> 
                    <br>                    
                    <textarea  placeholder="Escribe una publicación..." class="input" name="publi" rows="10" cols="50" required></textarea>
                    <br>
                    <br>
                     <div id="desdeotro" style="display:none;">
                <input class="input" type="file" accept="image/png, .jpeg, .jpg, image/gif" name="foto" placeholder="Foto">
                </div>
                    

                      <input name="publicar1" id="entrar" style="background-color: #3acab1; color: black" type="submit" class="btn btn-o btn-lg pull-right" value="Publicar">


                    </form>
                    
                    <BR>
                        <BR>
                           
                    
                    <form method="POST">
                    <input name="ver" id="entrar" style="background-color: #3acab1; color: black" type="submit" class="btn btn-o btn-lg pull-right" value="Más opciones">
                
</form>
                <?php
if(isset($_POST['ver']))
{
    echo "<script>window.location='verpub.php';</script>";
}
                ?>
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
