<?php

if (!isset($titulo)) {
    $titulo = "Bon Appetit";
};

?>

<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title> <?php $titulo ?> </title>
    <link rel='stylesheet' href='../style/bootstrap.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <link rel='stylesheet' href='../style/main.css?v=1a04'>
</head>

<body>
    <div class='container'>
        <header class='row'>
            <nav class='col-12 navbar navbar-expand-lg navbar-light header-tabs navegador'>
                <a class='navbar-brand' href='../pages/menu.php'>Bon Appetit</a>
                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>

                <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                    <ul class='navbar-nav mr-auto'>
                        <li class='nav-item'>
                            <a class='nav-link active' href='../pages/menu.php'><i class='fas fa-home'></i> Principal</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='../pages/historial.php'><i class='fas fa-box'></i> Pedidos</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='../pages/estado.php'><i class='fas fa-tasks'></i> Estado</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='../pages/usuario.php'><i class='fas fa-user'></i> Usuario</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>