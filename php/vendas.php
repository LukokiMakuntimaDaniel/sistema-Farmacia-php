<?php
include_once("conexao.php");
$instrucao="select * from farmaco order by nomeFarmaco asc";
$quantidade="";
$conexao=mysqli_query($conexao,$instrucao); 
$cont=1;     
echo"<div  class='row custumemarge'>";
while($row=mysqli_fetch_array($conexao)){
    if($cont%7==0){
        echo"<div class='row custumemarge'>";
    }
    echo"<div style='margin-bottom:10px' class='col-md-2'><div style='height:100%;position:relactive' class='card'> <div class='card-header'>";
    echo"<img class='card-img-top' src=../imagemFarmaco/".$row['imagem']." > </div>";
    echo"<div class='card-body'> <h5 class='card-title'>".$row['nomeFarmaco']."</h5></div>";
    echo"<ul class='list-group list-group-flush'>";
    echo"<li class='list-group-item'>".$row['preco']."kz </li>";
    echo" <li class='list-group-item'>".$row['quantidade']."</li></ul>";
    echo"<div class='card-body'>";
    if(strcmp($row['quantidade'],"0")==0){
        echo"<button onclick='mensagem()' style='position:absolute; bottom:0px' href='#' class='btn btn-primary shadow-none border-0' data-bs-toggle='' data-bs-target='' data-bs-whatever='@getbootstrap'> <i class='fa fa-shopping-cart' aria-hidden='true'></i></button>";
    }else{
        echo"<a onclick='vender(this)' style='position:absolute; bottom:0px' href='#' class='btn btn-primary shadow-none border-0' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'> <i class='fa fa-shopping-cart' aria-hidden='true'></i></a>";    
    }
    //echo"<a onclick='vender(this)' style='position:absolute; bottom:0px' href='#' class='btn btn-primary shadow-none border-0' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'> <i class='fa fa-shopping-cart' aria-hidden='true'></i></a>";
    echo"<p style='display:none'>".$row['id']."</p>";
    echo"</div></div></div>";
    $cont=$cont+1;
}
echo"</div>";
?>
            
                
                        
                           
                     