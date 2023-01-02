function text(test,a) {
        var text = document.getElementById('exampleModalLabel')
        if(a==1){
                document.getElementById("moda").value="1";
                document.getElementById("exampleModalLabel").innerHTML="Actualização de Fármacos"
                document.getElementById("meuId").style.display="block";
                document.getElementById("filess").style.display="none";
                filhos=test.parentNode.parentNode.children;
                id=filhos[0].textContent;
                nome=filhos[1].textContent;
                preco=filhos[2].textContent;
                quantidade=filhos[3].textContent;
                data=filhos[4].textContent;
                document.getElementById("ids").value=id;
                document.getElementById("nome").value=nome
                document.getElementById("preco").value=preco
                document.getElementById("quant").value=quantidade
                document.getElementById("nome").value=
                document.getElementById("nome").value
                document.getElementById("salvar").innerHTML="Actualizar"
        }else{
                document.getElementById("moda").value="1";
                document.getElementById("exampleModalLabel").innerHTML="Actualização DO Usuario"
                document.getElementById("meuId").style.display="block";
                document.getElementById("filess").style.display="none";
                filhos=test.parentNode.parentNode.children;
                console.log(filhos)
                id=filhos[0].textContent;
                nome=filhos[1].textContent;
                categoria=filhos[2].textContent;
                senha=filhos[3].textContent;
                telefone=filhos[4].textContent;
                document.getElementById("ids").value=id;
                document.getElementById("nomeUsuario").value=nome
                document.getElementById("select").value=categoria
                document.getElementById("pass").value=senha
                document.getElementById("tel").value=telefone
                document.getElementById("salvar").innerHTML="Actualizar"
        }
        
        
        
}


function limpar(){
        document.getElementById("exampleModalLabel").innerHTML="Cadastramento de Fármacos"
        document.getElementById("meuId").style.display="none";
        document.getElementById("filess").style.display="block";
        document.getElementById("ids").value="";
        document.getElementById("nome").value=""
        document.getElementById("preco").value=""
        document.getElementById("quant").value=""
        document.getElementById("salvar").innerHTML="Salvar"
}

function limpei(){
        document.getElementById("exampleModalLabel").innerHTML="Cadastramento de Usuário"
        document.getElementById("meuId").style.display="none";
        document.getElementById("filess").style.display="block";
        document.getElementById("ids").value="";
        document.getElementById("nomeUsuario").value=""
        document.getElementById("select").value="Administrador"
        document.getElementById("pass").value=""
        document.getElementById("tel").value=""
        document.getElementById("salvar").innerHTML="Salvar"
}

function textCadastro(txt,a) {
    document.getElementById("moda").value="2";
    var text = document.getElementById('exampleModalLabel')
    if(a==1){
        limpar()
    }else{
        limpei()
    }
    
    return text.innerText = '' + txt
   
}