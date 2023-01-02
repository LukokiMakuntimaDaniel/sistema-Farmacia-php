<?php
include_once("conexao.php");
$instrucaos="select count(id) from farmaco";
$conexaos=mysqli_query($conexao,$instrucaos);
while($row=mysqli_fetch_array($conexaos)){
   echo"TOTAL DE FÁRMACO NO ESTOQUE ".$row['count(id)'];
}
?>