<?php
include_once("conexao.php");
$instrucao="select * from farmaco order by dataCadastro asc";
$conexao=mysqli_query($conexao,$instrucao);
while($row=mysqli_fetch_array($conexao)){
    echo"<tr><td>".$row['id']."</td>";
    echo"<td>".$row['nomeFarmaco']."</td>";
    echo"<td>".$row['preco']."</td>";
    echo"<td>".$row['quantidade']."</td>";
    echo"<td>".$row['dataCadastro']."</td>";
    echo"<td><button class='iconDetalhe btnOPC'onclick='text(this,1)' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'><i class='fa fa-eyedropper' aria-hidden='true'></i></button><a href='../php/eliminarFarmaco.php?id=".$row['id']."'> <button class='iconDetalhe eliminar btnOPC'><i class='fa fa-trash' aria-hidden='true'></i></button></a></td></tr>";
}
?>