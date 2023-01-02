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
                        <a class="nav-link" href="homeAdmin.html">Vendas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Configurações</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="/index.html">Sair</a></li>
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
                <small>Lukoki Daniel</small>
            </div>
        </div>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pequizar">

        <table id="myTable">
            <tr class="header">
                <th style="width:600px;">Nome do Fármaco</th>
                <th style="width:400px;">Preço</th>
                <th style="width:400px;">Quantidade</th>
                <th style="width:400px;">Data de Venda</th>
                <th style="width:400px;">Resposavel</th>
                <th style="width:400px;">Opções</th>
            </tr>
            <tr>
                <td>Paracetamol</td>
                <td>100</td>
                <td>200</td>
                <td>10-10-2022</td>
                <td>Mateus Kungo</td>
                <td>
                    <button class="iconDetalhe btnOPC" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>

                </td>
            </tr>
            <tr>
                <td>Paracetamol</td>
                <td>100</td>
                <td>200</td>
                <td>10-10-2022</td>
                <td>Mateus Kungo</td>
                <td>
                    <button class="iconDetalhe btnOPC" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>

                </td>
            </tr>
            <tr>
                <td>Paracetamol</td>
                <td>100</td>
                <td>200</td>
                <td>10-10-2022</td>
                <td>Mateus Kungo</td>
                <td>
                    <button class="iconDetalhe btnOPC" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>

                </td>
            </tr>
            <tr>
                <td>Paracetamol</td>
                <td>100</td>
                <td>200</td>
                <td>10-10-2022</td>
                <td>Mateus Kungo</td>
                <td>
                    <button class="iconDetalhe btnOPC" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>

                </td>
            </tr>
        </table>
        <div class="addopc">
            <div class="adddiv">
                <button id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </button>
            </div>
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> VENDAS</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
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
                                <input class="form-control" type="text" id="formFileMultiple">
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Valor Pago</label>
                                <input class="form-control" type="text" id="formFileMultiple">
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Troco</label>
                                <input class="form-control" type="text" id="formFileMultiple" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Data de Venda</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="date">
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Nome Do Cliente</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="text">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
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