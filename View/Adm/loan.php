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
    <div class="container position-inline overflow-auto">
        <table class="table" style="margin-top: 11vh;">
            <thead>
                <tr>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Data Aluguel</th>
                    <th scope="col">Devolver Em</th>
                    <th scope="col">Devolver</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($loans as $loan) { ?>
                    <a>
                        <tr>
                            <td><img src="../View/resources/images/icon-book.png" style="width: 3vw;"></td>
                            <div class="input-group">
                                <td><?= $loan['name'] ?></td>
                                <td><?= $loan['user_id'] ?></td>
                                <td><?= $loan['date_start'] ?></td>
                                <td><?= $loan['date_end'] ?></td>
                                <td>
                                    <?php if ($loan['deleted_at'] == '') { ?>
                                        <form action="/loan-return" method="POST">
                                            <input type="hidden" name="id-book" value="<?= $loan['book_id'] ?>">
                                            <input type="hidden" name="id-devolution" value="<?= $loan['id'] ?>">
                                            <button type="submit" class="btn btn-light w-10"><i class="fas fa-exchange-alt"></i></button>
                                        </form>
                                    <?php } else { ?>
                                        <label> <?= $loan['deleted_at'] ?></label>
                                    <?php } ?>
                                </td>
                            </div>
                        </tr>
                    </a>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>