<html>
<head>
    <title>Login</title>
    <link href="../View/css/login.css" rel="stylesheet">
</head>

<body>
    <div class="login">
        <form action='/login' method="post" class="login-form">
            <label id="form-field"> Email :<br>
                <input type="text" name="email" id="form-input" required></label>

            <label id="form-field"> Senha :<br>
                <input type="password" name="password" id="form-input" required></label>

            <button type="submit" id="login-button">Entrar</button>

        </form>

        <div class="register">
            <button id="register-button" onclick="document.getElementById('modal').style.display='block'">Registrar</button>

            <div id="modal">
                <div class="form-modal">
                    <button id="close-button" onclick="document.getElementById('modal').style.display='none'">X</button>
                    <form action="/signup" method="post" class="register-form">
                        <label id="form-field-modal"> Email :<br>
                            <input type="email" name="email-signup" id="form-input"></label>

                        <label id="form-field-modal"> Senha :<br>
                            <input type="password" name="password-signup" id="form-input"></label>

                        <label id="form-field-modal"> Confirmar Senha :<br>
                            <input type="password" name="password-confirm-signup" id="form-input"></label>

                        <label id="form-field-modal"> Nome :<br>
                            <input type="text" name="name-signup" id="form-input"></label>

                        <label id="form-field-modal"> Telefone :<br>
                            <input type="tel" name="phone-signup" id="form-input"></label>

                        <button type="submit" id="register-button-modal">Registrar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>