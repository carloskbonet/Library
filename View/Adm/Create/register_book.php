<html>
<?php
include './View/home.php';
include './View/Adm/navbar.php';
?>

<head>
    <title>Cadastro de Livro</title>
    <link href="../View/css/login.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">

            <div class="card" style="width: 400px;">
                <div class="overflow-auto card-body">
                <form action="/create-book" method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                        </div>
                        <input class="form-control" type="text" name="name" placeholder="Nome" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
                        </div>
                        <input class="form-control" type="text" name="description" placeholder="Descrição" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-ad"></i></span>
                        </div>
                        <input class="form-control" type="text" name="author" placeholder="Autor" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fab fa-fort-awesome"></i></span>
                        </div>
                        <input class="form-control" type="text" name="category" placeholder="Categoria" required>
                    </div>

                    <div class="input-group form-group">
                        <select class="form-select w-100 h-100" name="status">
                            <option>available</option>
                            <option>unavailable</option>
                        </select>
                    </div>

                    <button type="submit" class="btn float-right btn-outline-secondary">Criar novo livro</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>