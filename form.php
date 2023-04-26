<?php
    include_once('form.php');

    if(isset($_POST['submit'])){
       include_once('config.php');
       
       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $senha = $_POST['senha'];
       $telefone = $_POST['telefone'];
       $sexo = $_POST['genero'];
       if($sexo === 'outro'){
        $sexo = $_POST['genero_outro'];
       }
       $datanasc = $_POST['data_nascimento'];
       $cidade = $_POST['cidade'];
       $estado = $_POST['estado'];
       $endereco = $_POST['endereco'];

       $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco)
       VALUES('$nome','$senha','$email','$telefone','$sexo','$datanasc','$cidade','$estado','$endereco')");
       header('Location: login.php');
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/form.css">
    <title>Formulario</title>
</head>
<body>
    <div class="box">
        <form action="form.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="nome" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" onclick="mostrarCampoOutro()" required>
                <label for="outro">Outro</label>
                <div id="campo-outro" style="display:none;">
                <input type="text" name="genero_outro" id="genero-outro" class="inputUser">
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

    <script src="./form.js"></script>
    <script src="./formp.php"></script>
</body>
</html>