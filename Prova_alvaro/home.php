<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title> 
    <style>
       
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .box {
            background-color: #ffffff;
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .box a {
            display: block;
            text-decoration: none;
            color: #ffffff; /* Cor do texto branco para contrastar com o fundo verde */
            font-size: 18px;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            background-color: #4CAF50; /* Cor verde para os botões */
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .box a:hover {
            background-color: #45a049; /* Tonalidade mais escura ao passar o mouse */
        }
    </style>
</head>
<body>
   
    <div class="box">
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastre-se</a>
    </div>
</body>
</html>