<html>
<?php
include("./View/home.php");
?>

<head>
    <title>Books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../View/css/interface.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <?php foreach ($books as $book) { ?>
            <a>
                <div class="book-card" onclick="<?php $id = $book['id']; ?>">
                    <img src="../View/resources/images/icon-book.png">
                    <label> <?= $book['name'] ?> </label>

                    <input type="checkbox" id="open-modal" class="open-modal">
                    <div id="modal-loan">
                        <div class="modal-content">
                            <label id="modal-label">ID:<br> <?= $book['id'] ?></label>
                            <label id="modal-label">Descrição:<br> <?= $book['description'] ?></label>
                            <label id="modal-label">Autor:<br> <?= $book['author'] ?></label>
                            <label id="modal-label">Categoria:<br> <?= $book['category'] ?></label>
                            <label id="modal-label">Status:<br> <?= $book['status'] ?></label>
                            <br>
                            <?php if ($book['status'] == 'available') { ?>
                                <form action="/loan-book" method="POST">
                                    <input type="hidden" name="id-loan" value="<?= $book['id'] ?>">
                                    <button type="submit" class="loan-button">Alugar</button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </a>

        <?php } ?>

    </div>
</body>

</html>