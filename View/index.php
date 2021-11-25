<html>
<?php
include './View/resources/bootstrap_header.php';
?>

<head>
    <title>Login</title>
    <link rel="icon" href="../View/resources/images/icon-book.png">
    <link href="../View/css/login.css" rel="stylesheet">

    <style>
        body {
    background: rgb(0,0,0);
    background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(46,46,46,1) 15%, rgba(47,47,47,1) 25%, rgba(115,115,115,1) 45%, rgba(255,255,255,1) 50%, rgba(83,83,83,1) 56%, rgba(55,55,55,1) 70%, rgba(32,32,32,1) 85%, rgba(0,0,0,1) 100%);
}
    </style>
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
                            <input class="form-control" type="mail" name="email" placeholder="E-mail" minlength="8" maxlength="64" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input class="form-control" type="password" name="password" placeholder="Password" minlength="6" maxlength="32" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn float-right btn-outline-secondary" value="Entrar">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <p class="text-info">Não possui uma conta? <a href="/show-signup">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>