<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="pb-3">
        <div class="row flex-nowrap justify-content-between align-items-center pt-3 pb-3">
            <div class="col-4 pt-1">
                <a href="#" class="text-muted" id="data">
                    <?=date('d/m/Y')?>
                </a>
            </div>
            <div class="container-fluid text-center">
                <a href="index.php">
                    <img id="logo" class="col-md-4" src="imagens pizza/logo.png"> <!--Logo-->
                </a>
            </div>
        </div>
    </div>
<?php

// mostra tudo que tem dentro de uma array print_r($_POST);

if(isset($_POST) && array_key_exists('nome', $_POST)){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
   $pedido = $_POST['pedido'];

// echo json_encode (array('message' -> "Usuario $nome inserido com sucesso"));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <div class="container">
        <div class="row">
            <div class="col-12 md-5 center">
                <!-- Navbar-->
                <nav class="navbar navbar-expand-lg navbar navbar" style="background-color: #f5260b;">
                    <a class="navbar-brand cor-nav" href="index.php?pagina=home/listagem">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link cor-nav" href="index.php?pagina=pizzarias/listagem">Pizzaria<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link cor-nav" href="index.php?pagina=promocoes/listagem">Promoções <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle cor-nav" href="index.php?pagina=cardapios/listagem" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Cardapio
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Pizza Salgada</a>
                                    <a class="dropdown-item" href="#">Pizza Doce</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Petiscos</a>
                                </div>
                            <li class="nav-item">
                                <a class="nav-link cor-nav" href="index.php?pagina=pedidos/listagem">Pedido</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="">
                            <button class="btn btn-outline bg-white my-2 my-sm-0" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>
                <!-- Carrosel-->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imagens pizza/fatia.jpg" class="rounded mx-auto d-block w-100" alt="pizza"
                                width="100%" height="500px">
                        </div>
                        <div class="carousel-item">
                            <img src="imagens pizza/entrega.jpg" class="rounded mx-auto d-block w-100" alt=""
                                width="100%" height="500px">
                        </div>
                        <div class="carousel-item">
                            <img src="imagens pizza/aniversario.jpeg" img-fluid class="rounded mx-auto d-block w-100"
                                alt="entrega pizza" width="100%" height="500px">
                        </div>
                        <div class="carousel-item">
                            <img src="imagens pizza/desconto.jpg" class="rounded mx-auto d-block w-100"
                                alt="pizza em metro" width="100%" height="500px">
                        </div>
                    </div> <br> <br>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Proximo</span> <br><br>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Tabela das mais pedidas-->
    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pizza Pequena</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>8 fatias</li>
                        <li>R$ 32,00</li>
                    </ul>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pizza Média</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 fatias</li>
                        <li>R$ 34,00</li>
                    </ul>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pizza Grande</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>12 fatias</li>
                        <li>R$ 38,00</li>
                    </ul>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pizza Gigante</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>16 fatias</li>
                        <li>R$ 40,00</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-2 mb-5">
            <div class="col-8 text-center">
                <table class="table table-bordered responsive-lg">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">As mais pedidas</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="text-center">
                            <figure><img src="imagens pizza/pizza.png" alt="Picanha " class="img-responsive"></figure>

                            <tr>
                                <th scope="row">1</th>
                                <td><a href="#" title="Ingredientes"
                                        data-content="calabresa, molho de tomate, mussarela e tomate">Calabresa</a></td>
                                <td>
                                    <button class="btn btn-warning btn-sm " data-toggle="tooltip" data-placement="top"
                                        title="Incluir no pedido"><svg class="bi bi-plus-square" width="1em"
                                            height="1em" viewBox="0 0 16 16" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z"
                                                clip-rule="evenodd" />
                                        </svg></button></th>
                                    <button class="btn btn-danger btn-sm btn-excluir" data-toggle="tooltip"
                                        data-placement="top" title="Excluir do pedido"><svg class="bi bi-trash-fill"
                                            width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z"
                                                clip-rule="evenodd" />
                                        </svg></button></th>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="#" title="Ingredientes"
                                        data-content="picanha, molho de tomate, cheddar e tomate"
                                        data-toggle="popover">Picanha com cheddar</a></td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="Incluir no pedido"><svg class="bi bi-plus-square" width="1em"
                                            height="1em" viewBox="0 0 16 16" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z"
                                                clip-rule="evenodd" />
                                        </svg></button></th>
                                    <button class="btn btn-danger btn-sm btn-excluir" data-toggle="tooltip"
                                        data-placement="top" title="Excluir do pedido"><svg class="bi bi-trash-fill"
                                            width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z"
                                                clip-rule="evenodd" />
                                        </svg></button></th>
                                </td>

                            <tr>
                                <th scope="row">3</th>
                                <td><a href="#" title="Ingredientes"
                                        data-content="frango desfiado, catupiry, molho de tomate, oregano, mussarela"
                                        data-toggle="popover">Frango com Catupiry</a></td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="Incluir no pedido"><svg class="bi bi-plus-square" width="1em"
                                            height="1em" viewBox="0 0 16 16" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z"
                                                clip-rule="evenodd" />
                                        </svg></button></th>
                                    <button class="btn btn-danger btn-sm btn-excluir" data-toggle="tooltip"
                                        data-placement="top" title="Excluir do pedido"><svg class="bi bi-trash-fill"
                                            width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z"
                                                clip-rule="evenodd" />
                                        </svg></button></th>
                                </td>

                            <tr>
                                <th scope="row">4</th>
                                <td><a href="#" title="Ingredientes"
                                        data-content="morango, chocolate ao leite, creme de leite"
                                        data-toggle="popover">Morango com chocolate</a></td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="Incluir no pedido"><svg class="bi bi-plus-square" width="1em"
                                            height="1em" viewBox="0 0 16 16" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z"
                                                clip-rule="evenodd" />
                                        </svg></button></th>
                                    <button class="btn btn-danger btn-sm btn-excluir" data-toggle="tooltip"
                                        data-placement="top" title="Excluir do pedido"><svg class="bi bi-trash-fill"
                                            width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z"
                                                clip-rule="evenodd" />
                                        </svg></button></th>
                                </td>

                            <tr>
                                <th scope="row">5</th>
                                <td><a href="#" title="Ingredientes" data-content="chocolate ao leite, Sorvete"
                                        data-toggle="popover">Sorvete</a></td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="Incluir no pedido"><svg class="bi bi-plus-square" width="1em"
                                            height="1em" viewBox="0 0 16 16" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z"
                                                clip-rule="evenodd" />
                                        </svg></button></th>
                                    <button class="btn btn-danger btn-sm btn-excluir" data-toggle="tooltip"
                                        data-placement="top" title="Excluir do pedido"><svg class="bi bi-trash-fill"
                                            width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z"
                                                clip-rule="evenodd" />
                                        </svg></button></th>
                                </td>
                            <tr>

                    </tbody>
                </table>

            </div>
        </div>
     
        <!--toast-->
        <div style="position: relative; min-height: 200px;">
            <div style="position: fixed; top: 0; right: 0;">
                <div class="toast" id="message-cliente" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <i class="fa fa-check text-success"></i>
                        <strong class="mr-auto">Clientes</strong>
                        <small class="text-muted"></small>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        Olá, pedido excluido com sucesso!
                    </div>
                </div>
            </div>
        </div>
        <!-- toast retorno-->
        <div style="position: relative; min-height: 200px;">
            <div style="position: fixed; top: 0; right: 0;">
                <div class="toast" id="toast-retorno" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <i class="fa fa-check text-success"></i>
                        <strong class="mr-auto">Clientes</strong>
                        <small class="text-muted"></small>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">

                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <!--tempo de entrega  -->
    <div class="container">
        <div class="row">
            <div class="font bg-danger card fab text-center">

                <label for=" opcao1"><strong> Entrega <br> 45 minutos</strong></label>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas"
                    data-icon="motorcycle" class="svg-inline--fa fa-motorcycle fa-w-20" role="img"
                    viewBox="0 0 640 512">
                    <path fill="currentColor"
                        d="M512.9 192c-14.9-.1-29.1 2.3-42.4 6.9L437.6 144H520c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24h-45.3c-6.8 0-13.3 2.9-17.8 7.9l-37.5 41.7-22.8-38C392.2 68.4 384.4 64 376 64h-80c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h66.4l19.2 32H227.9c-17.7-23.1-44.9-40-99.9-40H72.5C59 104 47.7 115 48 128.5c.2 13 10.9 23.5 24 23.5h56c24.5 0 38.7 10.9 47.8 24.8l-11.3 20.5c-13-3.9-26.9-5.7-41.3-5.2C55.9 194.5 1.6 249.6 0 317c-1.6 72.1 56.3 131 128 131 59.6 0 109.7-40.8 124-96h84.2c13.7 0 24.6-11.4 24-25.1-2.1-47.1 17.5-93.7 56.2-125l12.5 20.8c-27.6 23.7-45.1 58.9-44.8 98.2.5 69.6 57.2 126.5 126.8 127.1 71.6.7 129.8-57.5 129.2-129.1-.7-69.6-57.6-126.4-127.2-126.9zM128 400c-44.1 0-80-35.9-80-80s35.9-80 80-80c4.2 0 8.4.3 12.5 1L99 316.4c-8.8 16 2.8 35.6 21 35.6h81.3c-12.4 28.2-40.6 48-73.3 48zm463.9-75.6c-2.2 40.6-35 73.4-75.5 75.5-46.1 2.5-84.4-34.3-84.4-79.9 0-21.4 8.4-40.8 22.1-55.1l49.4 82.4c4.5 7.6 14.4 10 22 5.5l13.7-8.2c7.6-4.5 10-14.4 5.5-22l-48.6-80.9c5.2-1.1 10.5-1.6 15.9-1.6 45.6-.1 82.3 38.2 79.9 84.3z" />
                </svg>

            </div>
        </div>
    </div>
    </div>
    <!--modal-->
    <div class="row">
        <div class="col-12 text-center">
            <button class="btn btn-primary" id="btn-abrir">Ver bairros atendidos</button>
        </div>

        <div id="meu-modal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Entrega</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><strong> Grátis</strong> Bairros Agostini, Andreatta, Estrela, São Luiz, Centro,
                            Gotardo.<br>
                            <strong> Taxa de Entrega R$ 5,00: </strong> Zona Rural, Canela Gaúcha, Trevo. </p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                    </div>
                </div>
            </div>
        </div> <br> <br>
    </div> <br> <br>
   
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/valcep.js"></script>
    <script src="js/page01.js"></script>
    <!--  https://code.jquery.com/jquery-3.4.1.slim.min.js  
     integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"
    <script src="js/jquery-3.4.0.min.js"></script> -->
</body>
</html>
    </header>