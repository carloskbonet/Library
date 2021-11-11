<html>
<?php
include("./View/home.php");
?>

<head>
    <title>Loan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../View/css/books.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <?php foreach ($books as $book) { ?>
            <a>
                <div class="book-card" onclick="<?php $id = $book['id']; ?>">
                    <img src="../View/resources/images/icon-book.png">
                    <label> <?= $book['name'] ?> </label>
                </div>
            </a>
        <?php } ?>

    </div>
</body>

</html>