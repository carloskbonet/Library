<html>
<?php
include './View/resources/bootstrap_header.php';
?>

<head>
    <title>Login</title>
    <link href="../View/css/login.css" rel="stylesheet">

    <style>
        body {
            background: rgb(0, 0, 0);
            background: radial-gradient(circle, rgba(0, 0, 0, 1) 0%, rgba(46, 46, 46, 1) 15%, rgba(47, 47, 47, 1) 25%, rgba(115, 115, 115, 1) 45%, rgba(255, 255, 255, 1) 50%, rgba(83, 83, 83, 1) 56%, rgba(55, 55, 55, 1) 70%, rgba(32, 32, 32, 1) 85%, rgba(0, 0, 0, 1) 100%);
        }
    </style>
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
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input class="form-control" type="password" name="password-confirm-signup" placeholder="Confirmar Senha" minlength="6" maxlength="32" required>
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

                        <div class="form-group" style="margin-bottom: 5vw;">
                            <input type="button" class="btn float-right btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myModal" value="Registrar">
                        </div>

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Confirmar Cadastro</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                  
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Confirmar</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="./View/resources/JS/phone.js"></script>

    <script type="text/javascript">
        var $form = $(this).closest('form');
        var modalConfirm = function(callback) {
            $("#btn-confirm").on("click", function() {
                $("#mi-modal").modal('show');
            });
            $("#modal-btn-si").on("click", function() {
                callback(true);
                $("#mi-modal").modal('hide');
            });
            $("#modal-btn-no").on("click", function() {
                callback(false);
                $("#mi-modal").modal('hide');
            });
        };

        modalConfirm(function(confirm) {
            if (confirm) {
                $form.trigger('submit');
            } else {
                $("#result").html("NO CONFIRMADO");
            }
        });
    </script>
</body>

</html>