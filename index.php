<?php
  session_start();
  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
  {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
  }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Igreja</title>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="src/style.css">
</head>


<body>
  <header>
    <title>Paróquia São Francisco de Assís</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <img src="./src/img/cruz.png" class="img-cruz">
        <a class="navbar-brand fonte-titulo cor-especial" href="#">Paróquia São Francisco de Assís</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Início</a>
            </li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#receita-modal"
                href="#">Dízimo</a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#quem-somos-modal"
                href="#">Quem somos</a></li>
          </ul>
        </div>
    </nav>
  </header>
  <main>

    <section id="caroussel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#caroussel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#caroussel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./src/img/paróquia-são-francisco-lagoa1.jpg" class="d-block w-100 imagem-carrossel-um" alt="...">
          <div class="carousel-caption d-none d-md-block h-50">
            <h1 class="fonte-titulo display-4">Paróquia São Francisco de Assis</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./src/img/paróquia-são-francisco-lagoa2.jpg" class="d-block w-100 imagem-carrossel-dois  "
            alt="...">
          <div class="carousel-caption d-none d-md-block h-50">
            <h1 class="fonte-titulo display-4">Desfrute de nossa lista de orações!</h1>
          </div>
        </div>
      </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#caroussel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#caroussel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </section>

    <section id="titulo">
      <h1 class="text-center fonte-titulo cor-especial pt-5">Orações e Envagelhos</h1>
      <p class="text-center text-secondary pb-2">Nossas orações disponíveis para melhor visibilidade de fieis</p>
      <p class="text-center text-secondary mt-auto">Missas sábado e domingo ás 19:00 horas.</p>
    </section>

    <section class="container-fluid bg-light" id="receitas">
      <div class="row justify-content-center">


        <article class="card borda-cor-especial card-largura p-0 m-5 col-12 col-md-4 col-xl-4">
          <img src="src/img/reunidosemnomedopai.png" class="card-img-top card-posicao-imagem"
            alt="Foto que representa a oração Reunidos em nome do pai">
          <div class="card-body">
            <h5 class="card-title">Reunidos em nome do Pai</h5>
            <p class="card-text"></p>
            <button id="btn1" class="btn botao-cor-especial">Leia a Oração</button>
          </div>
        </article>

        <article class="card borda-cor-especial card-largura p-0 m-5 col-12 col-md-4 col-xl-4">
          <img src="src/img/painosso2.png" class="card-img-top card-posicao-imagem"
            alt="">
          <div class="card-body">
            <h5 class="card-title">Pai Nosso</h5>
            <p class="card-text"></p>
            <button id="btn2" href="#" class="btn botao-cor-especial">Leia a Oração</a>
        </article>

        <article class="card borda-cor-especial card-largura p-0 m-5 col-12 col-md-4 col-xl-4">
          <img src="src/img/avemaria.png" class="card-img-top card-posicao-imagem"
            alt="">
          <div class="card-body">
            <h5 class="card-title">Ave Maria</h5>
            <p class="card-text"></p>
            <button id="btn3" href="#" class="btn botao-cor-especial">Leia a Oração</a>
        </article>

        <article class="card borda-cor-especial card-largura p-0 m-5 col-12 col-md-4 col-xl-4">
          <img src="src/img/cruz-sagrada.png" class="card-img-top card-posicao-imagem"
            alt="">
          <div class="card-body">
            <h5 class="card-title">Cruz sagrada</h5>
            <p class="card-text"></p>
            <button id= "btn4"href="#" class="btn botao-cor-especial">Leia a Oração</button>
        </article>

        <article class="card borda-cor-especial card-largura p-0 m-5 col-12 col-md-4 col-xl-4">
          <img src="src/img/saomiguelarcanjo.png" class="card-img-top card-posicao-imagem"
            alt="">
          <div class="card-body">
            <h5 class="card-title">São Miguel Arcanjo</h5>
            <p class="card-text"></p>
            <button id= "btn5"href="#" class="btn botao-cor-especial">Leia a Oração</button>
        </article>

        <article class="card borda-cor-especial card-largura p-0 m-5 col-12 col-md-4 col-xl-4">
          <img src="src/img/hosana.png" class="card-img-top card-posicao-imagem"
            alt="">
          <div class="card-body">
            <h5 class="card-title">Senhor Deus do Universo</h5>
            <p class="card-text"></p>
            <button id="btn6" class="btn botao-cor-especial">Leia a Oração</button>
          </div>
        </article>

        <article style="display: none;" class="card borda-cor-especial card-largura p-0 m-5 col-12 col-md-4 col-xl-4">
          <img src="src/img/" class="card-img-top card-posicao-imagem"
            alt="">
          <div class="card-body">
            <h5 class="card-title">ORAÇÃO XPTO</h5>
            <p class="card-text"></p>
            <a href="#" class="btn botao-cor-especial">Leia a Oração</a>
          </div>
        </article>

        <article style="display: none" class="card borda-cor-especial card-largura p-0 m-5 col-12 col-md-4 col-xl-4">
          <img src="src/img/" class="card-img-top card-posicao-imagem"
            alt="">
          <div class="card-body">
            <h5 class="card-title">ORAÇÃO XPTO</h5>
            <p class="card-text"></p>
            <a href="#" class="btn botao-cor-especial">Leia a Oração</a>
          </div>
        </article>
      </div>
    </section>

  </main>
  <footer class="bg-secondary p-3">
    <p class="text-light m-0 text-center"> contato: <a class="text-light"
        href="mailto:emailexemplo@email.com.br">paróquiasãofranciscodeassis@email.com</a></p>
  </footer>
  <div id="card-container">
    <button id="close-btn">X</button>
    <p id="card-text"></p>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modal-contato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <dialog class="modal-content">
        <header class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Entre em contato</h5>
          <button type="button" class="close bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </header>
        <footer class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary borda-cor-especial botao-cor-especial">Enviar</button>
        </footer>
      </dialog>
    </div>
  </div>

  <!-- Modal QUEM SOMOS-->
  <div class="modal fade" id="quem-somos-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Quem somos</h5>
          <button type="button" class="close bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label>Este site foi criado para ajudar os fieis de nossa igreja, a ter fácil acesso para rezarem nossas
            orações.</label>
        </div>
      </div>
    </div>
  </div>
  <!--modal dízimo pix-->
  <div class="modal fade" id="receita-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pix Paróquia São Francisco de Assis</h5>
          <button type="button" class="close bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label>Caso puder, doe o dízimo para nossa igreja. Amém!
            <img class="qrcodeDizimo" src="./src/img/qrcodeexemplo.png">
          </label>

        </div>
      </div>
    </div>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
    crossorigin="anonymous"></script>
  <script src="./main.js"></script>
  <script src=""></script>

</body>

</html>