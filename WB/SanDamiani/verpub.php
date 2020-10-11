<?php
ob_start();
    session_start();

    if(isset($_POST['salir'])){
        $_SESSION['id_usu']='';
        session_destroy();
    }
    
    if(empty($_SESSION['id_usu'])){
        echo "<script>alert('Saliendo');</script>";
        header("Location: index.php");
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
                        <input type="submit" class="btn btn-o btn-lg pull-right" name="salir"  value="Cerrar Sesion">
</center>
</form>
<br>
<br>
<br>
                        <h1>Ve el contenido creado Y EDITALO</h1>
                        <p>
                           <h1> Sesión activa de: <?php $iniSes=$_SESSION['nomUs'];  echo $iniSes?></strong></h1>
                        </p>
                        </center>

                    </div>
                </div>
            </div>
        </div>
           <div id="blog" class="content-block content-block-gray">
            <div class="container">
                <header class="block-heading cleafix">
                    <CENTER><H1><STRONG>PUBLICACIONES</STRONG></H1></CENTER>
      <?php 
include('conectar.php');


$consulta1="SELECT * FROM publi";
                $resultado1= $conexion->query($consulta1);
                $pop1=0;
        

                        while($rows=$resultado1->fetch_array()):
$pop1++;
?>

<style>

    


.popup-contenedor {
  
   position: relative;
   margin:7% auto;
   padding:50px 50px;
   padding-top:60px;
   background-color: #fafafa;
   color:#333;
   border-radius: 3px;
   width:50%;
}
a.popup-cerrar {
    position: absolute;
   top:3px;
   right:3px; 
   
   background-color: #333;
   padding:7px 10px;
   padding-top: 10px;
   font-size: 20px;
   text-decoration: none;
   line-height: 1;
   color:#fff;
}

	#popup<?php echo $pop1 ?> { 
    visibility: hidden; display: none; opacity: 0; margin-top: -300px; 
    } 
    #popup<?php echo $pop1 ?>:target { 
    visibility: visible; display: block; opacity: 1; background-color: rgba(0, 0, 0, .8); position: fixed; top: 0; left: 0; right: 0; bottom: 0; margin: 0; z-index: 999; transition: all 1s; 
    }


</style>



    <div class="modal-wrapper col-md-12" id="popup<?php echo $pop1 ?>">
   <div class="popup-contenedor">
   <a class="popup-cerrar btn btn-o btn-lg pull-right" href="#">X</a>
      <h2>Actualiza los datos o Eliminalos</h2>
      <p>Podrá ver los cambios al terminar de cargar la edición.</p>
      
     <fieldset >
        <legend>Editar Publicación</legend>
        
        <form method="POST" enctype="multipart/form-data">
 
            <table class=" col-md-8 col-md-offset-2">
   
                <tr>
                    <td><label for="id">ID:</label></td>
                    </tr>
                    <tr>
                    <td><input class="input  col-md-12"  type="text" name="id<?php echo $pop1 ?>" readonly="readonly" id="id" value="<?php echo $rows['id']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="titulo">Titulo:</label></td>
                    </tr>
                    <tr>
                    <td><input class="input col-md-12"  type="text" name="titulo<?php echo $pop1 ?>" id="titulo"/ value="<?php echo $rows['titulo'];?>"></td>
                </tr>
                <tr>
                    <td><label for="descripcion">Descripción:</label></td>
                    </tr>
                    <tr>
                    <td><input class="input col-md-12"  type="text" name="descripcion<?php echo $pop1 ?>" id="descripcion" value="<?php echo $rows['descripcion'];?>"/>                                          
                    <br><br></td>
                                     
                </tr>

                <tr>
                    <td><input id="update" type="submit" name="update1<?php echo $pop1 ?>" value="Actualizar"/><br><br></td>
                    </tr><tr>
                    <td><input type="submit" name="delete1<?php echo $pop1 ?>" value="Eliminar"/><br><br></td>
                    </tr><tr>
                    <td><input type="file" name="foto1<?php echo $pop1 ?>" id="foto"/><br><br></td>
                    </tr><tr>

<?php
  	include("conectar.php");
  		
 $foto=$_FILES["foto1".$pop1]["name"];
$ruta=$_FILES["foto1".$pop1]["tmp_name"];
$destino="img_publi/".$foto;
copy($ruta,$destino);
  	
  	
  		$id=$_POST['id'.$pop1];
  		$title=$_POST['titulo'.$pop1];
  		$desc=$_POST['descripcion'.$pop1];
       
  	if(isset($_POST['update1'.$pop1]))
  	{
  		
if ($conexion->connect_error) {
               die("Connection failed: " . $conexion->connect_error);
            }
            $sql = "UPDATE publi SET titulo='$title', descripcion='$desc', img='$destino' WHERE id='$id'";
            
           $sqlnf = "UPDATE publi SET titulo='$title', descripcion='$desc' WHERE id='$id'";
            
            if (empty($foto)){
            if ($conexion->query($sqlnf) === TRUE) {
    header("Location: verpub.php");
    echo "<script>alert('Edición correcta.');</script>";
    }
} 

elseif (!empty($foto)) {
    if ($conexion->query($sql) === TRUE) {
    header("Location: verpub.php");
    echo "<script>alert('Edición correcta.');</script>";
}
}
  	}
  	if(isset($_POST['delete1'.$pop1])){
  	    if ($conexion->connect_error) {
               die("Connection failed: " . $conexion->connect_error);
            }
            $sql1 = "DELETE FROM publi WHERE id='$id'";
            if ($conexion->query($sql1) === TRUE) {
    header("Location: verpub.php");
    echo "<script>alert('Se eliminó la publicación.');</script>";
} else {
    echo "Hubo un error con los datos.";
}
  	}
  ?>
                </tr>        
               
            </table>
   

        </form>

   
    </fieldset>

   </div>

</div>

<?php
endwhile;
?>  



        <div id="blog" class="content-block content-block-gray col-sm-4">
            <form method="POST">
            <div class="container">
                              <div class="card-body p-0">
                <table class="table" id="muestra">
                    <strong><caption style="background-color: #3acab1; color: white;">TODAS LAS PUBLICACIONES</caption></strong>
                  <tr bgcolor="black">
                  <th class="pioridad1" name="idth" style="width: 100px; color: white;">No.</th>
                    <th class="pioridad2" style="width: 100px; color: white;">Creador</th>
                    <th class="pioridad3" style="width: 60px; color: white;">Título</th>
                    <th class="pioridad4" style="width: 60px; color: white;">Descripción</th>
                    <th class="pioridad5" style="width: 60px; color: white;">Imagen</th>
                     <th class="pioridad6" style="width: 60px; color: white;">Editar</th>

                  </tr>
                  <?php 
include('conectar.php');

$consulta="SELECT * FROM publi";
                $resultado= $conexion->query($consulta);
                $pop=0;
        
                while($row=$resultado->fetch_array()):
                    $pop++;
    $count = $count +1;
   echo '<tr>';
   echo '<td class="pioridad1" >'.$row['id'].'</td>';   
   echo '<td class="pioridad2">Admin</td>';   
   echo '<td class="pioridad3">'.$row['titulo'].'</td>';   
   echo '<td class="pioridad4">'.$row['descripcion'].'</td>';
   
   $LOL=$row['id'];
   $ruta="img_publi/";
                $sql="SELECT * FROM publi WHERE img='$ruta'";
                $etiqueta="";
                $resultadoq = $conexion->query($sql);

                $numq=$resultadoq->fetch_array();

                if($ruta!=$row['img']){
                    $etiqueta='<img src="' .$row["img"]. '" width="30" heigth="30">';
                }                                       
                else{
                    $etiqueta='Vacío';
                } 
                 echo '<td class="pioridad5">'. $etiqueta .'</td>';
                 
                 echo '<td class="pioridad6"><a href="#popup'.$pop.'" class="popup-link">Editar</a></td>';


   echo '</tr>';
endwhile;
?>
                </table>
              </div>
                </form>
                            </div>
                </header>
            </div><!--/container-->
        </div><!-- /.content-block content-blog-gray -->
        
        
        
        
        
        
        
                <hr>
        <div id="blog" class="content-block content-block-gray">
            <div class="container">
                <header class="block-heading cleafix">
                                        <CENTER><H1><STRONG>IMÁGENES</STRONG></H1></CENTER>
                                              <?php 
include('conectar.php');


$consulta1="SELECT * FROM img";
                $resultado1= $conexion->query($consulta1);
                $popp1=0;
        

                        while($rows=$resultado1->fetch_array()):
$popp1++;
?>
<style>
    #popupp<?php echo $popp1 ?> { visibility: hidden; display: none; opacity: 0; margin-top: -300px; } 
    #popupp<?php echo $popp1 ?>:target { visibility: visible; display: block; opacity: 1; background-color: rgba(0, 0, 0, .8); position: fixed; top: 0; left: 0; right: 0; bottom: 0; margin: 0; z-index: 999; transition: all 1s; }


.popup-contenedor {
   position: relative;
   margin:7% auto;
   padding:30px 50px;
   padding-top:60px;
   background-color: #fafafa;
   color:#333;
   border-radius: 3px;
   width:100%;
}
a.popup-cerrar {
  position: absolute; 
  top:3px;
   right:3px; 
   background-color: #333;
   padding:7px 10px;
   font-size: 20px;
   text-decoration: none;
   line-height: 1;
   color:#fff;
}
</style>

    <div class="modal-wrapper col-md-12" id="popupp<?php echo $popp1 ?>">
   <div class="popup-contenedor">
   <a class="popup-cerrar btn btn-o btn-lg pull-right" href="#">X</a>
      <h2>Actualiza los datos o Eliminalos</h2>
      <p>Podrá ver los cambios al terminar de cargar la edición.</p>
     <fieldset>
        <legend>Editar Publicación</legend>
        <form method="POST" enctype="multipart/form-data">
 
            <table  class=" col-md-8 col-md-offset-2">
   
                <tr>
                    <td><label for="id">ID:</label></td>
                    </tr><tr>
                    <td><input class="input col-md-12"  type="text" name="id<?php echo $popp1 ?>" readonly="readonly" id="id" value="<?php echo $rows['id']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    </tr><tr>
                    <td><input class="input col-md-12"  type="text" name="nombre<?php echo $popp1 ?>" id="nombre" value="<?php echo $rows['nombre']; ?>"><br><br></td>
                </tr>


                <tr>
                    <td><input id="update" type="submit" name="update<?php echo $popp1 ?>" value="Actualizar"/><br><br></td>
                    </tr><tr>
                    <td><input type="submit" name="delete<?php echo $popp1 ?>" value="Eliminar"/><br><br></td>
                    </tr><tr>
                    <td><input type="file" name="foto2<?php echo $popp1 ?>"/><br><br></td>
                    </tr><tr>
<?php
  	include("conectar.php");
  	
  
  	 $foto1=$_FILES["foto2".$popp1]["name"];
$ruta=$_FILES["foto2".$popp1]["tmp_name"];
$destino="img_gal/".$foto1;
copy($ruta,$destino);
  		$id=$_POST['id'.$popp1];
  		$nom=$_POST['nombre'.$popp1];
  	if(isset($_POST['update'.$popp1]))
  	{
  		
if ($conexion->connect_error) {
               die("Connection failed: " . $conexion->connect_error);
            }
            $sql12 = "UPDATE img SET nombre='$nom', img='$destino' WHERE id='$id'";
            $sqlnf = "UPDATE img SET nombre='$nom' WHERE id='$id'";
            
            if (empty($foto1)){
            if ($conexion->query($sqlnf) === TRUE) {
    header("Location: verpub.php");
    echo "<script>alert('Edición correcta.');</script>";
    }
} 

elseif (!empty($foto1)) {
    if ($conexion->query($sql12) === TRUE) {
    header("Location: verpub.php");
    echo "<script>alert('Edición correcta.');</script>";
}
}
            
  	}
  	if(isset($_POST['delete'.$popp1])){
  	    if ($conexion->connect_error) {
               die("Connection failed: " . $conexion->connect_error);
            }
            $sql1 = "DELETE FROM img WHERE id='$id'";
            if ($conexion->query($sql1) === TRUE) {
    header("Location: verpub.php");
    echo "<script>alert('Se eliminó la publicación.');</script>";
} else {
    echo "Hubo un error con los datos.";
}
  	}
  ?>
                </tr>        

            </table>

        </form>

  
    </fieldset>

   </div>

</div>

<?php
endwhile;
?>  




                    <form method="post" name="fcontacto">
                    
<div id="blog" class="content-block content-block-gray">
            <form method="POST">
            <div class="container">
                              <div class="card-body p-0">
                <table class="table" id="muestra">
                    <strong><caption style="background-color: #3acab1; color: white;">TODAS LAS IMAGENES</caption></strong>
                  <tr bgcolor="black">
                  <th name="idth" style="width: 100px; color: white;">No.</th>
                    <th style="width: 100px; color: white;">Nombre</th>
                    <th style="width: 60px; color: white;">Imagen</th>
                     <th style="width: 60px; color: white;">Editar</th>

                  </tr>
                  <?php 
include('conectar.php');

$consulta="SELECT * FROM img";
                $resultado= $conexion->query($consulta);
                $pop=0;
        
                while($row=$resultado->fetch_array()):
                    $pop++;
    $count = $count +1;
   echo '<tr>';
   echo '<td>'.$row['id'].'</td>';   
   echo '<td>'.$row['nombre'].'</td>';   

   $LOL=$row['id'];
   $ruta="img_gal/";
                $sql="SELECT * FROM img WHERE img='$ruta'";
                $etiqueta="";
                $resultadoq = $conexion->query($sql);

                $numq=$resultadoq->fetch_array();

                if($ruta!=$row['img']){
                    $etiqueta='<img src="' .$row["img"]. '" width="30" heigth="30">';
                }                                       
                else{
                    $etiqueta='Vacío';
                } 
                 echo '<td>'. $etiqueta .'</td>';
                 
                 echo '<td><a href="#popupp'.$pop.'" class="popup-link">Editar</a></td>';


   echo '</tr>';
endwhile;
?>
                </table>
              </div>
                </form>
                            </div>
                
</form>
 
                <form method="POST">
                    <div class="form-input">
                    <input name="regresar" id="entrar" style="background-color: #3acab1; color: black" type="submit" class="btn btn-o btn-lg pull-right" value="Regresar">
                    </form>
                </form>
                </div>
                </header>
            </div><!--/container-->
        </div><!-- /.content-block content-blog-gray -->
                
                
                
                

           
           
           
           
           

                <?php
                ob_start();
if(isset($_POST['regresar']))
{
header("Location: home.php");
}
                ?>
                </div>
                </header>
            </div><!--/container-->
        </div><!-- /.content-block content-blog-gray -->
        <hr>
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
