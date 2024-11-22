<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>
    <link rel="stylesheet" href="../css/perfil.css" />
</head>
<body>
    <header>
        <div class="barra navbar">
            <div class="logus">
                <img src="../img/logo.svg" alt="logo">
                <h1>HireQuest</h1>
            </div>
            <nav>
                <ul>
                    <div class="home">
                        <a href="home.php"><img src="../img/home.svg" id="icon_home" alt="Home"></a>
                        <div class="nome_home">
                            <li>
                                <a href="home.php">Home</a>
                            </li>
                        </div>
                    </div>
                    <div class="icon_avatar">
                        <a href="#"><img src="../img/perfil.svg" id="icon_user" alt="Avatar"></a>
                    </div>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="user">
                <div class="img-perfil">
                    <img src="../img/avatar.avif" id="user_avatar" alt="Avatar">
                    <div class="linha"></div>
                </div>
                <button class="Btn"> 
                    <svg class="svg" viewBox="0 0 512 512">
                    <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                    </svg>
                </button>
            </div>

            <div class="info">
                <div class="user-name">
                    <span>
                        Nome:
                    </span>
                    <span>
                        Fulano de Tal
                    </span>
                </div>

                <div class="user-item">
                    <span>
                        Email:
                    </span>
                    <span>
                        Email
                    </span>
                </div>

                <div class="user-item">
                    <span>
                        Data de Nasc.:
                    </span>
                    <span>
                        Data
                    </span> 
                </div>

                <div class="user-item">
                    <span>
                        Senha:
                    </span>
                    <span>
                        Senha
                    </span>
                </div>

                <div class="user-item">
                    <span>
                        CPF:
                    </span>
                    <span>
                        CPF
                    </span>
                </div>

                <div class="user-item">
                    <span>
                        Área de Interesse:
                    </span>
                    <span>
                        Área
                    </span>
                </div>
                
            </div>
        </div>
    </section>

    <section>
        <div class="progresso">
            <div class="curriculo">
                <span class="name_curriculo">
                    Currículo
                </span>
                <div class="container-img">
                    <img src="../img/curriculo_perfil.png" alt="">
                </div>
                <a class ="botaum">Visualizar</a>
            </div>
            
            <div class="simulado">
                <span class="name_simulado">
                    Simulados
                </span>
                <div class="container-img">
                    <img src="../img/curriculo_perfil.png" alt="">
                </div>
                <a class ="botaum">Visualizar</a>
            </div>
            
            <div class="quiz">
                <span class="name_quiz">
                    Quiz
                </span>
                <div class="container-img">
                    <img src="../img/curriculo_perfil.png" alt="">
                </div>
                <a class ="botaum">Visualizar</a>
            </div>
        </div>
    </section>
    <a href="menu.php" class="button">Sair</a>
</div>
</body>
</html>
