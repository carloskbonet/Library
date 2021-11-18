<html>
<?php
include("./View/home.php");
?>

<head>
    <title>Books</title>
    <style>
        th {
            color: white;
        }

        label {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <table class="table overflow-auto" style="margin-top: 2vh;">
            <thead>
                <tr>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Status</th>
                    <th scope="col">Alugar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book) { ?>
                    <a>
                        <tr>
                            <th><img src="../View/resources/images/icon-book.png" style="width: 2vw;"></th>
                            <th scope="row"><?= $book['name'] ?></th>
                            <td><label id="modal-label">Descrição:<br> <?= $book['description'] ?></label></td>
                            <td><label id="modal-label">Autor:<br> <?= $book['author'] ?></label></td>
                            <td><label id="modal-label">Categoria:<br> <?= $book['category'] ?></label></td>
                            <td><label id="modal-label">Status:<br> <?= $book['status'] ?></label></td>
                            <?php if ($book['status'] == 'available') { ?>
                                <form action="/loan-book" method="POST">
                                    <input type="hidden" name="id-loan" value="<?= $book['id'] ?>">
                                    <td><button type="submit" class="btn btn-light w-10">Alugar</button></td>
                                </form>
                            <?php } else { ?>
                                <td><button type="submit" class="btn btn-light w-10" disabled>Alugar</button></td>
                            <?php } ?>
                        </tr>
                    </a>

                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>