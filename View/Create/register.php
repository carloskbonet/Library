<html>

<head>
    <title>Login</title>
</head>

<body>

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

</body>

</html>