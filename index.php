<?php
session_start();
if(isset($_SESSION["categoria"]) && strcmp($_SESSION['categoria'],"Vendedor")==0){
    header("location:VENDAS/cardVendas.php");
}else if(isset($_SESSION["categoria"]) && strcmp($_SESSION['categoria'],"Administrador")==0){
    header("location:ADMIN/homeAdmin.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>LOGIN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <link rel="stylesheet" href="CSS/signin.css">
    <link href="CSS/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/offcanvas.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/custumer.css">
    <link rel="stylesheet" href="CSS/all.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>



    <link rel="stylesheet" href="CSS/custumer.css">
</head>

<body class="text-center bodyCustumer">

    <main class="form-signin custumerForm">
        <form method="post" action="php/login.php">
            <img class="mb-4" src="IMG/solid/user-doctor.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Porfavor Faça Login</h1>

            <div class="form-floating shadow-none">
                <input type="number" class="form-control shadow-none" id="numerso" name="numero" placeholder="Nome do Usuário">
                <label for="floatingInput">Nome do Usuário</label>
            </div>
            <div class="form-floating shadow-none">
                <input type="password" class="form-control shadow-none" id="palavraPasse" name="senha" placeholder="Palavra-Passe">
                <label for="floatingPassword">Pavra-Passe</label>
            </div>

            <div class="checkbox mb-3">
                <label>
        <input type="checkbox" value="remember-me"> Mostrar a Palavra-Passe
      </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary border-0 shadow-none custumeBtn" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
  
    </main>

    <div class="addopc">
            <div class="adddiv">
                <button id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" onclick="textCadastro('Cadastramento de Usuário',2)">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastramento de Usuário</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="salvarUsuario.php" enctype="multipart/form-data">
                             <input style="display:none"  class="form-control" name="modo" type="text" id="moda">
                            <div class="mb-3" id="meuId"  style="display:none">
                                <label for="formFile" class="form-label">Id do usuario</label>
                                <input readonly class="form-control" name="id" type="text" id="ids">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Nome do Usúario</label>
                                <input class="form-control" type="text" id="nomeUsuario" name="nomeUsuario">
                            </div>

                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Categoria do Usuário</label>
                                <select id="select"  name="categoria" class="form-select" aria-label="Default select example">
                                    <option selected>Selecina uma Categoria</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Vendedor">Vendedor</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formFileDisabled" class="form-label">Palavra-Passe</label>
                                <input class="form-control" id="pass" name="senha" type="password" id="formFileMultiple">
                            </div>
                            <div class="mb-3">
                                <label for="formFileDisabled" class="form-label">Telefone</label>
                                <input class="form-control" id="tel" name="telefone" type="number" id="formFileMultiple">
                            </div>
                            <div id="filess">
                                <label for="formFileLg" class="form-label">Imagem do Usuario</label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file">
                            </div>
                            <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="salvar">Salvar</button>
                    </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
</body>
<script src="JS/bootstrap.bundle.min.js"></script>
    <script src="JS/all.js"></script>
    <script src="JS/filtroTable.js"></script>
    <script src="JS/offcanvas.js">
    </script>
    <script src="JS/testEditar.js"></script>
</html>