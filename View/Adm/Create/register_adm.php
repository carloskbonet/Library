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
                        <input class="form-control" type="email" name="email-signup" placeholder="E-mail" minlength="8" maxlength="64" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input class="form-control" type="password" name="password-signup" placeholder="Senha" minlength="6" maxlength="32" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                        </div>
                        <input class="form-control" type="text" name="name-signup" placeholder="Nome" minlength="3" maxlength="128" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input class="form-control" type="text" name="phone-signup" id="phone" placeholder="(99) 99999-9999" title="e.g (99) 99999-9999" pattern="^\([0-9]{2}\)\s[0-9]{5}-[0-9]{4}$" required>
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

    <script type="text/javascript" src="./View/resources/JS/phone.js"></script>
</body>

</html>