<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>

     <link href="https://fonts.googleapis.com/css?family=Raleway:400|Abril+Fatface" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">





      <link rel="stylesheet" href="css/style.css">

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Publicaciones</title>

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





    <body>

        <!--[if lt IE 7]>

            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

        <![endif]-->



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
                        <li ><a href="index.php">Inicio</a></li>
                        
                        <li><a href="galeria.php">Galeria</a></li>
                        <li class="actives" ><a href="publicaciones.php">Publicaciones</a></li>
                        <li><a href="contactanos.html">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </div>

         <div id="titulos" class="content-block content-block-cyan">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <br><br><br>
            <CENTER><H1><STRONG>Publicaciones</STRONG></H1></CENTER>
                    </div>
                </div>
            </div>
        </div>
        <br>
<center><STRONG>Haz clic en cualquiera de las publicaciones para ver su contenido.</STRONG> </center> 
<br>
<style>
      input[id^="spoiler"]{
 display: none;
}

input[id^="spoiler"] + label {
  display: block;
  width: 50%;
  margin: 0 auto;
  padding: 5px 20px;
  background: #3acab1;
  color: #fff;
  text-align: center;
  font-size: 24px;
  border-radius: 8px;
  cursor: pointer;
  transition: all .6s;
}

    
}

input[id^="spoiler"]:checked + label {
  color: #333;
  background: #ccc;
}
input[id^="spoiler"] ~ .spoiler {
  width: 100%;
  height: 0;
  overflow: hidden;
  opacity: 0;
  margin: 10px auto 0; 
  padding: 10px; 
  background: #eee;
  border: 1px solid #ccc;
  border-radius: 8px;
  transition: all .6s;
}
input[id^="spoiler"]:checked + label + .spoiler{
  height: auto;
  opacity: 1;
  padding: 10px;
}
  </style>
<br>
      </form>
<?php
                include("conectar.php");

                $consulta="SELECT * FROM publi ORDER by id desc";
                $resultado= $conexion->query($consulta);
                $nums=0;
        
                while($row=$resultado->fetch_array()):
                    $nums++;
                ?>
<input class="boton" type="checkbox"  id="spoiler<?php echo $nums ?>" /> 
  <label for="spoiler<?php echo $nums ?>"><?php echo $row['titulo']; ?></label>
<div  class="spoiler">
      <div class="jumbotron">


<br>
                <header class="block-heading cleafix">
                    <form method="POST" enctype="multipart/form-data">
            <hr style="width:100%; border-color:#3acab1;">                
                    <div>
                    <h2>Creado por: <strong>Admin</strong></h2>
                    <h4><?php echo $row['fec_hor']; ?>:</h4><br><br>
                    <h1 style="font-size: 60px;"><strong><?php echo $row['titulo']; ?></strong></h1>
                    <p style="font-size: 20px;"><?php echo $row['descripcion']; ?></p><br><br>
                    <center>
                    <div><?php 
                $ruta="img_publi/";
                $sql="SELECT * FROM publi WHERE img='$ruta'";
                $etiqueta="";
                $resultadoq = $conexion->query($sql);

                $numq=$resultadoq->fetch_array();

                if($ruta!=$row['img']){
                   $etiqueta='<img src="WB/SanDamiani/' .$row["img"]. '" width="300" heigth="250">';

                }
                else{
                    $etiqueta='';
                } 
                
                echo $etiqueta;
                echo '</div>
                </center>
                <p style="font-size: 15px;">Publicación no.' .$row["id"] .'.</p> </div><hr style="width:100%; border-color:#3acab1;"></div></div><br>';

                                    endwhile;
?>
</div>
</div>


</header>
            </div><!--/container-->
        </div>
<br>
<br>



        <div id="social" class="content-block">
            <div class="container text-center">
                <div class="hexagon"><a href="https://www.facebook.com/COLEGIO-SAN-DAMIANI-111166852314454/" target="_blank" ><i class="fa fa-facebook"></i></a></div>
                <div class="hexagon"><a href="https://twitter.com/DamianiSan" target="_blank"><i class="fa fa-twitter"></i></a></div>
                <!-- <div class="hexagon"><a href="#"><i class="fa fa-google-plus"></i></a></div> -->
                <div class="hexagon"><a href="https://www.instagram.com/sandamiani.gt/"  target="_blank"><i class="fa fa-instagram" ></i></a></div>
                <!-- <div class="hexagon"><a href="#"><i class="fa fa-envelope"></i></a></div> -->
            </div>
        </div>


<br>
<br>
<br>
<br>
<br>


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

