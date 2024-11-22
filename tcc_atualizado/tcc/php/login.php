<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Login.css" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login - Fiction</title>
</head>
<body>
<div class="logus">
      <img src="../img/logo.svg" alt="logo">
      <h1>HireQuest</h1>
    </div>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="cadastro.php" method="POST">
                <h1>Cadastrar Conta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <span>ou use seu e-mail para registro</span>
                <input type="text" name="nome" placeholder="Nome" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit">Cadastrar-se</button>
            </form>
        </div>

        <div class="form-container sign-in">
            <form action="home.php" method="POST">
                <h1>Bem-vindo(a)</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                </div>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bem-vindo(a) de volta!</h1>
                    <p>Entre com seus dados pessoais para usar todos os recursos do site.</p>
                    <a href="home.php">
                        <button id="register">Cadastrar-se</button>
                    </a>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Não possui cadastro?</h1>
                    <p>Registre-se agora!</p>
                    <a href="cadastro.php">
                        <button id="login">Cadastra-se</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

<?php

session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

    $verificar = $conexao -> query($sql);

    if(mysqli_num_rows($verificar) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo "Email ou senha inválidos";
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location:home.php');
    }

} /*else {
    echo "Preencha todos os campos.";
}*/

?>