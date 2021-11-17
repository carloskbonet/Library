<html>
<?php
include("./View/Adm/home.php");
?>

<head>
    <title>Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../View/css/interface.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <?php foreach ($users as $user) { ?>
            <a>
                <div class="book-card" onclick="<?php $id = $book['id']; ?>">
                    <img src="../View/resources/images/icon-book.png">
                    <label> <?= $user['name'] ?> </label>

                    <input type="checkbox" id="open-modal" class="open-modal">
                    <div id="modal-loan">
                        <div class="modal-content">
                            <label id="modal-label">ID:<br> <?= $user['id'] ?></label>

                            <form action="/edit-user" method="POST">
                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                <label id="modal-label">Nome:<br><input type="text" name="name-edit" value="<?= $user['name'] ?>" required></label>
                                <label id="modal-label">Email:<br><input type="mail" name="email-edit" value="<?= $user['email'] ?>" required></label>
                                <label id="modal-label">Senha:<br><input type="text" name="password-edit" value="<?= $user['password'] ?>" required></label>
                                <label id="modal-label">Fone:<br><input type="number" name="phone-edit" value="<?= $user['phone'] ?>" required></label>
                                <label id="modal-label">ADM:<br>
                                    <select name="status-edit">
                                        <?php if ($user['is_admin'] == "t") { ?>
                                            <option selected="selected">
                                                true
                                            </option>
                                            <option>
                                                false
                                            </option>
                                        <?php } else { ?>
                                            <option>
                                                true
                                            </option>
                                            <option selected="selected">
                                                false
                                            </option>
                                        <?php }  ?>
                                    </select></label>

                                    <button type="submit" class="edit-button">Editar</button>
                            </form>
                            <br>
                            <form action="/delete-user" method="POST">
                                <input type="hidden" name="id-del" value="<?= $user['id'] ?>">
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