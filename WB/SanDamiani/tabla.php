<?php 
include('conectar.php');
$sql = "Select * from alumnos";

$result=mysqli_query($conn,$sql);
    $count=0;
foreach($result as $tab){
    $count = $count +1;
   echo '<tr>';
   echo '<td>'.$tab['id'].'</td>';   
   echo '<td>'.$tab['nombre'].'</td>';   
   echo '<td>'.$tab['carrera'].'</td>';   
   echo '<td>'.$tab['grupo'].'</td>';
   echo '<td>'.$tab['fecha_ingreso'].'</td>';
   echo '</tr>';
}
mysqli_free_result($result);
?>