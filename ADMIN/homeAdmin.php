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
            <a class="navbar-brand" href="#">SISTEMA DE FARMACIA</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fármacos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usuario.php">Usuários</a>
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
      <span class="badge bg-light text-dark rounded-pill align-text-bottom"><?php  include_once("../php/quantidadeFarmaco.php")  ?></span>
    </a>

        </nav>
    </div>

    <main class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
            <img class="me-3" src="../IMG/solid/user-doctor.svg" alt="" width="48" height="38">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">ADMINISTRADOR</h1>
                <small><?php echo"".$_SESSION['nomeUsuario'] ?></small>
            </div>
        </div>
        <script src="../JS/filtroTable.js"></script>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pequizar">

        <table id="myTable">
            <tr>
                <th style="width:60px;">Id</th>
                <th style="width:600px;">Nome do Fármaco</th>
                <th style="width:400px;">Preço</th>
                <th style="width:400px;">Quantidade</th>
                <th style="width:400px;">Data de Cadastro</th>
                <th style="width:400px;">Opções</th>
            </tr>
            <?php  include_once("../php/todosMedicamentos.php");
            ?>
        </table>
        <div class="addopc">
            <div class="adddiv">
                <button id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" onclick="textCadastro('Cadastramento de Fármacos',1)">
                    <i class="fa fa-medkit" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastramento de Fármacos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="../php/salvarFarmaco.php" enctype="multipart/form-data">
                            <input style="display:none"  class="form-control" name="modo" type="text" id="moda">
                            <div class="mb-3" id="meuId"  style="display:none">
                                <label for="formFile" class="form-label">Id do Fármaco</label>
                                <input readonly class="form-control" name="id" type="text" id="ids">
                            </div>
                            
                            <div class="mb-3">
                                <label for="formFile"  class="form-label">Nome do Fármaco</label>
                                <input class="form-control" name="nomeFarmaco" id="nome" type="text" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Preço</label>
                                <input class="form-control" id="preco" name="precoFarmaco" type="number" id="formFileMultiple" multiple>
                            </div>
                            <div class="mb-3">
                                <label for="formFileDisabled" class="form-label">Quantidade</label>
                                <input class="form-control"  id="quant" name="quantidade" type="number" id="formFileMultiple" multiple>
                            </div>
                            <!--
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Data de Cadastro</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="date">
                            </div>
    -->
                            <div id="filess">
                                <label for="formFileLg" class="form-label">Imagem do Fármaco</label>
                                <input class="form-control form-control-lg" id="formFileLg" name="imagemFarmaco" type="file">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary" id="salvar" >Salvar</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
    <script src="../JS/bootstrap.bundle.min.js"></script>
    <script src="../JS/all.js"></script>
    <script src="../JS/offcanvas.js">
    </script>
    <script src="../JS/testEditar.js"></script>
</body>

</html>