<?php
include_once("conexao.php");
$instrucoes="delete from usuario where id='".$_GET['id']."'";
$conexaos=mysqli_query($conexao,$instrucoes);
header("location:../ADMIN/usuario.php");
?>