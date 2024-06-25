<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true) 
    and (!isset($_SESSION['tipo']) == 'usuario'))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        unset($_SESSION['tipo']);
        header('Location: login.php');
    }
    
    $logado = $_SESSION['email'];
    $sql ="SELECT * FROM usuarios ORDER BY id DESC"; //listagem
    $result = $conexao->query($sql); //executa
    //print_r($result); mostra a quantidade de "cadastrados" em num_rows
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
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
}

/* Estilos para o cabeçalho da página */
.navbar {
    background-color: #6ae899ff;
    color: #fff;
    padding: 10px 20px;
    margin-bottom: 20px;
}

.navbar a {
    color: #fff;
    text-decoration: none;
    margin-left: 10px;
}

.navbar a:hover {
    text-decoration: underline;
}

/* Estilos para a tabela de usuários */
.table {
    width: 100%;
    margin-bottom: 20px;
    border-collapse: collapse;
}

.table th,
.table td {
    padding: 10px;
    text-align: center;
}

.table th {
    background-color: #343a40;
    color: white;
}

.table td {
    background-color: #ffffff;
    color: #333;
}

/* Estilos para os botões de ação */
.btn {
    display: inline-block;
    padding: 5px 10px;
    text-decoration: none;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-primary {
    background-color: ;
    border: none;
}

.btn-primary:hover {
    background-color:  #6ae899;
}

.btn-danger {
    background-color:  #6ae899;
    border: none;
}

.btn-danger:hover {
    background-color:  #6ae899;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <abhref="home.php">SISTEMA DE CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
    <br>
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) /*laço de repetição
                    e o mysqli_fetch_assoc($result) retorna a matriz associativa*/{
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['senha']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['tipo']."</td>";
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>