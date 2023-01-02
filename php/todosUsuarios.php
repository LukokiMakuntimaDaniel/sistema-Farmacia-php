<?php
include_once("conexao.php");
$instrucao="select * from usuario";
$conexao=mysqli_query($conexao,$instrucao);
while($row=mysqli_fetch_array($conexao)){
    echo"<tr><td>".$row['id']."</td>";
    echo"<td>".$row['nomeUsuario']."</td>";
    echo"<td>".$row['categoria']."</td>";
    echo"<td>".$row['senha']."</td>";
    echo"<td>".$row['numero']."</td>";
    echo"<td><img src='../IMG/solid/user-doctor.svg' alt='' width='40' class='custumiImgUser'></td>";
    echo"<td><button class='iconDetalhe btnOPC'onclick='text(this,2)' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'><i class='fa fa-eyedropper' aria-hidden='true'></i></button><a href='../php/eliminarUsuario.php?id=".$row['id']."'> <button class='iconDetalhe eliminar btnOPC'><i class='fa fa-trash' aria-hidden='true'></i></button></a></td></tr>";
}
?>

                
               