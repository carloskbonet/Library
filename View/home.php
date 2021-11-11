<html>

<head>
    <title>Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../View/css/library.css" rel="stylesheet">
    <link rel="icon" href="../View/resources/images/icon-book.png">
</head>

<body>
    <label for="side-menu-checkbox" id="side-menu-label">
        <img id="side-menu-img" src="../View/resources/images/icon-side-menu.png">
    </label>
    <input type="checkbox" id="side-menu-checkbox">
    <nav id="side-menu-nav">
        <div class="side-menu">
            <a href="/books" id="side-menu-button" class="button-book">Livros</a>
            <a href="/loan" id="side-menu-button" class="button-loan">Empréstimos</a>
            <a href="/historic" id="side-menu-button" class="button-historic">Histórico</a>

            <form class="disconnect-form" method="post" action="/disconnect">
                <input class="disconnect-button" type="submit" value="Desconectar" />
            </form>
        </div>
    </nav>
</body>

</html>