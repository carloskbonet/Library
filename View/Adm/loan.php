<html>
<?php
include("./View/Adm/home.php");
?>

<head>
    <title>Loan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../View/css/books.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <?php foreach ($loans as $loan) { ?>
            <a for="open-modal">
                <div class="book-card" onclick="<?php $id = $loan['id']; ?>">
                    <img src="../View/resources/images/icon-book.png">
                    <label>Nome do Livro</label>

                    <input type="checkbox" id="open-modal" class="open-modal">
                    <div id="modal-loan">
                        <div class="modal-content">
                            <label id="modal-label">ID do usuário:<br> <?= $loan['user_id'] ?></label>
                            <label id="modal-label">Empréstimo:<br> <?= $loan['date_start'] ?></label>
                            <label id="modal-label">Devolução:<br> <?= $loan['date_end'] ?></label>
                            <br>
                            <?php if ($loan['deleted_at'] == '') { ?>
                                <form action="/loan-return" method="POST">
                                    <input type="hidden" name="id-book" value="<?= $loan['book_id'] ?>">    
                                    <input type="hidden" name="id-devolution" value="<?= $loan['id'] ?>">
                                    <button type="submit" class="loan-button">Devolver</button>
                                </form>
                            <?php } else { ?>
                                <label id="modal-label">Devolvido em:<br> <?= $loan['deleted_at'] ?></label>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>

    </div>
</body>

</html>