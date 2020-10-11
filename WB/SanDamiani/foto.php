<?php
ob_start();
if(isset($_POST['entrar']))
{
include("conectar.php");
$nombrefoto=$_REQUEST["nombrefo"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino= "img_gal/".$foto;
$destino2= "C:/wamp64/www/SD/img_gal/". $foto;

copy($ruta,$destino);
copy($ruta,$destino2);

$iniSes=$_SESSION['nomUs'];  
if(empty($nombrefoto)){
    echo "<script>alert('Agregar nombre...');</script>";
header("Location: home.php"); 
return;
}
elseif(empty($foto)){
    echo "<script>alert('Agrega foto...');</script>";
header("Location: home.php"); 
return;
}
$query="INSERT INTO img (nombre,img) values('$nombrefoto','$destino')";
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