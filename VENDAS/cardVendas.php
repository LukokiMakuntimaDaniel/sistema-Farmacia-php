<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>VENDAS</title>

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
<script src="../javascript/vender.js"></script>
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
                        <a class="nav-link" href="cardVendas.php">Vendas</a>
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
      VENDAS
    </a>

        </nav>
    </div>

    <main class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
            <img class="me-3" src="../IMG/solid/user-doctor.svg" alt="" width="48" height="38">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">VENDEDOR</h1>
                <small><?php echo"".$_SESSION['nomeUsuario'] ?></small>
            </div>
        </div>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pequizar">

        <div class="container">
            <?php   include_once("../php/vendas.php") 
            ?>
        </div>

        <div class="addopc">
            <div class="adddiv">
                <a href="../php/sair.php">
                    <button id="myBtn">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                </button>
                </a>
            </div>
        </div>
        



        <div class="modal fade" id="exampleModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> VENDAS</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="../php/vender.php">
                        <div class="mb-3">
                                <label for="formFile" class="form-label">Id do Fármaco</label>
                                <input readonly class="form-control" type="text" id="id" name="ids" >
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Nome do Fármaco</label>
                                <input readonly class="form-control" type="text" id="formFile" name="nome" >
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Preço</label>
                                <input readonly class="form-control" name="precos" type="text" id="preco" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="formFileDisabled" class="form-label">Quantidade do Farmaco</label>
                                <input readonly class="form-control" type="text" name="total" id="quantidade">
                            </div>
                            <div class="mb-3">
                                <label for="formFileDisabled" class="form-label">Quantidade A Comprar</label>
                                <input class="form-control" onkeyup="verifica()" type="number" name="quantosAComprar" id="quantidades">
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Valor a Pagar</label>
                                <input class="form-control" onkeyup="troco()" placeholder="insira valor a pagar" type="number" name="granaApagar" id="valorPagar">
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Troco</label>
                                <input readonly class="form-control" type="text" id="troca" name="trocos">
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Nome Do Cliente</label>
                                <input class="form-control form-control-sm" id="formFileSm" name="nomeCliente" type="text">
                            </div>
                            <div style="position:relative;" class="modal-footer">
                                 <span id="mensagem" style="position:absolute;left:0;color:red"></span>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button  type="submit" id="confirmar" class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modals">Confirmar</button>
                            </div>
                        </form>
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalToggle2s" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">Facturas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="">
                            <h5 class="modal-title Custumecenter" id="exampleModalToggleLabel2">Santos Vicente</h5>
                        </div>
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">NIF: 2417030942</h5>
                        </div>
                        <form>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Nome do Fármaco</label>
                                <input class="form-control" type="text" id="formFile" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Preço</label>
                                <input class="form-control" type="text" id="formFileMultiple" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="formFileDisabled" class="form-label">Quantidade</label>
                                <input class="form-control" type="text" id="formFileMultiple" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Valor Pago</label>
                                <input class="form-control" type="text" id="formFileMultiple" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Troco</label>
                                <input class="form-control" type="text" id="formFileMultiple" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Data de Venda</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="text" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Nome Do Cliente</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="text" disabled>
                            </div>
                            <div class="">
                                <h5 class="modal-title Custumecenter" id="exampleModalToggleLabel2">Localização: Rua QM Bairro Zango IV, Nº 14 EE</h5>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Finalizar</button>
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