<?php 
include('config.php');
if(isset($_POST['email']) && isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0){
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    } else{

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM cadastros WHERE email = '$email'AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo sql" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if( $quantidade == 1){  

            $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['nome'] = $usuario['nome'];
                header("Location: incio.php");


        } else{
            echo "Falha ao logar! Email ou senha incorretos";
        }

    }


}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* Define a fonte usada em todo o documento e adiciona um fundo gradiente */
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color:#000000;
        }

        /* Define o estilo do formulário de login */
        #login-form {
            background-color:  rgba(102, 185, 45);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }

        /* Define o estilo dos campos de entrada */
        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        /* Define o estilo do botão de envio */
        .submit-button {
            background-color: black;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        /* Define o estilo do botão de envio quando o mouse passa sobre ele */
        .submit-button:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        /* Define o estilo do link "cadastro" */
        #signup-link {
            display: block;
            text-align: center;
            color: white;
            margin-top: 20px;
        }

        /* Define o estilo do link "cadastro" quando o mouse passa sobre ele */
        #signup-link:hover {
            color:rgba(102, 185, 51);
        }
    </style>
</head>
<body>
    <div id="login-form">
        <form method="POST" action="inicio.php"> 
            <input type="text" name="email" placeholder="Email" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br><br>
            <input class="submit-button" type="submit" name="submit" value="Enviar">
        </form>         
    </div>
    <a href="cadastrologin.php" id="signup-link">Cadastre-se</a>
</body>
</html>