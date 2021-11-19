<html>
<?php
include("./View/home.php");
include("./View/Adm/navbar.php");
?>

<head>
    <title>Books</title>
    <style>
        th {
            color: white;
        }

        td {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container position-inline">
        <table class="table overflow-auto" style="margin-top: 11vh;">
            <thead>
                <tr>
                    <th scope="col">Imagem</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Status</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Alugar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book) { ?>
                    <a>
                        <tr>
                            <td><img src="../View/resources/images/icon-book.png" style="width: 3vw;"></td>
                            <th scope="row">
                                <h5><?= $book['id'] ?></h5>
                            </th>
                            <form action="" method="POST">
                                <div class="input-group">
                                    <td><input class="form-control" type="text" name="name-edit" value="<?= $book['name'] ?>" required></td>
                                    <td><input class="form-control" type="text" name="description-edit" value="<?= $book['description'] ?>" required></td>
                                    <td><input class="form-control" type="text" name="author-edit" value="<?= $book['author'] ?>" required></td>
                                    <td><input class="form-control" type="text" name="category-edit" value="<?= $book['category'] ?>" required></td>
                                </div>
                                <td>
                                    <select class="form-select w-100 h-100" name="status-edit">
                                        <?php if ($book['status'] == 'available') { ?>
                                            <option selected="selected">
                                                available
                                            </option>
                                            <option>
                                                unavailable
                                            </option>
                                        <?php } else { ?>
                                            <option>
                                                available
                                            </option>
                                            <option selected="selected">
                                                unavailable
                                            </option>
                                        <?php }  ?>
                                    </select>
                                </td>
                                <td><button type="submit" class="btn btn-success"><i class="far fa-edit	"></i></button></td>
                            </form>

                            <?php if ($book['status'] == 'available') { ?>
                                <form action="/loan-book" method="POST">
                                    <input type="hidden" name="id-loan" value="<?= $book['id'] ?>">
                                    <td><button type="button" class="btn btn-light w-10"><i class="fas fa-folder-plus"></i></button></td>
                                </form>
                            <?php } else { ?>
                                <td><button type="button" class="btn btn-light w-10" disabled><i class="fas fa-folder-plus"></i></button></td>
                            <?php } ?>

                            <td>
                                <form action="/delete-book" method="POST">
                                    <input type="hidden" name="id-del" value="<?= $book['id'] ?>">
                                    <button type="submit" class="btn btn-danger"><i class="material-icons">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                            </svg>
                                    </button>

                                </form>
                            </td>
                        </tr>
                    </a>

                <?php } ?>
            </tbody>
        </table>
    </div>
</body>



</html>