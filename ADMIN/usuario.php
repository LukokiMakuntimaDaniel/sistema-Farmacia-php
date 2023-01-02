<?php session_start()?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>ADMINISTRADOR</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/offcanvas-navbar/">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../CSS/offcanvas.css">
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" href="../CSS/custumer.css">
    <link rel="stylesheet" href="../CSS/all.css">

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


    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href="homeAdmin.html">SISTEMA DE FARMACIA</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homeAdmin.php">Fármacos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="relatorio.php">Relatório</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Configurações</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="../php/sair.php">Sair</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="nav-scroller bg-body shadow-sm">
        <nav class="nav nav-underline" aria-label="Secondary navigation">
            <a class="nav-link" href="#">
     
      <span class="badge bg-light text-dark rounded-pill align-text-bottom"> <?php  include_once("../php/quantidadeUsuario.php")  ?></span>
    </a>

        </nav>
    </div>

    <main class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
            <img class="me-3" src="../IMG/solid/user-doctor.svg" alt="" width="48" height="38">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">ADMINISTRADOR</h1>
                <small><?php $_SESSION["nomeUsuario"] ?></small>
            </div>
        </div>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pequizar">

        <table id="myTable">
            <tr class="header">
                <th style="width:600px;">Id</th>
                <th style="width:600px;">Nome do Usuário</th>
                <th style="width:400px;">Categoria</th>
                <th style="width:400px;">Palavra-Passe</th>
                <th style="width:400px;">Numero</th>
                <th style="width:400px;">Foto</th>
                <th style="width:400px;">Opções</th>
            </tr>
            <?php  include_once("../php/todosUsuarios.php")  ?>
        </table>


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
                        <form method="post" action="../php/salvarUsuario.php" enctype="multipart/form-data">
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
                                <label for="formFileLg" class="form-label">Imagem do Fármaco</label>
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
    </main>
    <script src="../JS/bootstrap.bundle.min.js"></script>
    <script src="../JS/all.js"></script>
    <script src="../JS/filtroTable.js"></script>
    <script src="../JS/offcanvas.js">
    </script>
    <script src="../JS/testEditar.js"></script>
</body>

</html>