<?php
include_once("conexao.php");
$instrucao="select * from farmaco where quantidade='0'";
$conexaos=mysqli_query($conexao,$instrucao);
while($row=mysqli_fetch_array($conexaos)){
    echo"<td>". $row['nomeFarmaco']."</td>";
    echo"<td>".  $row['quantidade']."</td>";
}

?>