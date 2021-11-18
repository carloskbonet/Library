<html>
<?php
include './View/resources/bootstrap_header.php';
?>

<head>
    <title>Library</title>
    <link rel="icon" href="../View/resources/images/icon-book.png">

    <style>
        body {
            display: grid;
            grid-template-columns: 20% 80%;
            overflow: hidden;
            background: rgb(0, 0, 0);
            background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(40, 35, 35, 1) 25%, rgba(46, 46, 46, 1) 50%, rgba(40, 35, 35, 1) 75%, rgba(0, 0, 0, 1) 100%);
        }
    </style>
</head>

<main>

    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark float-left h-100" style="width: 240px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-4">Biblioteca</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto" role="tablist">
            <li class="nav-item">
                <a href="/books" class="nav-link active" data-toggle="pill" role="tab" aria-controls="books" aria-selected="true">
                    <svg class="bi me-2" width="16" height="16">
                    </svg>
                    Livros
                </a>
            </li>
            <li>
                <a href="/loan" class="nav-link text-white" data-toggle="pill" role="tab" aria-controls="loan" aria-selected="false">
                    <svg class="bi me-2" width="16" height="16">
                    </svg>
                    Empréstimos
                </a>
            </li>
            <li>
                <a href="/historic" class="nav-link text-white" data-toggle="pill" role="tab" aria-controls="historic" aria-selected="false">
                    <svg class="bi me-2" width="16" height="16">
                    </svg>
                    Histórico
                </a>
            </li>
            <li class="align-self-center position-fixed" style="margin-top: 40vw;">
                <form class="nav-link" method="post" action="/disconnect">
                    <input class="input-group-text" type="submit" value="Desconectar" />
                </form>
            </li>
        </ul>

    </div>

</main>

</html>