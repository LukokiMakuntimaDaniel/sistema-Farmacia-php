function vender(elemento){
    document.getElementById("id").value=""
    document.getElementById("id").value=elemento.nextElementSibling.textContent
    filhos=elemento.parentNode.parentNode.children;
    document.getElementById("formFile").value=filhos[1].textContent;
    filhosUl=filhos[2].children;
    document.getElementById("preco").value=filhosUl[0].textContent;
    document.getElementById("quantidade").value=filhosUl[1].textContent;
    document.getElementById("quantidades").value=""
    document.getElementById("valorPagar").value=""
}

function mensagem() {
    alert("farmaco acabou")
}

function troco(){
    preco=document.getElementById("preco").value.substring(0,document.getElementById("preco").value.length-2)
    valorPagar=document.getElementById("valorPagar").value;
    trocos=parseFloat(valorPagar)- parseFloat(preco) * parseFloat(document.getElementById("quantidades").value)
    document.getElementById("troca").value=trocos;
    if(trocos<0){
        document.getElementById("mensagem").innerHTML="Valor pago Insuficiente"
        document.getElementById("confirmar").disabled=true
    }else{
        document.getElementById("mensagem").innerHTML=""
        document.getElementById("confirmar").disabled=false
    }
    
}

function verifica(){
    if(parseInt(document.getElementById("quantidade").value)<document.getElementById("quantidades").value){
        document.getElementById("mensagem").innerHTML="Quantidade acima do total do fármaco"
        document.getElementById("confirmar").disabled=true
    }else{
        document.getElementById("confirmar").disabled=false
        document.getElementById("mensagem").innerHTML=""
        
    }
}