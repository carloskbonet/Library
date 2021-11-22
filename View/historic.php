<html>
<?php
include("./View/home.php");
?>

<head>
    <title>Historic</title>
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
<div class="container overflow-auto">
        <table class="table" style="margin-top: 2vh;">
            <thead>
                <tr>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Empréstimo</th>
                    <th scope="col">Devolver em</th>
                    <th scope="col">Devolvido em</th>
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
                            <td><?= $loan['deleted_at'] ?></td>
                        </tr>
                    </a>

                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>