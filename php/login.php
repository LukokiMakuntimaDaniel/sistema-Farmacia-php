<?php
session_start();
$_SESSION["numero"]="";
$_SESSION["categoria"]="";
$_SESSION["nomeUsuario"]="";
include_once("conexao.php");
$instrucao="select * from usuario";
$conexao=mysqli_query($conexao,$instrucao);
while($row=mysqli_fetch_array($conexao)){
    if(strcmp($row['numero'], $_POST['numero'])==0 && strcmp($row['senha'], $_POST['senha'])==0){
        $_SESSION["nomeUsuario"]=$row['nomeUsuario'];
        if(strcmp($row['categoria'],"Vendedor")==0){
            $_SESSION["categoria"]="Vendedor";
            //echo"user: ". $_SESSION["nomeUsuario"];
            header("location:../VENDAS/cardVendas.php");
        }else{
            $_SESSION["categoria"]="Administrador";
            header("location:../ADMIN/homeAdmin.php");
        }
    }
}
echo"<script>alert('Dados Incorretos')</script>";
echo"<script>window.location.href='../index.php'</script>";
?>