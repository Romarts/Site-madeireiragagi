<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Madeireira Gagi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
<!-- Navbar (Ferramenta 1) -->
<nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="Site Imagens Madeireira/Logo.jpeg" alt="Logo" style="height: 50px;" class="me-2">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><strong>Pagina Inicial</strong></a>
                  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <strong> Produtos</strong>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Madeiras</a></li>
            <li><a class="dropdown-item" href="#">Tijolos</a></li>
            <li><a class="dropdown-item" href="#">Batentes</a></li>
            <li><a class="dropdown-item" href="#">Fechaduras</a></li>
            <li><a class="dropdown-item" href="#">Dobradiças</a></li>
            <li><a class="dropdown-item" href="#">Jogos de Vistas</a></li>  
          </ul>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quemsomos.php"><strong>Quem Somos?</strong></a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="Contato.php"><strong>Contato</strong></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Barra de Pesquisa -->
 
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Busque seu produto</h2>
    <form class="d-flex justify-content-center" role="search">
      <input class="form-control form-control-lg w-75 me-2" type="search" placeholder="O que você está procurando?" aria-label="Buscar">
      <button class="btn btn-success btn-lg" type="submit">Buscar</button>
    </form>
  </div>
</section>

<!-- Banners -->
<div class="container my-5">
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://static.wixstatic.com/media/5c1bfe_5a1b658dcc4147eea73158de2a3b96d4~mv2.jpg/v1/fill/w_640,h_425,al_c,q_80,enc_avif,quality_auto/5c1bfe_5a1b658dcc4147eea73158de2a3b96d4~mv2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="carrossel" src="Site Imagens Madeireira/Tijolo.png" class="d-block w-100" alt="Tijolo" alt="Tijolos">
    </div>
    <div class="carousel-item">
      <img src="https://www.3f.com.br/comum/code/MostrarImagem.php?C=MjYyMA%2C%2C" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <!-- Grid de produtos -->
<div class="container my-5">
  <h2 class="text-center mb-4">Madeiras</h2>
  <div class="position-relative">
    <div class="produto-carrossel-container" id="carrosselMadeiras">
      <!-- Card de produto usando Bootstrap -->
      <div class="card produto-card">
        <img src="https://www.beijaflormadeiras.com.br/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/t/a/tabuapinusap_4.jpg" class="card-img-top" alt="TabuaPinus30centrimetros">
        <div class="card-body">
          <h5 class="card-title">Tabua 30cm de Pinus</h5>
          <p class="card-text"> <strong> R$ 12,00 o metro</strong></p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://images.tcdn.com.br/img/img_prod/1292555/tabua_de_eucalipto_3x20_cm_com_4_metros_16371_1_0539d2fb4f99ae882b8568a276d5782d.jpg" class="card-img-top" alt="TabuaEucalipto25centimetros">
        <div class="card-body">
          <h5 class="card-title">Tabua 25cm de Eucalipto</h5>
          <p class="card-text"><strong>R$ 9,00 o metro</strong></p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Produto 3">
        <div class="card-body">
          <h5 class="card-title">Produto 3</h5>
          <p class="card-text">Descrição do produto 3.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Produto 4">
        <div class="card-body">
          <h5 class="card-title">Produto 4</h5>
          <p class="card-text">Descrição do produto 4.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
    </div>
    <button class="carrossel-seta" onclick="rolarCarrossel('carrosselMadeiras')">
      &#8594;
    </button>

  </div>
</div>

      <!-- Adicione quantos quiser -->



    </div>
  </div>
</div>
</div>

<br>
<br>

<div class="container my-5">
  <h2 class="text-center mb-4">Tijolos</h2>
  <div class="position-relative">
    <div class="produto-carrossel-container" id="carrosselTijolos">
      <!-- Card de produto usando Bootstrap -->
      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Produto 1">
        <div class="card-body">
          <h5 class="card-title">Produto 1</h5>
          <p class="card-text">Descrição do produto 1.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Produto 2">
        <div class="card-body">
          <h5 class="card-title">Produto 2</h5>
          <p class="card-text">Descrição do produto 2.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Produto 3">
        <div class="card-body">
          <h5 class="card-title">Produto 3</h5>
          <p class="card-text">Descrição do produto 3.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Produto 4">
        <div class="card-body">
          <h5 class="card-title">Produto 4</h5>
          <p class="card-text">Descrição do produto 4.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <!-- Adicione quantos quiser -->
    </div>
    <button class="carrossel-seta" onclick="rolarCarrossel('carrosselTijolos')">
      &#8594;
    </button>

<script>
  function rolarCarrossel(id) {
    const carrossel = document.getElementById(id);
    carrossel.scrollLeft += 420;
  }
</script>

  </div>
</div>
</div>

<br>
<br>

<div class="container my-5">
  <h2 class="text-center mb-4">Batentes</h2>
  <div class="position-relative">
    <div class="produto-carrossel-container" id="carrosselBatentes">
      <!-- Card de produto usando Bootstrap -->
      <div class="card produto-card">
        <img src="https://www.3f.com.br/comum/code/MostrarImagem.php?C=ODE2Nw%2C%2C" class="card-img-top" alt="Produto 1">
        <div class="card-body">
          <h5 class="card-title">Produto 1</h5>
          <p class="card-text">Descrição do produto 1.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Produto 2">
        <div class="card-body">
          <h5 class="card-title">Produto 2</h5>
          <p class="card-text">Descrição do produto 2.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Produto 3">
        <div class="card-body">
          <h5 class="card-title">Produto 3</h5>
          <p class="card-text">Descrição do produto 3.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Produto 4">
        <div class="card-body">
          <h5 class="card-title">Produto 4</h5>
          <p class="card-text">Descrição do produto 4.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <!-- Adicione quantos quiser -->
    </div>
    <button class="carrossel-seta" onclick="rolarCarrossel('carrosselBatentes')">
      &#8594;
    </button>
  </div>
</div>
</div>

<div class="container my-5">
  <h2 class="text-center mb-4">Fechaduras</h2>
  <div class="position-relative">
    <div class="produto-carrossel-container" id="carrosselFechaduras">
      <!-- Card de produto usando Bootstrap -->
      <div class="card produto-card">
        <img src="https://www.3f.com.br/comum/code/MostrarImagem.php?C=NTQ4OQ%2C%2C" class="card-img-top" alt="Fechadura 3F Stillus">
        <div class="card-body">
          <h5 class="card-title">Fechadura 3F Stillus</h5>
          <p class="card-text">Descrição do produto 1.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://www.3f.com.br/comum/code/MostrarImagem.php?C=ODE1OA%2C%2C" class="card-img-top" alt="Fechadura 3F Bella">
        <div class="card-body">
          <h5 class="card-title">Fechadura 3F Bella</h5>
          <p class="card-text">Descrição do produto 2.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://www.3f.com.br/comum/code/MostrarImagem.php?C=NTU2NQ%2C%2C" class="card-img-top" alt="Fechadura 3F Roseta Quadrada">
        <div class="card-body">
          <h5 class="card-title">Fechadura 3F Roseta Quadrada</h5>
          <p class="card-text">Descrição do produto 3.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://www.3f.com.br/site/img/produtos/6000/M%C3%A1quina%206145%20CR.jpg" class="card-img-top" alt="Fechadura 3F Bico Papagaio">
        <div class="card-body">
          <h5 class="card-title">Fechadura 3F Bico Papagaio</h5>
          <p class="card-text">Descrição do produto 4.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <!-- Adicione quantos quiser -->

       <div class="card produto-card">
        <img src="https://www.3f.com.br/comum/code/MostrarImagem.php?C=MTM1OTY%2C" class="card-img-top" alt="Fechadura 3F Avião">
        <div class="card-body">
          <h5 class="card-title">Fechadura 3F Avião</h5>
          <p class="card-text">Descrição do produto 4.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>

    </div>
    <button class="carrossel-seta" onclick="rolarCarrossel('carrosselFechaduras')">
      &#8594;
    </button>
  </div>
</div>
</div>

<div class="container my-5">
  <h2 class="text-center mb-4">Dobradiças</h2>
  <div class="position-relative">
    <div class="produto-carrossel-container" id="carrosselDobradicas">
      <!-- Card de produto usando Bootstrap -->
      <div class="card produto-card">
        <img src="https://www.schild.com.br/produtos/1168.jpg" class="card-img-top" alt="Dobradiça Shild Simples Cromada">
        <div class="card-body">
          <h5 class="card-title">Dobradiça Shild Simples Cromada</h5>
          <p class="card-text">Descrição do produto 1.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://www.schild.com.br/produtos/1281.jpg" class="card-img-top" alt="Dobradiça Shild Simples Black">
        <div class="card-body">
          <h5 class="card-title">Dobradiça Shild Simples Black</h5>
          <p class="card-text">Descrição do produto 2.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Produto 3">
        <div class="card-body">
          <h5 class="card-title">Produto 3</h5>
          <p class="card-text">Descrição do produto 3.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Produto 4">
        <div class="card-body">
          <h5 class="card-title">Produto 4</h5>
          <p class="card-text">Descrição do produto 4.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
    
    </div>
    <button class="carrossel-seta" onclick="rolarCarrossel('carrosselDobradicas')">
      &#8594;
    </button>
  </div>
</div>
</div>

<div class="container my-5">
  <h2 class="text-center mb-4">Jogos de Vistas</h2>
  <div class="position-relative">
    <div class="produto-carrossel-container" id="carrosselJogosdeVistas">
      <!-- Card de produto usando Bootstrap -->
      <div class="card produto-card">
        <img src="https://www.3f.com.br/comum/code/MostrarImagem.php?C=ODE2Nw%2C%2C" class="card-img-top" alt="Produto 1">
        <div class="card-body">
          <h5 class="card-title">Produto 1</h5>
          <p class="card-text">Descrição do produto 1.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Produto 2">
        <div class="card-body">
          <h5 class="card-title">Produto 2</h5>
          <p class="card-text">Descrição do produto 2.</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://xg1e7cnw4i.execute-api.us-east-1.amazonaws.com/image/casteloforte/image/catalog/product/fit-in/1000x1000/122861.jpg" class="card-img-top" alt="Produto 3">
        <div class="card-body">
          <h5 class="card-title">Jogo de Vista de 7cm</h5>
          <p class="card-text">R$95,00</p>
          <a href="#" class="btn btn-comprar">Comprar</a>
        </div>
      </div>
    </div>
    <button class="carrossel-seta" onclick="rolarCarrossel('carrosselJogosdeVistas')">
      &#8594;
    </button>
  </div>
</div>
</div>

<!-- Rodapé -->
 <div class ="text-center">
<footer>
  <p> Condições especiais de pagamento! Negocie preços diretamente conosco e encontre a melhor solução para seu projeto.</p>
  <p>  Endereço: Av. Perimetral Pres. Tancredo de Almeida Neves, 2307 – Jardim Horizonte, Campo Mourão – PR, 87303-040</p>
 <div class="Mapa"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.9930035169496!2d-52.38144072546805!3d-24.031311879024017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed752163ff895d%3A0x43628b10f307879b!2sMadeireira%20Gagi!5e0!3m2!1spt-BR!2sbr!4v1747607929632!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <p>&copy; Madeireira Gagi - Todos os direitos reservados. Endereço Eletrônico: madeireiragagi@hotmail.com</p>
  <p> Desenvolvido por Gabriel Romagnolli Tartarelli</p>
</footer>
</div>

<div class="whats">
  <a href="https://wa.me/554498290220" target="_blank">
  <img src="Site Imagens Madeireira/Botao WhatsApp.png" alt="WhatsApp">
  </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>