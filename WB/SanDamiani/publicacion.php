<?php
ob_start();
if(isset($_POST['publicar1']))
{
include("conectar.php");
$titulo=$_REQUEST["titulo"];
$publi=$_REQUEST["publi"];

$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="img_publi/".$foto;
copy($ruta,$destino);

$iniSes=$_SESSION['nomUs'];  
if(empty($titulo)){
    echo "<script>alert('Agregar título...');</script>";
    header("Location: home.php");
    return;
}
elseif(empty($publi)){
    echo "<script>alert('Agrega contenido de publicación...');</script>";
    header("Location: home.php");
    return;
}


$date= date('d-m-Y H:i:s'); 
$newDate = strtotime ( '-6 hour' , strtotime ($date) ) ; 
$newDate = strtotime ( '+00 minute' , $newDate ) ; 
$newDate = strtotime ( '-00 second' , $newDate ) ; 
$newDate = date ('d-m-Y H:i:s', $newDate); 

$query="INSERT INTO publi (titulo,fec_hor,descripcion,img) values('$titulo','$newDate','$publi','$destino')";
$resultado = mysqli_query($conexion,$query);
if($resultado)
{
    echo "<script>alert('Subida correctamente');</script>";
    header("Location: home.php");
}
else
{
    echo "<script>alert('Error al subir');</script>";
    header("Location: home.php");
}
}
?>