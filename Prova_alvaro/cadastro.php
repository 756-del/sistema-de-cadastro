<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $tipo = $_POST['tipo'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,tipo)
        VALUES ('$nome','$email','$senha','$tipo')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<style>
/* Reset básico para garantir consistência */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilos para o body */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Estilos para o link de voltar */
a {
    display: block;
    margin-bottom: 10px;
    text-decoration: none;
    color: #333;
}

a:hover {
    text-decoration: underline;
}

/* Estilos para o container principal */
.box {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

/* Estilos para o formulário */
form {
    margin-top: 20px;
}

fieldset {
    border: none;
}

legend {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
}

/* Estilos para as caixas de entrada */
.inputBox {
    position: relative;
    margin-bottom: 20px;
}

.inputUser {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.labelInput {
    position: absolute;
    top: 10px;
    left: 10px;
    color: #999;
    font-size: 16px;
    pointer-events: none;
    transition: 0.3s;
}

.inputUser:focus + .labelInput,
.inputUser:valid + .labelInput {
    top: -15px;
    left: 8px;
    font-size: 12px;
    color: #333;
    background-color: #fff;
    padding: 2px 5px;
}

/* Estilos para os radio buttons */
input[type="radio"] {
    margin-right: 5px;
}

/* Estilos para o botão submit */
#submit {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

#submit:hover {
    background-color: #45a049;
}

</style>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <p>Tipo:</p>
                <input type="radio" id="usuario" name="tipo" value="usuario" required>
                <label for="usuario">Usuário</label>
                <br>
                <input type="radio" id="admin" name="tipo" value="admin" required>
                <label for="admin">Admin</label>
                <br>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>