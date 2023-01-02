<?php
include_once("conexao.php");
$ObjectData=getdate();
$dataActual=$ObjectData["mday"]."/". $ObjectData["mon"]. "/".$ObjectData["year"];
$instrucao="select * from vendas where dataVenda='".$dataActual."' order by dataVenda asc";

if(isset($_POST['data'])){
    if(strcmp($_POST['data'],"Hoje")==0){
        $instrucao="select * from vendas where dataVenda='".$dataActual."' order by dataVenda asc";
    }else{
        $instrucao="select * from vendas where dataVenda='".$_POST['data']."' order by dataVenda asc";
    } 
}
$maior=0;
$array=array();
$quantidade=0;
$nome="";
$conexaos=mysqli_query($conexao,$instrucao);
while($row=mysqli_fetch_array($conexaos)){
    if(!in_array($row['nomeFarmaco'],$array)){
        if(isset($_POST['data'])){
            if(strcmp($_POST['data'],"Hoje")==0){
                $instru= "select SUM(quantidade) from vendas where dataVenda='".$dataActual."' and nomeFarmaco='".$row['nomeFarmaco']."'";
            }else{
                $instru= "select SUM(quantidade) from vendas where dataVenda='".$_POST['data']."' and nomeFarmaco='".$row['nomeFarmaco']."'";
            }
        }else{
            $instru= "select SUM(quantidade) from vendas where dataVenda='".$dataActual."' and nomeFarmaco='".$row['nomeFarmaco']."'";
        }
       
        $conexa=mysqli_query($conexao,$instru);
        while($raw=mysqli_fetch_array($conexa)){
            $quantidade=$raw['SUM(quantidade)'];
        }
        if($quantidade>$maior){
            $maior=$quantidade;
            $nome=$row['nomeFarmaco'];

        }  
        array_push($array,$row['nomeFarmaco']);
        //echo"<td>".$row['nomeCliente']."</td>";
    }
}
echo"<td>". $nome."</td>";
echo"<td>".  $maior."</td>";
?>