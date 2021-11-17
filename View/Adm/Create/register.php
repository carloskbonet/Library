<html>
<?php
include("./View/Adm/home.php");
?>

<head>
    <title>Create User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <form action="/create-user" method="post" class="create-form">
            <label id="form-field-modal"> Nome :<br>
                <input type="text" name="name" id="form-input" required></label>

            <label id="form-field-modal"> Email :<br>
                <input type="text" name="email" id="form-input" required></label>

            <label id="form-field-modal"> Password :<br>
                <input type="text" name="password" id="form-input" required></label>

            <label id="form-field-modal"> Fone :<br>
                <input type="text" name="phone" id="form-input" required></label>

            <label id="form-field-modal"> ADM :<br>
                <select id="form-select-modal" name="status">
                    <option>true</option>
                    <option selected="selected">false</option>
                </select></label>

            <button type="submit" class="button-create">Adicionar Usuário</button>
        </form>
    </div>
</body>

</html>