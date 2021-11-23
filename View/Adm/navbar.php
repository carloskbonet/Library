<html>
<?php
include './View/resources/bootstrap_header.php';
?>

<head>
    <style>
        nav {
            margin-left: 18.6vw;
            width: 81.5vw;
            z-index: 10;
        }
    </style>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/store-book">Criar Livro <i class="fa fa-book" style="font-size: 2vw;"></i> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/users">Listar Usuários <i class="fas fa-address-card" style="font-size: 2vw;"></i> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/store-user-adm">Criar Usuário <i class="far fa-address-card" style="font-size: 2vw;"></i> <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>


</html>