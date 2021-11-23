<html>
<?php
include("./View/home.php");
include("./View/Adm/navbar.php");
?>

<head>
    <title>Users</title>
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
        <table class="table" style="margin-top: 1vh;">
            <thead>
                <tr>
                    <th scope="col">Imagem</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Status</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) { ?>
                    <a>
                        <tr>
                            <td><img src="../View/resources/images/icon-book.png" style="width: 3vw;"></td>
                            <td><?= $user['id'] ?></td>
                            <div class="input-group">
                                <form action="/edit-user" method="POST">
                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                    <td><input class="form-control" type="text" name="name-edit" value="<?= $user['name'] ?>" required></td>
                                    <td><input class="form-control" type="mail" name="email-edit" value="<?= $user['email'] ?>" required></td>
                                    <td><input class="form-control" type="text" name="password-edit" value="<?= $user['password'] ?>" required></td>
                                    <td><input class="form-control" type="number" name="phone-edit" value="<?= $user['phone'] ?>" required></td>
                                    <td>
                                        <select class="form-select w-100 h-100" name="status">
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
                                        </select>
                                    </td>
                                    <td><button type="submit" class="btn btn-success"><i class="far fa-edit	"></i></button></td>
                                </form>
                                <form action="/delete-user" method="POST">
                                    <input type="hidden" name="id-del" value="<?= $user['id'] ?>">
                                    <td><button type="submit" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                            </svg>
                                        </button></td>
                                </form>
                            </div>
                        </tr>
                    </a>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>