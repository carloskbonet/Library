<html>
<?php
include './View/home.php';
include './View/Adm/navbar.php';
?>

<head>
    <title>Cadastro de Usuário</title>
    <link href="../View/css/login.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">

            <div class="card" style="width: 400px;">
                <div class="overflow-auto card-body">
                <form action="/signup" method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                        </div>
                        <input class="form-control" type="text" name="email-signup" placeholder="E-mail" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input class="form-control" type="text" name="password-signup" placeholder="Senha" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                        </div>
                        <input class="form-control" type="text" name="name-signup" placeholder="Nome" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input class="form-control" type="text" name="phone-signup" placeholder="Telefone" required>
                    </div>

                    <div class="input-group form-group">
                        <select class="form-select w-100 h-100" name="status">
                            <option value="false">User</option>
                            <option value="true">Admin</option>
                        </select>
                    </div>

                    <button type="submit" class="btn float-right btn-outline-secondary">Criar novo Usuário</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>