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
          <a class="nav-link" href="index.php">Pagina Inicial</a>
                  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produtos
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
          <a class="nav-link" href="quemsomos.php">Quem Somos?</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="Contato.php">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1 class="text-center mb-4"> Contato </h1>

<div class="row">
<div class="container my-5">
  
        <form id="form1">
              <label for="nome">Nome:</label>
              <input type="text" id="nome">

              <label for="email">E-mail:</label>
              <input type="email" id="email">


              <label for="telefone">Telefone:</label>
              <input type="text" id="telefone">

              <label for="mensagem">Mensagem:</label>
              <input type="text" id="mensagem">


            <button type="button" id="botao">Enviar</button>

          </form>
    </p>
    <script>
        document.getElementById("botao").onclick = function(){
            var nome = document.getElementById("nome").value;
            var email = document.getElementById("email").value
            var telefone = document.getElementById("telefone").value
            var mensagem = document.getElementById("mensagem").value

            if (nome == "" && email == "" && telefone == "" && mensagem == ""){
                alert("Preencha todos os campos para enviar");
            } else{
                if(nome == ""){
                    alert("Informe o nome")
                }

                if(email == ""){
                    alert("Informe o email")
                }

                if (telefone == ""){
                    alert("Informe o telefone")
                }

                if(mensagem == ""){
                    alert("Informe uma mensagem")
                }
            }
               if (!email.includes("@")) {
        alert("Informe um e-mail válido.");
        return false;
    }
        if (nome !== "" && email !== "" && telefone !== "" && mensagem !== ""){
            alert("Mensagem enviada com sucesso!");
        }
    }
    </script>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>