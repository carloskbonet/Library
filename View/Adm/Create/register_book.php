<html>
<?php
include './View/home.php';
include './View/Adm/navbar.php';
?>

<head>
    <title>Cadastro de Livro</title>
</head>

<body>
    <div class="container">
        <div class="create">
            <button id="store-button" onclick=" document.getElementById('modal').style.display='block'">Criar</button>

            <div id="modal">
                <div class="form-modal">
                    <button id="close-button" onclick="document.getElementById('modal').style.display='none'">X</button>
                    <form action="/create-book" method="post" class="create-form">
                        <label id="form-field-modal"> Nome :<br>
                            <input type="text" name="name" id="form-input" required></label>

                        <label id="form-field-modal"> Descrição :<br>
                            <input type="text" name="description" id="form-input" required></label>

                        <label id="form-field-modal"> Autor :<br>
                            <input type="text" name="author" id="form-input" required></label>

                        <label id="form-field-modal"> Categoria :<br>
                            <input type="text" name="category" id="form-input" required></label>

                        <label id="form-field-modal"> Status :<br>
                            <select id="form-select-modal" name="status">
                                <option>available</option>
                                <option>unavailable</option>
                            </select></label>

                        <button type="submit" class="button-create">Criar novo livro</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>