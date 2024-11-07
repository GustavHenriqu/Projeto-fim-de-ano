<?php
    $servidor = 'localhost';
    $banco = 'golbet';
    $usuario = 'root';
    $senha = 'root';

    $conexão = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conexão->connect_errno) {
        echo "Conexão falhada:(" .$conexão->connect_errno .")" . $conexão -> connect_errno;
    }
    else {
        echo'Conexão efetuada com sucesso.';
        }

        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $cpf=$_POST['cpf'];
        $telefone=$_POST['telefone'];
        $senha=$_POST['senha'];
    
        $result = mysqli_query($conexão,"INSERT INTO cadastro(nome,email,nascimento,Cpf,telefone,senha) values ('$nome','$email', '$cpf','$telefone','$senha')");

?>