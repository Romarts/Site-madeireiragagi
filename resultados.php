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


</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>