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

                        <button type="button" class="btn float-right btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myModal">Criar novo livro</button>

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Confirmar Cadastro</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Confirmar</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>