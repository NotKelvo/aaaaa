<!DOCTYPE html>
<html class="no-js" lang="es">
 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>San Damiani | Inicio </title>
        <meta name="description" content="Centro educativo para la formacion de profesionales guatemaltecos.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Educación, Colegio, Guatemala, San Damiani">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
         
        <link rel="stylesheet" href="owl-carousel/owl.theme.css">
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/tarjetas.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>


    <body>
 
        <div id="top" class="navbar navbar-dark navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <a href="index.php" class="zero"> <img src="img/logoxds.png" alt="San Damiani" style=" width: 4.3em; float: left;margin:5px;"> </a>
                    <a class="navbar-brand" href="index.php"> <strong>San</strong>Damiani</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="actives"><a href="index.php">Inicio</a></li>
                        
                        <li><a href="galeria.php">Galeria</a></li>
                        <li><a href="publicaciones.php">Publicaciones</a></li>
                        <li><a href="contactanos.html">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </div>



        <div id="carousel-header" class="carousel slide" data-ride="carousel" data-interval="8000">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <!-- <div class="camera-icon hidden-sm hidden-xs">
                    <div class="circle">
                        <div class="hexagon">
                            <i class="fa  fa-camera"></i>
                        </div>
                    </div>
                </div> -->

                <div class="item active">
                    <img src="img/slide1.jpg" alt="">
                </div>

                <div class="item">
                    <img src="img/slide2.jpg" alt="">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-header" role="button" data-slide="next">
                <img src="img/left.png" alt="Previous">
            </a>
            <a class="right carousel-control" href="#carousel-header" role="button" data-slide="next">
                <img src="img/right.png" alt="Next">
            </a>
        </div>




        <div id="about" class="content-block content-block-cyan">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <center>
                        <h1>Centro Educativo San Damiani</h1>
                   
                        <P>
                            FUNDADO en octubre de 1983 con el nombre de Centro
                            Educativo “Santo Domingo” por su fundadora la Licenciada
                            Carmen Fuentes de Véliz. En 1996 se le cambia el nombre
                            a Centro Educativo “San Damiani” distinguiéndose por usar
                            el método Montessori. Formando niños y jóvenes como
                            ciudadanos responsables con valores, virtud, fe y respeto,
                            a nuestros 31 años hemos destacado en coros, bailes,
                            futbol y en este año 2do lugar en Juventud Don Bosco
                            2016, banda escolar con mas 30 trofeos, destacados por
                            maestro 100 puntos como 1er lugar en la ciudad de
                            Guatemala, 2 veces alcalde de la colonia, actualmente mis
                            Chiquitita y Señorita Alcaldía Municipal Zona 19 la Florida.
                        </P>
                    </center>
                    </div>
                </div>
            </div>
        </div>


        <div id="projects" class="recent-projects">
            <div class="recent-projects-title">
                Publicaciones recientes
            </div>
            <div class="recent-projects-content content-block-gray">
 
                <div  id="owl-example" class="owl-carousel">
                    <?php
                include("conectar.php");
                $consulta="SELECT * FROM publi ORDER by id desc";
                $resultado= $conexion->query($consulta);
                $etiqueta="";

                $ruta="img_publi/";
                $nums=0;
                while($row=$resultado->fetch_array()):
                $nums++;
                if($nums==7){
                    break;
                }
                if($ruta!=$row['img']){
                   $etiqueta='<div style="height: 350px; background-image:url(WB/SanDamiani/'.$row["img"]. ');no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; margin-left: auto; margin-right: auto; display: block;">
                   <a href="publicaciones.php">'.$row["titulo"].'</a>
                   </div>';
                }
                // <CENTER><img style="vertical-align:middle; position: absolute;" src="/WB/SanDamiani/'.$row["img"]. '" width="150" heigth="100%"></CENTER>
                else{
                    $etiqueta='<div style="height: 350px; margin-left: auto; margin-right: auto; display: block;">
                        <H1 style="vertical-align:middle; position: absolute; line-height: 100px;, line-width: 20px">NO SE AGREGÓ IMAGEN</H1>
                        <a href="publicaciones.php">'.$row["titulo"].'</a>
                    </div>';
                } 
        
                echo $etiqueta;
                ?>
                
                
                
                    
  <?php endwhile; ?>
                </div>                                                                              
            </div>
        </div><!-- /.recent-projects -->
        <div id="blog" class="content-block content-block-gray">
            <div class="container">
                <header class="block-heading cleafix">
                    <a href="publicaciones.php" class="btn btn-o btn-lg pull-right">Ver más</a>
                    <h1>Nosotros</h1>
                    <p>Conocenos</p>
                </header>
                <section class="block-body">
                    <div class="row">
                            <div class="col-sm-4 blog-post">
                                    <div class="contenedor_tarjeta">
                                        <figure>
                                            <img src="img/logoxds.png" class="frontal" alt="The Illustration">
                                            <figcaption class="trasera">
                                                <h2>Misión</h2>
                                                <hr>
                                                <p>Somos un centro educativo que forma jovenes para su futuro.</p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <h2>Misión</h2>                  
                                </div>
                        <div class="col-sm-4 blog-post">
                                <div class="contenedor_tarjeta">
                                    <figure>
                                        <img src="img/logoxds.png" class="frontal" alt="The Illustration">
                                        <figcaption class="trasera">
                                            <h2>Visión</h2>
                                            <hr>
                                            <p>Ser un centro educativo que se muestre a la vanguardia del conocimiento.</p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <h2>Visión</h2>                   
                            </div>
                        <div class="col-sm-4 blog-post">
                                <div class="contenedor_tarjeta">
                                    <figure>
                                        <img src="img/logoxds.png" class="frontal" alt="The Illustration">
                                        <figcaption class="trasera">
                                            <h2>Valores</h2>
                                            <hr>
                                            <p>Honestidad, Responsabilidad y Transaparencia</p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <h2>Valores</h2>                 
                            </div>
                    </div>
                </section>
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
            
        <p>8va Avenida 1-31 Zona 19 Colonia La Florida,
            Ciudad de Guatemala.
            </p>
            <p>Llama al 2437 5834</p>
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