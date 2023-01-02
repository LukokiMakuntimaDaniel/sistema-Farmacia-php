<?php session_start();?>
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
                        <a class="nav-link" href="homeAdmin.php">Fármacos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usuario.php">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Relatório</a>
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
      RELATÓRIO DE VENDAS
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
        <h1>Fármacos mais Vendidos</h1>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="relatorio.php">Relatório de Vendas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  active" href="maisVendido">Fármaco mais Vendido</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="esgotado.php">Fármaco em Esgotamento</a>
            </li>
        </ul>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pequizar">
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Selecione a Data</label>
            <form method="post">
                <select style="width: 20%;float:left" id="select"  name="data" class="form-select" aria-label="Default select example">
                    <option>Hoje</option>
                    <?php if(isset($_POST['data'])){
                        echo"<option selected>".$_POST['data']."</option>";
                    }
                    ?>
                    <?php  include_once("../php/todasDatas.php")  ?>
                </select>
                <button type="submit" class="btn btn-primary" id="salvar" >Consultar</button>
            </form>
        </div>
        <table id="myTable">
            <tr class="header">
                <th style="width:600px;">Nome do Fármaco</th>
                <th style="width:400px;">Quantidade</th>
            </tr>
            <?php include_once("../php/osMasVindidos.php")?>
        </table>
        <div class="addopc">
            <div class="adddiv">
                <button id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                    <i class="fa fa-print" aria-hidden="true"></i>
                </button>
            </div>
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Produtos mais Vendido</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table id="myTable">
                            <tr class="header">
                                <th style="width:600px;">Nome do Fármaco</th>
                                <th style="width:400px;">Preço</th>

                            </tr>
                            <tr>
                                <td>Paracetamol</td>
                                <td>100</td>

                            </tr>
                            <tr>
                                <td>Paracetamol</td>
                                <td>100</td>

                            </tr>
                            <tr>
                                <td>Paracetamol</td>
                                <td>100</td>

                            </tr>
                            <tr>
                                <td>Paracetamol</td>
                                <td>100</td>

                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Confirmar</button>
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