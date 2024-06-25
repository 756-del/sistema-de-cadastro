<?php

    if(!empty($_GET['id'])){
        include_once('config.php');
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id='$id'";

        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $senha = $user_data['senha'];
                $tipo = $user_data['tipo'];
            }
        }else{
            header('Location: sistema.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title></head>
<body>
<a href="home.php">Voltar</a>
    <div class="box">
    <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value=<?php echo $senha;?> required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <p>Tipo:</p>
                <input type="radio" id="usuario" name="tipo" value="usuario" <?php echo ($tipo == 'usuario') ? 'checked' : '';?> required>
                <label for="usuario">Usuário</label>
                <br>
                <input type="radio" id="admin" name="tipo" value="admin" <?php echo ($tipo == 'admin') ? 'checked' : '';?> required>
                <label for="admin">Admin</label>
                <br>
                <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>