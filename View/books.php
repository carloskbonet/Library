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
                            <td><?= $book['description'] ?></td>
                            <td><?= $book['author'] ?></td>
                            <td><?= $book['category'] ?></td>
                            <td><?= $book['status'] ?></td>
                            <?php if ($book['status'] == 'available') { ?>
                                <form action="/loan-book" method="POST">
                                    <input type="hidden" name="id-loan" value="<?= $book['id'] ?>">
                                    <td><button type="submit" class="btn btn-light w-10" data-bs-toggle="modal" data-bs-target="#myModal"
                                    onclick="selectID(<?= $book['id'] ?>)">
                                    <i class="fas fa-folder-plus"></i>
                                    </button></td>
                                </form>
                            <?php } else { ?>
                                <td><button type="button" class="btn btn-light w-10" disabled><i class="fas fa-folder-plus"></i></button></td>
                            <?php } ?>

                        </tr>
                    </a>

                <?php } ?>
            </tbody>
        </table>

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Modal body..
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                        <form action="/loan-book" method="POST">
                            <input type="hidden" name="id-loan" value="">
                            <button type="submit" class="btn btn-success">Confirm</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script>
        var id = null;

        function selectID(id_loan){
            this.id = id_loan;
        }
    </script>
</body>

</html>