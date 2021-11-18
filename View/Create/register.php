<html>
<?php
include './View/resources/bootstrap_header.php';
?>

<head>
    <title>Login</title>
    <link href="../View/css/login.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">

            <div class="card" style="width: 400px;">
                <div class="card-header">
                    <label class="float-left">
                        <a href="/">
                            <i class="far fa-arrow-alt-circle-left" style="font-size: 26px;"></i>
                        </a>
                        <label style="font-size: 29px;color: rgb(204, 190, 190);margin-left: 1vw;">Cadastro</label>
                    </label>

                </div>
                <div class="overflow-auto card-body">
                    <form action="/signup" method="post" class="register-form">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input class="form-control" type="email" name="email-signup" placeholder="E-mail">
                        </div>
                        <div class="input-group form-group">
                        <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input class="form-control" type="password" name="password-signup" placeholder="Senha">
                        </div>
                        <div class="input-group form-group">
                        <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input class="form-control" type="password" name="password-confirm-signup" placeholder="Confirmar Senha">
                        </div>
                        <div class="input-group form-group">
                        <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                            </div>
                            <input class="form-control" type="text" name="name-signup" placeholder="Nome">
                        </div>
                        <div class="input-group form-group">
                        <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input class="form-control" type="tel" name="phone-signup" placeholder="Telefone">
                        </div>

                        <div class="form-group" style="margin-bottom: 5vw;">
                            <input type="submit" class="btn float-right btn-outline-secondary" value="Registrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>