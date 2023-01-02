<?php
session_start();
include_once("php/conexao.php");
$ObjectData=getdate();
$dataActual=$ObjectData["mday"]."/". $ObjectData["mon"]. "/".$ObjectData["year"];

if(strcmp($_POST['modo'],"2")==0){
    $nomeArquivo="";
    if(file_exists("imagemUsuario/")){
        $pasta="imagemUsuario/"; 
        $nomeArquivo=$_FILES['imagemUsuario']['name'];
        $caminhoActual=$_FILES['imagemUsuario']['tmp_name'];
        move_uploaded_file($caminhoActual,$pasta.$nomeArquivo);
    }else{
        $pasta="imagemUsuario/";
        mkdir($pasta);
        $nomeArquivo=$_FILES['imagemUsuario']['name'];
        $guardadoPara = $pasta .$nomeArquivo;
        move_uploaded_file($_FILES['imagemUsuario']['tmp_name'], $guardadoPara);
    }
    $instrucao="insert into usuario(nomeUsuario,numero,senha,dataCadastro,categoria,imagem) values('".$_POST['nomeUsuario']."','".(double)$_POST['telefone']."','".$_POST['senha']."','".$dataActual."','".$_POST['categoria']."','".$nomeArquivo."')";
    mysqli_query($conexao,$instrucao);
}else{
    $update="update usuario set nomeUsuario='".$_POST['nomeUsuario']."', numero='".$_POST['telefone']."',senha='".$_POST['senha']."',categoria='".$_POST['categoria']."', dataCadastro='".$dataActual."' where id='".$_POST['id']."'";
    mysqli_query($conexao,$update);
}


header("location:index.php");
?>