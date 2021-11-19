<html>
<?php
include("./View/home.php");
?>

<head>
    <title>Loan</title>
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
    <div class="container">
        <table class="table overflow-auto" style="margin-top: 2vh;">
            <thead>
                <tr>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Empréstimo</th>
                    <th scope="col">Devolver em</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($loans as $loan) { ?>
                    <a>
                        <tr>
                            <th><img src="../View/resources/images/icon-book.png" style="width: 2vw;"></th>
                            <td><?= $loan['name'] ?></td>
                            <td><?= $loan['date_start'] ?></td>
                            <td><?= $loan['date_end'] ?></td>
                            <?php if ($loan['deleted_at'] == '') { ?>
                                <form action="/loan-return" method="POST">
                                    <input type="hidden" name="id-book" value="<?= $loan['book_id'] ?>">
                                    <input type="hidden" name="id-devolution" value="<?= $loan['id'] ?>">
                                    <td><button type="submit" class="btn btn-light w-10">Devolver</button></td>
                                </form>
                            <?php } else { ?>
                                <td><?= $loan['deleted_at'] ?></td>
                            <?php } ?>
                        </tr>
                    </a>

                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>