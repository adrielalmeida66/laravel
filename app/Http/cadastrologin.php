<?php 
    if(isset($_POST['submit']))
    {
       include_once('config.php');

       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $telefone = $_POST['telefone'];
       $senha = $_POST['senha'];
       $data = $_POST['datanas'];
       $sexo = $_POST['sexo'];
       $cidade = $_POST['cidade'];
       $estado = $_POST['estado'];
       $endereco = $_POST['endereco'];

       $result = mysqli_query ( $mysqli, "INSERT INTO cadastros (nome, email, telefone, senha, datanas, sexo, cidade, estado, endereco) 
       VALUES ('$nome', '$email', '$telefone', ' $senha', '$data', '$sexo','$cidade', '$estado', '$endereco' )");
    }



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background: black;

    }
    .box{

        color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(102, 185, 51);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
    }
    fieldset{
            border: 3px solid black;
        
        }
        legend{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            background-color: black;
            border-radius: 5px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;

        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
        }

        #submit{
            background:  #000000 ;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            
        }

    </style>



</head>
<body>
    <a href="http://britoaa.rf.gd/?i=1"> Voltar </a>
    <div class="box">
    <form action="cadastrologin.php" method="POST">
        <fieldset>
            <legend>Cadastro de login:</legend>
            <br><br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput" >Nome completo</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="email" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput" >E-mail</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput" >Telefone</label>
            </div><br><br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput" >Senha</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="date" name="datanas" id="datanas" class="inputUser" required>
                <label for="data" class="labelInput" >Data de Nascimento</label>
            </div>
                <br><br>
                    <p>Sexo:</p>
                    <input type="radio" id="masculino" name="sexo" value="masculino" required>
                    <label for="masculino">Masculino</label> <br>
                    <input type="radio" id="feminino" name="sexo" value="feminino" required>
                    <label for="feminino">Feminino </label> <br>        
                    <input type="radio" id="outro" name="sexo" value="outro" required>
                    <label for="outro">Outros </label> <br> 
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="nome" class="labelInput">Cidade</label> 
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="estado" id="estado" class="inputUser" required>
                        <label for="nome" class="labelInput">Estado</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                        <label for="nome" class="labelInput">Endereço</label>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit">


        </fieldset>
    </form>
</div>
</body>
</html>