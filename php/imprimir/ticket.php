<?php
require __DIR__ . '/ticket/autoload.php'; //Observação: se você renomeou a pasta para algo diferente de "ticket", altere o nome nesta linha
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

/*
Este exemplo imprime um bilhete de venda de uma impressora térmica
*/


/*
Aqui, em vez de "POS" (que é o nome da minha impressora)
Escreva o nome do seu. Lembre-se que você deve compartilhá-lo
do painel de controle
*/

$nombre_impresora = "POS"; 

$connector = new WindowsPrintConnector($nombre_impresora);
$printer = new Printer($connector);
#Envio um número de resposta para saber que foi conectado corretamente..
echo 1;
/*
	Vamos a imprimir un logotipo
	opcional. Recuerda que esto
	no funcionará en todas las
	impresoras

Nota pequena: Recomenda-se que a imagem não seja
transparente (mesmo que seja png, tem que tirar o canal alfa)
e tem uma resolução baixa. No meu caso
a imagem que eu uso é 250 x 250
*/

# Vamos centralizar a próxima coisa que imprimirmos
$printer->setJustification(Printer::JUSTIFY_CENTER);

/*
	
Vamos tentar carregar e imprimir
o logotipo


try{
	$logo = EscposImage::load("geek.png", false);
    $printer->bitImage($logo);
}catch(Exception $e){No hacemos nada si hay error}


	Ahora vamos a imprimir un encabezado
*/

$printer->text("\n"."Santos Vicente" . "\n");
$printer->text("Nif:2417030942" . "\n");
$printer->text("Endereco: Rua QM Bairro Zango IV" . "\n");
$printer->text("Tel: 926601581" . "\n");
$ObjectData=getdate();
$dataActual=$ObjectData["mday"]."/". $ObjectData["mon"]. "/".$ObjectData["year"];
$printer->text($dataActual. "\n");
/*
$printer->text("-----------------------------" . "\n");
$printer->setJustification(Printer::JUSTIFY_LEFT);
$printer->text("CANT  DESCRIPCION    P.U   IMP.\n");
$printer->text("-----------------------------"."\n");
	Ahora vamos a imprimir los
	productos
*/
	/*Alinear a la izquierda para la cantidad y el nombre*/


	$printer->setJustification(Printer::JUSTIFY_LEFT);
    $printer->text("Farmaco ".$_POST['nome']);
	$printer->text("Quantidade-----------------------".$_POST['quantosAComprar']);
	$printer->text("Preco----------------------------".$_POST['precos']);
	$printer->text("Total a Pagar--------------------".$_POST['granaApagar']);
	$printer->text("Troco ---------------------------".$_POST['trocos']);
    
/*
	Terminamos de imprimir
	los productos, ahora va el total
*/


/*
	Podemos poner también un pie de página
*/
$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->text("Obrigado pela a compra e volte sempre\n");

/*Alimentamos el papel 3 veces*/
$printer->feed(3);

/*
	Cortamos el papel. Si nuestra impresora
	no tiene soporte para ello, no generará
	ningún error
*/
$printer->cut();

/*
	Por medio de la impresora mandamos un pulso.
	Esto es útil cuando la tenemos conectada
	por ejemplo a un cajón
*/
$printer->pulse();

/*
	Para imprimir realmente, tenemos que "cerrar"
	la conexión con la impresora. Recuerda incluir esto al final de todos los archivos
*/
$printer->close();

?>