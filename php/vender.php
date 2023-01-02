<?php
session_start();
include_once("conexao.php");
$ObjectData=getdate();
$dataActual=$ObjectData["mday"]."/". $ObjectData["mon"]. "/".$ObjectData["year"];
$instrucao="insert into vendas(nomeFarmaco,preco,valorPago,troco,dataVenda,quantidade,nomeCliente,responsavel) values('".$_POST['nome']."','".(double)$_POST['precos']."','".(double)$_POST['granaApagar']."','".(double)$_POST['trocos']."','".$dataActual."','".$_POST['quantosAComprar']."','".$_POST['nomeCliente']."','".$_SESSION['nomeUsuario']."')";
mysqli_query($conexao,$instrucao);
$quantidadeResta=(int)$_POST['total']-(int)$_POST['quantosAComprar'];
echo"".$quantidadeResta;
echo"".$_POST['nome'];
$instrucao="update farmaco set quantidade ='".$quantidadeResta."' where id='".$_POST['ids']."'";
mysqli_query($conexao,$instrucao);
//include_once("imprimir/ticket.php");
header("location:../VENDAS/cardVendas.php");
?>