<?php
include_once("conexao.php");
$instrucaos="select count(id) from usuario";
$conexaos=mysqli_query($conexao,$instrucaos);
while($row=mysqli_fetch_array($conexaos)){
   echo"TOTAL DE USÁRIOS ".$row['count(id)'];
}
?>