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
    <div class="container position-inline overflow-auto">
        <table class="table" style="margin-top: 11vh;">
            <thead>
                <tr>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Data Aluguel</th>
                    <th scope="col">Devolver Em</th>
                    <th scope="col">Status da devolução</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($loans as $loan) { ?>
                    <a>
                        <tr>
                            <td><img src="../View/resources/images/icon-book.png" style="width: 3vw;"></td>
                            <div class="input-group">
                                <td><?= $loan['name'] ?></td>
                                <td><?= $loan['name2'] ?></td>
                                <td><?= $loan['date_start'] ?></td>
                                <td><?= $loan['date_end'] ?></td>
                                <td>
                                    <?php if ($loan['deleted_at'] != '') { ?>
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