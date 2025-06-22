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

  <!-- Grid de produtos -->
<div class="container my-5">
  <h2 class="text-center mb-4">Vigas</h2>
  <div class="position-relative">
    <div class="produto-carrossel-container" id="carrosselvigas">
      <!-- Card de produto usando Bootstrap -->
       <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="vigapinus5por10">
        <div class="card-body">
          <h5 class="card-title">Viga Pinus 5x10cm</h5>
          <p class="card-text"><strong>R$ 8,50 o metro</strong></p>
          <a href="#" class="btn btn-success">Comprar</a>
        </div>
        </div>

        <div class="card produto-card">
        <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="vigaeucalipto5por10">
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

<script>
  function rolarCarrossel(id) {
    const carrossel = document.getElementById(id);
    carrossel.scrollLeft += 420;
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>