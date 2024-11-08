<?php
include_once ('../conexao.php');

if ($_POST['cadastrar']){
    $cpf=$_POST['cpf'];
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $nascimento=$_POST['nascimento'];
    $senha=$_POST['senha'];

    $sql ="insert into cadastro (cpf,nome,email,telefone,nascimento,senha)
                values ('?','?','?','?','?','?')";

            mysqli_query($conexao,$sql);
}

?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>GOLBET Cadastro | Criar conta</title>
</head>

<body>
    <main class="main-section">
        <div class="left-container">
            <div class="top-left">
                <img class="img-logo" src="./imagens/Logogolbet.rodape.png">
                <p>Vença no jogo, conquiste na vida!</p>
            </div>

            <div class="image-box">
                <img src="./imagens/PlayerPng.png">
            </div>



        </div>

        <div class="right-container">
            <form method="post">

                <h1 class="title">Criar Conta</h1>
                <p id="join-text">Já tem uma conta? <a class="link-text" href="../LoginPage/index.html">Entrar</a></p>

                <div class="input-container">


                    <div class="grudado-inputs">
                        <div class="input-group">
                            <input id="name-input" type="text" name="nome" placeholder="Nome de usuário" required>

                        </div>
                        <div class="input-group"> 
                            <input type="email" id="email-input" name="email" placeholder="Email" required>
                            <div class="email-types">
                                <p onclick="addDomain('@uol.com.br')" class="button" id="oul">@uol.com.br</p>
                                <p onclick="addDomain('@gmail.com')" class="button" id="gmail">@gmail.com</p>
                                <p onclick="addDomain('@outlook.com')" class="button" id="outlook">@outlook.com</p>
                            </div>
                            <p class="error-text" id="name-error"></p>
                            <p class="error-text" id="email-error"></p>
                        </div>





                    </div>

                    <div class="input-group">
                        <div>
                            <div class="input-box">
                                <input type="date" id="date-input" name="nascimento" placeholder="Data de nascimento" required>
                            <img class="icon-img" src="./imagens/date.png" alt="">
                            </div>
                            
                        </div>

                        <p class="error-text" id="date-error"></p>
                    </div>

                    <div class="grudado-inputs">

                        <div class="input-group">
                            <input type="number" id="cpf-input" name="cpf" placeholder="CPF" required>
                        </div>

                        <div class="input-group">
                            <input type="number" id="tel-input" name="telefone" placeholder="Telefone" required>

                            <p class="error-text" id="cpf-error"></p>
                            <p class="error-text" id="tel-error"></p>
                        </div>

                    </div>



                    <div class="grudado-inputs">

                        <div class="input-group">

                            <div>
                                <img class="eye-icon" src="./imagens/open-eyes.png">
                                <input type="password" name="senha" id="pass-input" placeholder="Senha" required>
                            </div>


                        </div>

                        <div class="input-group">

                            <div class="input-box">
                                <div>
                                    <img class="eye-icon" onclick="seePassword('input-2')" class="eye-icon"
                                src="./imagens/open-eyes.png">
                                <input type="password" id="confirm-pass" name="Confirmar a senha" placeholder="Confirmar a senha" required>
                                </div>
                                
                            </div>


                            <p class="error-text" id="pass-error"></p>
                            <p class="error-text" id="confirm-error"></p>
                        </div>


                    </div>


                    <div class="confirm-box">
                        <input type="checkbox" id="check-box" required>
                        <label for="check-box">Confirmo que tenho mais de 18 anos de idade, e aceito os <a
                                class="link-text" href="">Termos e Condições</a></label>
                    </div>



                </div>


                <button type="submit" name="cadastrar" class="enviar-button">Cadastrar</button>


            </form>
        </div>
    </main>




    <script src="./javascriptFolder/atalhoEmail.js"></script>
    
    <script src="./javascriptFolder/Formulario.js"></script>
    
    <script src="./javascriptFolder/mostrarSenha.js"></script>
    
    <script src="./javascriptFolder/termos.js"></script>
</body>

</html>