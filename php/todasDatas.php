<?php
include_once("conexao.php");
$instrucaos="select DISTINCT dataVenda from vendas order by dataVenda asc";
$conexaos=mysqli_query($conexao,$instrucaos);
while($row=mysqli_fetch_array($conexaos)){
   echo"<option>".$row['dataVenda']."</option>";
}
?>