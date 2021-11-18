<html>
<?php
include './View/resources/bootstrap_header.php';
?>

<head>
    <title>Login</title>
    <link rel="icon" href="../View/resources/images/icon-book.png">
    <link href="../View/css/login.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card" style="width: 400px;">
                <div class="card-header">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    <form action='/login' method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input class="form-control" type="mail" name="email" placeholder="E-mail" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn float-right btn-outline-secondary" value="Entrar">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <p class="text-info">Não possui uma conta? <a href="/store-signup">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>