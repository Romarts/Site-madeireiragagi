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

<br>
<h1 class="text-center mb-4"> Contato </h1>
<br>
  <style>    
    body {
          overflow-x: hidden;
        } 

    .zap{
        text-decoration: none;
        color: #1C1C1C
        }

    .info {
      width: 50%;
      background-color: #f0f0f0;
      padding: 30px;
    }
    .info-item {
      display: flex;
      align-items: center;
      margin-bottom: 25px;
    }
    .info-item img {
      width: 24px;
      height: 24px;
      margin-right: 15px;
    }

    .bloco-contato {
    display: flex;
    flex-wrap: wrap;
    padding: 30px;
    gap: 30px;
  }

  .info, .formulario {
    flex: 1 1 45%;
    min-width: 300px;
    box-sizing: border-box;
  }

  .info {
    background-color: #f0f0f0;
    padding: 30px;
    border-radius: 10px;
  }

  .formulario {
    width: 50%;
    padding: 30px;
    text align:center;
    padding: 30px;
    background-color: #ffffff;
    border: 1px solid #dee2e6;
    border-radius: 10px;
  }

  .formulario input {
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    box-sizing: border-box;
  }

  .formulario button {
    width: 100%;
    padding: 10px;
  }
  
  btn btn-primary mt-3
    @media (min-width: 768px) {
  .info {
    grid-template-columns: 1fr 1fr;
  }
}

  </style>
<div class="bloco-contato">
  <div class="info">


      <div class="info-item">
        <img src="https://img.icons8.com/?size=100&id=i3XElI5CmcBP&format=png&color=000000" alt="Email" />
        <div>

          <strong>E-MAIL DA LOJA</strong><br>
          madeireiragagi@hotmail.com
        </div>
      </div>

      <br>
      <br>
      
      <div class="info-item">

        <img src="https://img.icons8.com/?size=100&id=16733&format=png&color=000000" alt="WhatsApp" />
        
        <a href="https://wa.me/554498290220" target="_blank" class='zap'>
          <strong >WHATSAPP</strong><br>
          (44) 9 9829-0220
         </a>

      </div>

      <br>
      <br>

      <div class="info-item">
        <img class="icones"src="https://img.icons8.com/?size=100&id=6902&format=png&color=000000" alt="Horário" />
        <div>

          <strong>HORÁRIO DE FUNCIONAMENTO</strong><br>
          Segunda à Sexta - 08h às 18h<br/>
          Sábado - 08h ao 12h
        </div>
      </div>

      <br>
      <br>

      <div class="info-item">
        <a class="zap" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.9930035169496!2d-52.38144072546805!3d-24.031311879024017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed752163ff895d%3A0x43628b10f307879b!2sMadeireira%20Gagi!5e0!3m2!1spt-BR!2sbr!4v1747607929632!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          <img src="https://img.icons8.com/?size=100&id=41445&format=png&color=000000" alt="Endereço" />
        <div>

          <strong>ENDEREÇO DA LOJA</strong><br>
          Avenida Goioerê, 2329 - Centro - Campo Mourão - PR, 87303-110
        </a>
        </div>
      </div>

    </div>

<div class="formulario">
  <h1> Envie uma mensagem! </h1>
        <form id="form1">
              <label for="nome">Nome:</label>
              <input type="text" id="nome" class="form-control">

              <label for="email">E-mail:</label>
              <input type="email" id="email" class="form-control">


              <label for="telefone">Telefone:</label>
              <input type="text" id="telefone" class="form-control">

              <label for="mensagem">Mensagem:</label>
              <input type="text" id="mensagem" class="form-control">

              <label for="endereco">Endereço:</label>
              <input type="text" id="endereco" class="form-control">


            <label>Entrega na cidade?</label>
            <br>
            <div class="btn-group mb-4" role="group" aria-label="Entrega na cidade?">
            <input type="radio" class="btn-check" name="entrega" id="entregaSim" autocomplete="off" checked>
            <label class="btn btn-outline-success me-3" for="entregaSim">Sim</label>

           <input type="radio" class="btn-check" name="entrega" id="entregaNao" autocomplete="off">
            <label class="btn btn-outline-danger" for="entregaNao">Não</label>
          </div>

          <div id="campoCidade" class="mt-4" style="display: none;">
          <label for="cidade">Digite o nome da cidade:</label>
          <input type="text" id="cidade" class="form-control">
          </div>
            
            <button type="button" id="botao" class="btn btn-success mt-3">Enviar</button>

          </form>
          <br>
  </div>
    <script>
        document.getElementById("botao").onclick = function(){
            var nome = document.getElementById("nome").value;
            var email = document.getElementById("email").value
            var telefone = document.getElementById("telefone").value
            var mensagem = document.getElementById("mensagem").value
            var endereco = document.getElementById("endereco").value
            var cidade = document.getElementById("cidade").value;

            if (nome == "" && email == "" && telefone == "" && mensagem == "" && endereco == ""){
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

                if(endereco == ""){
                    alert("Informe um endereço")
                }

            }
               if (!email.includes("@")) {
        alert("Informe um e-mail válido.");
        return false;
    }
                if (document.getElementById("entregaNao").checked && cidade.trim() === ""){
          alert("Por favor, informe o nome da cidade para entrega!");
          return false;
      }
        if (nome !== "" && email !== "" && telefone !== "" && mensagem !== "" && endereco !==""){
            alert("Mensagem enviada com sucesso!");
        }
    }

      document.getElementById("entregaSim").onclick = function() {
    document.getElementById("campoCidade").style.display = "none";
  };
  document.getElementById("entregaNao").onclick = function() {
    document.getElementById("campoCidade").style.display = "block";
  };
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

<div class="whats">
  <a href="https://wa.me/554498290220" target="_blank">
  <img src="Site Imagens Madeireira/Botao WhatsApp.png" alt="WhatsApp">
  </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>