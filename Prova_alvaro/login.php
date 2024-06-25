<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
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

/* Estilos para o container principal */
div {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

/* Estilos para o cabeçalho */
h1 {
    margin-bottom: 20px;
    color: #333;
}

/* Estilos para o formulário */
form {
    display: flex;
    flex-direction: column;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="radio"] {
    margin-right: 5px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

a {
    display: block;
    margin-bottom: 10px;
    text-decoration: none;
    color: #333;
}

a:hover {
    text-decoration: underline;
}


    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Conecte-se</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br>
            <p>Tipo:</p>
                <input type="radio" id="usuario" name="tipo" value="usuario" required>
                <label for="usuario">Usuário</label>
                <br>
                <input type="radio" id="admin" name="tipo" value="admin" required>
                <label for="admin">Admin</label>
                <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>