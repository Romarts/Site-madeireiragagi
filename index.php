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
            <li><a class="dropdown-item" href="madeiras.php">Madeiras</a></li>
            <li><a class="dropdown-item" href="tijolos.php">Tijolos</a></li>
            <li><a class="dropdown-item" href="batentes.php">Batentes</a></li>
            <li><a class="dropdown-item" href="fechaduras.php">Fechaduras</a></li>
            <li><a class="dropdown-item" href="dobradicas.php">Dobradiças</a></li>
            <li><a class="dropdown-item" href="jogosdevistas.php">Jogos de Vistas</a></li>  
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

<!-- Banners -->
<!-- CSS: Pode colocar dentro da sua <style> ou em um arquivo separado -->
<style>
  .banner-gagi {
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                url('fundo-obra.jpg') center/cover no-repeat;
    color: white;
    padding: 100px 0;
  }

  .banner-gagi h1 {
    font-weight: 700;
    font-size: 2.8rem;
  }

  .banner-gagi .btn {
    font-size: 1.2rem;
    padding: 12px 32px;
  }

  .logo-text {
  font-family: 'Orbitron', sans-serif;
}

  @media (max-width: 768px) {
    .banner-gagi h1 {
      font-size: 2rem;
    }
  }
</style>

<!-- HTML do banner -->
<section class="banner-gagi text-center">
  <div class="container">
    <h1>Bem-vindo à Loja Gagi</h1>
    <p class="lead mb-4">
      Especialistas em materiais de construção com qualidade, confiança e atendimento que faz a diferença!
    </p>
  </div>
</section>

  <!-- Grid de produtos -->
<div class="container my-5">
  <h2 class="text-center mb-4">Vigas</h2>
  <div class="position-relative">
    <div class="produto-carrossel-container" id="carrosselvigas">
      <!-- Card de produto usando Bootstrap -->
       <div class="card produto-card">
        <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Ffzmadeiras.com.br%2Fuploads%2F555.jpg&f=1&nofb=1&ipt=fed204d10ce1bd1dfce07f934dfd249fb653c34441237c912fd0993f24c4c8c4" class="card-img-top" alt="vigapinus5por10">
        <div class="card-body">
          <h5 class="card-title">Viga Pinus 5x10cm</h5>
          <p class="card-text"><strong>R$ 8,50 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://acdn-us.mitiendanube.com/stores/001/058/571/products/whatsapp-image-2024-10-23-at-15-59-04-4d12e4d1b4423d4d4717297101500895-1024-1024.jpeg" class="card-img-top" alt="vigaeucalipto5por10">
        <div class="card-body">
          <h5 class="card-title">Viga Eucalipto 5x10cm</h5>
          <p class="card-text"><strong>R$10,00 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="vigatauari5por10">
        <div class="card-body">
          <h5 class="card-title">Viga Tauari 5x10cm</h5>
          <p class="card-text"><strong>R$25,00 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="vigagarapeira5emeiopor10">
        <div class="card-body">
          <h5 class="card-title">Viga Garapeira 5,5x10cm</h5>
          <p class="card-text"><strong>R$49,50 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://www.beijaflormadeiras.com.br/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/t/a/tabuapinusap_4.jpg" class="card-img-top" alt="vigaeucalipto5por15">
        <div class="card-body">
          <h5 class="card-title">Viga Eucalipto 5x15cm</h5>
          <p class="card-text"><strong> R$ 15,00 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://images.tcdn.com.br/img/img_prod/1292555/tabua_de_eucalipto_3x20_cm_com_4_metros_16371_1_0539d2fb4f99ae882b8568a276d5782d.jpg" class="card-img-top" alt="vigatauari5por15">
        <div class="card-body">
          <h5 class="card-title">Viga Tauari 5x15cm</h5>
          <p class="card-text"><strong>R$ 37,50 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="vigagarapeira5emeiopor15">
        <div class="card-body">
          <h5 class="card-title">Viga Garapeira 5,5x15cm</h5>
          <p class="card-text"><strong>R$ 75,00 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="vigaeucalipto5por20">
        <div class="card-body">
          <h5 class="card-title">Viga Eucalipto 5x20cm</h5>
          <p class="card-text"><strong>R$ 20,00 o metro</strong> </p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="vigatauari5por20">
        <div class="card-body">
          <h5 class="card-title">Viga Tauari 5x20cm</h5>
          <p class="card-text"><strong>R$ 50,00 o metro</strong> </p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

              <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="vigagarapeira5emeiopor20">
        <div class="card-body">
          <h5 class="card-title">Viga Garapeira 5,5x20cm</h5>
          <p class="card-text"><strong>R$ 99,00 o metro</strong> </p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="vigaeucalipto5por25">
        <div class="card-body">
          <h5 class="card-title">Viga Eucalipto 5x25cm</h5>
          <p class="card-text"><strong>R$ 25,00 o metro</strong> </p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="vigatauari5po25">
        <div class="card-body">
          <h5 class="card-title">Viga Tauari 5x25cm</h5>
          <p class="card-text"><strong>R$ 62,50 o metro</strong> </p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="vigagarapeira5emeiopor25">
        <div class="card-body">
          <h5 class="card-title">Viga Garapeira 5,5x25cm</h5>
          <p class="card-text"><strong>R$ 123,75 o metro</strong> </p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="vigaeucalipto5por30">
        <div class="card-body">
          <h5 class="card-title">Viga Eucalipto 5x30cm</h5>
          <p class="card-text"><strong>R$ 36,00 o metro</strong> </p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="vigatauari5por30">
        <div class="card-body">
          <h5 class="card-title">Viga Tauari 5x30cm</h5>
          <p class="card-text"><strong>R$ 75,00 o metro</strong> </p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="vigagarapeira5emeiopor30">
        <div class="card-body">
          <h5 class="card-title">Viga Garapeira 5x30cm</h5>
          <p class="card-text"><strong>R$ 135,00 o metro</strong> </p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

    </div>
    <button class="carrossel-seta" onclick="rolarCarrossel('carrosselvigas')">
      &#8594;
    </button>
      </div> <!-- Fecha .position-relative -->
    </div> <!-- Fecha .container.my-5 -->
<br>
<br>

<div class="container my-5">
  <h2 class="text-center mb-4">Tabuas</h2>
  <div class="position-relative">
    <div class="produto-carrossel-container" id="carrosseltabuas">
      <!-- Card de produto usando Bootstrap -->
       <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="tabuade10depinus">
        <div class="card-body">
          <h5 class="card-title">Tábua Pinus 10cm</h5>
          <p class="card-text"><strong>R$ 3,50 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="tabuade10eucalipto">
        <div class="card-body">
          <h5 class="card-title">Tábua Eucalipto 10cm</h5>
          <p class="card-text"><strong>R$5,00 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="tabuade10tauari">
        <div class="card-body">
          <h5 class="card-title">Tábua Tauari 10cm</h5>
          <p class="card-text"><strong>R$12,50 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="tabuade10garapeira">
        <div class="card-body">
          <h5 class="card-title">Tábua Garapeira 10cm</h5>
          <p class="card-text"><strong>R$22,50 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

               <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="tabuade15pinus">
        <div class="card-body">
          <h5 class="card-title">Tábua Pinus 15cm</h5>
          <p class="card-text"><strong>R$ 5,00 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="tabuade15eucalipto">
        <div class="card-body">
          <h5 class="card-title">Tábua Eucalipto 15cm</h5>
          <p class="card-text"><strong>R$7,50 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="tabuade15tauari">
        <div class="card-body">
          <h5 class="card-title">Tábua Tauari 15cm</h5>
          <p class="card-text"><strong>R$18,75 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="tabuade15garapeira">
        <div class="card-body">
          <h5 class="card-title">Tábua Garapeira 15cm</h5>
          <p class="card-text"><strong>R$33,75 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://www.beijaflormadeiras.com.br/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/t/a/tabuapinusap_4.jpg" class="card-img-top" alt="tabuade20pinus">
        <div class="card-body">
          <h5 class="card-title">Tábua Pinus 20cm</h5>
          <p class="card-text"><strong> R$ 6,50 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://images.tcdn.com.br/img/img_prod/1292555/tabua_de_eucalipto_3x20_cm_com_4_metros_16371_1_0539d2fb4f99ae882b8568a276d5782d.jpg" class="card-img-top" alt="tabuade20eucalipto">
        <div class="card-body">
          <h5 class="card-title">Tábua Eucalipto 20cm</h5>
          <p class="card-text"><strong>R$ 10,00 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

               <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="tabuade20tauari">
        <div class="card-body">
          <h5 class="card-title">Tábua Tauari 20cm</h5>
          <p class="card-text"><strong>R$ 25,00 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="tabuade20garapeira">
        <div class="card-body">
          <h5 class="card-title">Tábua Garapeira 20cm</h5>
          <p class="card-text"><strong>R$45,00 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="tabuade25pinus">
        <div class="card-body">
          <h5 class="card-title">Tábua Pinus 25cm</h5>
          <p class="card-text"><strong>R$8,40 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="tabuade25eucalipto">
        <div class="card-body">
          <h5 class="card-title">Tábua Eucalipto 25cm</h5>
          <p class="card-text"><strong>R$12,50 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://www.beijaflormadeiras.com.br/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/t/a/tabuapinusap_4.jpg" class="card-img-top" alt="tabuade25tauari">
        <div class="card-body">
          <h5 class="card-title">Tábua Tauari 25cm</h5>
          <p class="card-text"><strong> R$ 31,25 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://images.tcdn.com.br/img/img_prod/1292555/tabua_de_eucalipto_3x20_cm_com_4_metros_16371_1_0539d2fb4f99ae882b8568a276d5782d.jpg" class="card-img-top" alt="tabuade25garapeira">
        <div class="card-body">
          <h5 class="card-title">Tábua Garapeira 25cm</h5>
          <p class="card-text"><strong>R$ 56,25 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://www.beijaflormadeiras.com.br/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/t/a/tabuapinusap_4.jpg" class="card-img-top" alt="TabuaPinus30centrimetros">
        <div class="card-body">
          <h5 class="card-title">Tabua 30cm de Pinus</h5>
          <p class="card-text"><strong> R$ 12,00 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://images.tcdn.com.br/img/img_prod/1292555/tabua_de_eucalipto_3x20_cm_com_4_metros_16371_1_0539d2fb4f99ae882b8568a276d5782d.jpg" class="card-img-top" alt="TabuaEucalipto25centimetros">
        <div class="card-body">
          <h5 class="card-title">Tabua 30cm de Eucalipto</h5>
          <p class="card-text"><strong>R$ 18,00 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Produto 3">
        <div class="card-body">
          <h5 class="card-title">Tabua 30cm de Tauari</h5>
          <p class="card-text"><strong>R$ 37,50 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Produto 4">
        <div class="card-body">
          <h5 class="card-title">Tabua 30cm de Garapeira</h5>
          <p class="card-text"><strong>R$ 71,50 o metro</strong> </p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>
        
    </div>
    <button class="carrossel-seta" onclick="rolarCarrossel('carrosseltabuas')">
      &#8594;
    </button>
      </div> <!-- Fecha .position-relative -->
    </div> <!-- Fecha .container.my-5 -->
<br>
<br>

<div class="container my-5">
  <h2 class="text-center mb-4">Tijolos</h2>
  <div class="position-relative">
    <div class="produto-carrossel-container" id="carrosselTijolos">
      <!-- Card de produto usando Bootstrap -->
      <div class="card produto-card">
        <img src="https://cdn.leroymerlin.com.br/products/tijolo_a_vista_6_furos_9x14x24cm_ceramica_porto_galera_89088923_5090_600x600.jpg" class="card-img-top" alt="tijolo6furos">
        <div class="card-body">
          <h5 class="card-title">Tijolo 6 Furos 9x14x24cm</h5>
          <p class="card-text"><strong>R$780,00 o Milheiro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://acdn-us.mitiendanube.com/stores/831/827/products/tijolo_8_furos_curitiba-8b92e8d2aa01653f6317165827781999-320-0.webp" class="card-img-top" alt="tijolo8furos9emeio">
        <div class="card-body">
          <h5 class="card-title">Tijolo 8 furos 9,5x19x29cm</h5>
          <p class="card-text"><strong>Descrição do produto 2.</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://acdn-us.mitiendanube.com/stores/831/827/products/tijolo_8_furos_curitiba-dc07ba5e80fae38cda17165695330388-480-0.png" class="card-img-top" alt="tijolo8furos11emeio">
        <div class="card-body">
          <h5 class="card-title">Tijolo 8 furos 11,5x19x29cm</h5>
          <p class="card-text"><strong>Descrição do produto 3.</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://images.tcdn.com.br/img/img_prod/1235569/180_tijolo_9_furos_14x19x24_ceramico_2395_1_68eda4c13ae89b64ac548924d5669de6.jpeg" class="card-img-top" alt="tijolo9furos">
        <div class="card-body">
          <h5 class="card-title">Tijolo 9 furos 11,5x14x24cm</h5>
          <p class="card-text"><strong>Descrição do produto 4.</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
      </div>
      <!-- Adicione quantos quiser -->
    </div>
    <button class="carrossel-seta" onclick="rolarCarrossel('carrosselTijolos')">
      &#8594;
    </button>

    </div>
    </div>
<script>
  function rolarCarrossel(id) {
    const carrossel = document.getElementById(id);
    carrossel.scrollLeft += 420;
  }
</script>

<br>
<br>

<div class="container my-5">
  <h2 class="text-center mb-4">Batentes</h2>
  <div class="position-relative">
    <div class="produto-carrossel-container" id="carrosselBatentes">
      <!-- Card de produto usando Bootstrap -->
        <div class="card produto-card">
        <img src="https://product-hub-prd.madeiramadeira.com.br/668072337/images/c310973c-f3fe-4332-aa1d-2e1d43e4ecd11440ab7f4355f95890f00b3f75.JPG?width=500&canvas=1:1&bg-color=FFF" class="card-img-top" alt="batentede9emeio">
        <div class="card-body">
          <h5 class="card-title">Batente Tauari 7,5cm Montado</h5>
          <p class="card-text"><strong>R$ 175,00</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://product-hub-prd.madeiramadeira.com.br/668072337/images/c310973c-f3fe-4332-aa1d-2e1d43e4ecd11440ab7f4355f95890f00b3f75.JPG?width=500&canvas=1:1&bg-color=FFF" class="card-img-top" alt="batentede9emeio">
        <div class="card-body">
          <h5 class="card-title">Batente Tauari 9,5cm Montado</h5>
          <p class="card-text"><strong>R$ 175,00</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://madermac.cdn.magazord.com.br/img/2025/03/produto/5165/batente-tauari-comercial-4.png?ims=fit-in/600x600/filters:fill(white)" class="card-img-top" alt="batentede13">
        <div class="card-body">
          <h5 class="card-title">Batente Tauari 13cm Montado</h5>
          <p class="card-text"><strong>R$ 190,00</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://madermac.cdn.magazord.com.br/img/2025/03/produto/5165/batente-tauari-comercial-4.png?ims=fit-in/600x600/filters:fill(white)" class="card-img-top" alt="batentede14">
        <div class="card-body">
          <h5 class="card-title">Batente Tauari 14cm Montado</h5>
          <p class="card-text"><strong>R$ 190,00</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

      <div class="card produto-card">
        <img src="https://images.tcdn.com.br/img/img_prod/1111274/batente_em_tauari_90x210cm_requadro_15cm_madefort_241_2_5081b7bd985ec0945b3ee275dc6d94c5.jpeg" class="card-img-top" alt="batente15">
        <div class="card-body">
          <h5 class="card-title">Batente Tauari 15cm Montado</h5>
          <p class="card-text"><strong>R$ 215,00</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>


    </div>
    <button class="carrossel-seta" onclick="rolarCarrossel('carrosselBatentes')">
      &#8594;
    </button>
      </div> <!-- Fecha .position-relative -->
    </div> <!-- Fecha .container.my-5 -->

<br>
<br>

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
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://www.3f.com.br/comum/code/MostrarImagem.php?C=ODE1OA%2C%2C" class="card-img-top" alt="Fechadura 3F Bella">
        <div class="card-body">
          <h5 class="card-title">Fechadura 3F Bella</h5>
          <p class="card-text">Descrição do produto 2.</p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://www.3f.com.br/comum/code/MostrarImagem.php?C=NTU2NQ%2C%2C" class="card-img-top" alt="Fechadura 3F Roseta Quadrada">
        <div class="card-body">
          <h5 class="card-title">Fechadura 3F Roseta Quadrada</h5>
          <p class="card-text">Descrição do produto 3.</p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://www.3f.com.br/site/img/produtos/6000/M%C3%A1quina%206145%20CR.jpg" class="card-img-top" alt="Fechadura 3F Bico Papagaio">
        <div class="card-body">
          <h5 class="card-title">Fechadura 3F Bico Papagaio</h5>
          <p class="card-text">Descrição do produto 4.</p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
      </div>
      <!-- Adicione quantos quiser -->

       <div class="card produto-card">
        <img src="https://www.3f.com.br/comum/code/MostrarImagem.php?C=MTM1OTY%2C" class="card-img-top" alt="Fechadura 3F Avião">
        <div class="card-body">
          <h5 class="card-title">Fechadura 3F Avião</h5>
          <p class="card-text">Descrição do produto 4.</p>
          <a href="#" class="btn btn-success">Comprar</a>
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
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic3.tcdn.com.br%2Fimg%2Fimg_prod%2F15858%2Fdobradica_galvanizada_2_1_2_schild_par_cx_12_18079_1_20201228132407.jpg&f=1&nofb=1&ipt=3b699ee823d8708fb7f0d03af3d4b2b832cc55901e6c0245de42d9d92f782f47" class="card-img-top" alt="Dobradiça Shild Simples Cromada">
        <div class="card-body">
          <h5 class="card-title">Dobradiça Shild Simples Cromada</h5>
          <p class="card-text"><strong>R$ 18,90</strong></p>
          <a href="https://wa.me/?text=Gostaria%20de%20saber%20sobre%20o%20preço%20da%20dobradiça%20Shild%20Simples%20Cromada" target="_blank" class="btn btn-success">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.FlPk1EMRFOTsOVzARMWzUQHaHa%26pid%3DApi&f=1&ipt=0ccc870478cf5d5ef8b2302b360753e3e42367285aeb304e4e415257e389f780" class="card-img-top" alt="Dobradiça Shild Simples Black">
        <div class="card-body">
          <h5 class="card-title">Dobradiça Shild Simples Black</h5>
          <p class="card-text"><strong>R$ 18,90</strong></p>
          <a href="https://wa.me/?text=Gostaria%20de%20saber%20sobre%20o%20preço%20da%20dobradiça%20Shild%20simples%20black" target="_blank" class="btn btn-success">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://cdn.leroymerlin.com.br/products/dobradica_para_porta_com_rolamento_ate_25kg_3_pecas_88412730_0001_600x600.jpg" class="card-img-top" alt="Produto 3">
        <div class="card-body">
          <h5 class="card-title">Dobradiça Rolamentada Cromada</h5>
          <p class="card-text"><strong>R$ 45,00</strong></p>
          <a href="https://wa.me/?text=Gostaria%20de%20saber%20sobre%20o%20preço%20da%20dobradiça%20de%20rolamentada%20cromada" target="_blank" class="btn btn-success">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://www.travaforte.com.br/image/cache/data/Produtos/KI/KIT-C-3-DOBRADIAS-INOX-ROLAMENTO-FERLOCK-3-5X3-PRETA-COR-NO-DEFINIDA-465B9A21-1-300x300.jpg.webp" class="card-img-top" alt="Produto 4">
        <div class="card-body">
          <h5 class="card-title">Dobradiça Rolamentada Black</h5>
          <p class="card-text"><strong>R$ 45,00</strong></p>
          <a href="https://wa.me/?text=Gostaria%20de%20saber%20sobre%20o%20preço%20da%20dobradiça%20rolamentada%20black%20de%207cm" target="_blank" class="btn btn-success">Comprar</a>
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
        <img src="https://images.tcdn.com.br/img/img_prod/412961/guarnicao_lisa_de_madeira_tauari_macica_5_cm_269677_1_7446470019757b0d4a42682b20468573_20241224094248.png" class="card-img-top" alt="Jogodevista5centimetros">
        <div class="card-body">
          <h5 class="card-title">Jogo de Vista 5cm</h5>
          <p class="card-text"><strong>R$ 45,00</strong></p>
          <a href="https://wa.me/?text=Gostaria%20de%20saber%20sobre%20o%20preço%20do%20jogo%20de%20vista%20de%205cm" target="_blank" class="btn btn-success">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://cdn.awsli.com.br/300x300/2464/2464768/produto/319299167/captura-de-tela-2024-11-16-231010-yw7noxhlmw.png" class="card-img-top" alt="jogodevista6centimetros">
        <div class="card-body">
          <h5 class="card-title">Jogo de Vista 6cm</h5>
          <p class="card-text"><strong>R$ 75,00</strong></p>
          <a href="https://wa.me/?text=Gostaria%20de%20saber%20sobre%20o%20preço%20do%20jogo%20de%20vista%20de%206cm" target="_blank" class="btn btn-success">Comprar</a>
        </div>
      </div>
      <div class="card produto-card">
        <img src="https://xg1e7cnw4i.execute-api.us-east-1.amazonaws.com/image/casteloforte/image/catalog/product/fit-in/1000x1000/122861.jpg" class="card-img-top" alt="jogodevista7centimetros">
        <div class="card-body">
          <h5 class="card-title">Jogo de Vista 7cm</h5>
          <p class="card-text"><strong>R$ 95,00</strong></p>
          <a href="https://wa.me/?text=Gostaria%20de%20saber%20sobre%20o%20preço%20do%20jogo%20de%20vista%20de%207cm" target="_blank" class="btn btn-success">Comprar</a>
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