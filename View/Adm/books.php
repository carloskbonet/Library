<html>
<?php
include("./View/Adm/home.php");
?>

<head>
    <title>Books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../View/css/books.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="create">
            <button id="store-button" onclick=" document.getElementById('modal').style.display='block'">Criar</button>

            <div id="modal">
                <div class="form-modal">
                    <button id="close-button" onclick="document.getElementById('modal').style.display='none'">X</button>
                    <form action="/create-book" method="post" class="create-form">
                        <label id="form-field-modal"> Nome :<br>
                            <input type="text" name="name" id="form-input" required></label>

                        <label id="form-field-modal"> Descrição :<br>
                            <input type="text" name="description" id="form-input" required></label>

                        <label id="form-field-modal"> Autor :<br>
                            <input type="text" name="author" id="form-input" required></label>

                        <label id="form-field-modal"> Categoria :<br>
                            <input type="text" name="category" id="form-input" required></label>

                        <label id="form-field-modal"> Status :<br>
                            <select id="form-select-modal" name="status">
                                <option>available</option>
                                <option>unavailable</option>
                            </select></label>

                        <button type="submit" class="button-create">Criar novo livro</button>
                    </form>
                </div>
            </div>
        </div>

        <?php foreach ($books as $book) { ?>
            <a>
                <div class="book-card" onclick="<?php $id = $book['id']; ?>">
                    <img src="../View/resources/images/icon-book.png">
                    <label> <?= $book['name'] ?> </label>

                    <input type="checkbox" id="open-modal" class="open-modal">
                    <div id="modal-loan">
                        <div class="modal-content">
                            <label id="modal-label">ID:<br> <?= $book['id'] ?></label>

                            <form action="/edit-book" method="POST">
                                <input type="hidden" name="id" value="<?= $book['id'] ?>">
                                <label id="modal-label">Nome:<br><input type="text" name="name-edit" value="<?= $book['name'] ?>" required></label>
                                <label id="modal-label">Descrição:<br><input type="text" name="description-edit" value="<?= $book['description'] ?>" required></label>
                                <label id="modal-label">Autor:<br><input type="text" name="author-edit" value="<?= $book['author'] ?>" required></label>
                                <label id="modal-label">Categoria:<br><input type="text" name="category-edit" value="<?= $book['category'] ?>" required></label>
                                <label id="modal-label">Status:<br>
                                    <select name="status-edit">
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
                                    </select></label>

                                    <button type="submit" class="edit-button">Editar</button>
                            </form>
                            <br>
                            <?php if ($book['status'] == 'available') { ?>
                                <form action="/loan-book" method="POST">
                                    <input type="hidden" name="id-loan" value="<?= $book['id'] ?>">
                                    <button type="submit" class="loan-button">Alugar</button>
                                </form>
                            <?php } ?>
                            <form action="/delete-book" method="POST">
                                <input type="hidden" name="id-del" value="<?= $book['id'] ?>">
                                <button type="submit" class="delete-button">Deletar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </a>

        <?php } ?>
    </div>
</body>

</html>