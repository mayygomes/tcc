<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HireQuest</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body class="body">
  <header>
    <div class="barra navbar">
      <div class="logus">
        <img src="../img/logo.svg" alt="logo">
        <h1>HireQuest</h1>
      </div>
      <nav>
        <ul>
          <li><a href="#">Currículo</a></li>
          <li><a href="#">Marketing</a></li>
          <li><a href="#">Simulado</a></li>
          <li><a href="#">Sobre nós</a></li>
          <a href="perfil.php"><img src="../img/perfil.svg" id="user_avatar" alt="Avatar"></a>
          <li>
            <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button> -->

            <div class="hamburguer" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
              <span class="barrinha"></span>
              <span class="barrinha"></span>
              <span class="barrinha"></span>
            </div>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
              <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">HireQuest</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                IGJGGKHJVIJGPOFGJSFJ
              </div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="../img/teste1.webp" alt="Foto 01"></div>
        <div class="swiper-slide"><img src="../img/teste2.webp" alt="Foto 02"></div>
        <div class="swiper-slide"><img src="../img/teste3.webp" alt="Foto 03"></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </main>

  <section>
    <div class="quadredos">
      <div class="todes">
        <h2>Simulados</h2>
        <a href="https://www.mercadolivre.com.br/">
          <img src="../img/simulado.svg" alt="Simulados">
        </a>
      </div>
      <div class="todes">
        <h2>Currículo</h2>
        <a href="https://www.mercadolivre.com.br/">
          <img src="../img/curriculo.svg" alt="Currículo">
        </a>
      </div>
      <div class="todes">
        <h2>Marketing</h2>
        <a href="https://www.mercadolivre.com.br/">
          <img src="../img/marketing.svg" alt="Marketing">
        </a>
      </div>
    </div>
  </section>
  <label class="theme-switch">
    <input type="checkbox" id="theme-toggle" />
    <span class="slider"></span>
  </label>


  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>