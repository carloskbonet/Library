<html>

<head>
    <title>Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../View/resources/images/icon-book.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/books" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Livros
        </a>
      </li>
      <li>
        <a href="/loan" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Empréstimos
        </a>
      </li>
      <li>
        <a href="/historic" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Histórico
        </a>
      </li>
    </ul>
    <hr>

    </div>

    <nav id="side-menu-nav">
        <div class="side-menu">
            <button type="button" class="btn btn-primary">Primary</button>
            <a href="/books" id="side-menu-button" class="button-book">Livros</a>
            <a href="/loan" id="side-menu-button" class="button-loan">Empréstimos</a>
            <a href="/historic" id="side-menu-button" class="button-historic">Histórico</a>

            <form class="disconnect-form" method="post" action="/disconnect">
                <input class="disconnect-button" type="submit" value="Desconectar" />
            </form>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>