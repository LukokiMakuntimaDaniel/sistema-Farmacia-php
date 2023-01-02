<?php
session_start();
include_once("conexao.php");
$ObjectData=getdate();
$dataActual=$ObjectData["mday"]."/". $ObjectData["mon"]. "/".$ObjectData["year"];

if(strcmp($_POST['modo'],"2")==0){
    $nomeArquivo="";
    if(file_exists("../imagemFarmaco/")){
        $pasta="../imagemFarmaco/"; 
        $nomeArquivo=$_FILES['imagemFarmaco']['name'];
        $caminhoActual=$_FILES['imagemFarmaco']['tmp_name'];
        move_uploaded_file($caminhoActual,$pasta.$nomeArquivo);
    }else{
        $pasta="../imagemFarmaco/";
        mkdir($pasta);
        $nomeArquivo=$_FILES['imagemFarmaco']['name'];
        $guardadoPara = $pasta .$nomeArquivo;
        move_uploaded_file($_FILES['imagemFarmaco']['tmp_name'], $guardadoPara);
    }
    $instrucao="insert into farmaco(nomeFarmaco,preco,quantidade,dataCadastro,imagem) values('".$_POST['nomeFarmaco']."','".(double)$_POST['precoFarmaco']."','".$_POST['quantidade']."','".$dataActual."','".$nomeArquivo."')";
    mysqli_query($conexao,$instrucao);
}else{
    $update="update farmaco set nomeFarmaco='".$_POST['nomeFarmaco']."', preco='".(double)$_POST['precoFarmaco']."',quantidade='".$_POST['quantidade']."', dataCadastro='".$dataActual."' where id='".$_POST['id']."'";
    mysqli_query($conexao,$update);
}


header("location:../ADMIN/homeAdmin.php");
?>