<?php
include("conexao.php");
if ($_POST) {
  loginUsuario($_POST['rm'], $_POST['senha']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <!-- Meta tags Obrigatórias -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- titulo -->
  <title>URNA DIGITAL</title>

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="./IMG/favicons//apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./IMG/favicons//favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./IMG/favicons//favicon-16x16.png">
  <link rel="manifest" href="./IMG/favicons//site.webmanifest">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- w3schools CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- CSS -->
  <link rel="stylesheet" href="CSS/style.css">

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/c9619274ba.js" crossorigin="anonymous"></script>
</head>

<body>
  <img id="etec" src="IMG/etec_info.png" style="width: 30%;">

  <p id="id04" class="login" onclick="document.getElementById('id02').style.display='block'">LOGAR-SE</p>

  <div id="id02" class="w3-modal">
    <div class="w3-animate-zoom tela">
      <div class="tela-azul">

        <svg class="btn-voltar" onclick="document.getElementById('id02').style.display='none'" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M28.583 3.18453C28.5836 2.52099 28.3771 1.87386 27.9925 1.33371C27.6078 0.793564 27.0642 0.387424 26.4377 0.172131C25.8113 -0.0431627 25.1333 -0.0568364 24.4987 0.133023C23.8641 0.322883 23.3047 0.706775 22.8986 1.23098L0.669089 29.8662C0.23544 30.4247 0 31.1121 0 31.8197C0 32.5274 0.23544 33.2148 0.669089 33.7733L22.8986 62.4085C23.3047 62.9327 23.8641 63.3166 24.4987 63.5065C25.1333 63.6963 25.8113 63.6827 26.4377 63.4674C27.0642 63.2521 27.6078 62.8459 27.9925 62.3058C28.3771 61.7656 28.5836 61.1185 28.583 60.455V47.76C45.6648 48.1164 53.8707 51.3649 57.9927 54.8965C61.9114 58.2532 62.6291 62.2017 63.3754 66.3379L63.5691 67.4038C63.7116 68.1664 64.1274 68.8507 64.7382 69.3277C65.349 69.8047 66.1127 70.0417 66.8857 69.994C67.6587 69.9463 68.3877 69.6172 68.9354 69.0687C69.4832 68.5202 69.812 67.79 69.8601 67.0156C70.4031 58.2723 69.587 45.6028 63.423 35.0046C57.4401 24.7182 46.6651 16.8085 28.583 15.9813V3.18453Z" fill="#FFFEFE" />

        </svg>
        <form method="$_POST">
          <h1 class="login-titulo">BEM VINDO</h1>
          <input id="rm" type="text" placeholder="RM">
          <input id="senha" type="password" placeholder="******">
          <input type="checkbox" name="chek" id="chek">
          <label for="chek" id="caixinha">Lembrar-me</label>
          <button id="bt" type="submit">ACESSAR</button>
        </form>
      </div>
    </div>
  </div>


  <!-- Configurações -->
  <img src="img/config.png" onclick="document.getElementById('id03').style.display='block'" class="icon-config">

  <div id="id03" class="config" style="display: none;">

    <img src="IMG/x.svg" class="w3-button w3-right w3-white w3-border" onclick="document.getElementById('id03').style.display='none'">

    <div class="perfil-circulo"><img id="user" src="IMG/user.svg" alt="perfil"></div>
    <p id="nmusuario">Nome Usuario</p>

    <div class="relatar">
      <h1 id="problem">RELATAR PROBLEMA</h1>
      <textarea class="problema"></textarea>
      <a href="admin.php"><img id="submit" src="IMG/enviar.svg"></a>
    </div>

    <input type="checkbox" class="checkbox" id="chk">

    <label class="label" for="chk">
      <i class="fas fa-moon"></i>
      <i class="fas fa-sun"></i>
      <div class="bola"></div>
    </label>
  </div>


  <!-- Cards -->
  <div class="cards">
    <div class="row">

      <div class="card">
        <p class="titulo">Candidatura</p>
        <img class="images" src="IMG/Vector.png">
        <a href="root/candidatar.php" class="btn btn-primary botoes" role="button" style="height: 120px;  margin-top: 25px;">PARTICIPAR</a>
      </div>

      <div class="card">
        <p class="titulo">URNA DIGITAL</p>
        <img class="images" src="IMG/logo.svg" style="margin-top: 10px;">
        <a href="votar.php" class="btn btn-primary botoes" role="button" style="height: 190px;  margin-top: 25px;">
          <p style="font-size: 120px;margin-top: -10px;">VOTAR</p>
        </a>
      </div>

      <div class="card">
        <p class="titulo">Ranking votação</p>
        <img class="images" src="IMG/Vector-3.png">
        <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary botoes" style="height: 120px;  margin-top: 25px;">VERIFICAR</button>

        <div id="id01" class="w3-modal">
          <div class="tela w3-animate-zoom">
            <div class="tela-azul">
              <img src="IMG/LOGIN.png" >

              <!-- botão voltar -->
              <svg class="btn-voltar" onclick="document.getElementById('id01').style.display='none'" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.583 3.18453C28.5836 2.52099 28.3771 1.87386 27.9925 1.33371C27.6078 0.793564 27.0642 0.387424 26.4377 0.172131C25.8113 -0.0431627 25.1333 -0.0568364 24.4987 0.133023C23.8641 0.322883 23.3047 0.706775 22.8986 1.23098L0.669089 29.8662C0.23544 30.4247 0 31.1121 0 31.8197C0 32.5274 0.23544 33.2148 0.669089 33.7733L22.8986 62.4085C23.3047 62.9327 23.8641 63.3166 24.4987 63.5065C25.1333 63.6963 25.8113 63.6827 26.4377 63.4674C27.0642 63.2521 27.6078 62.8459 27.9925 62.3058C28.3771 61.7656 28.5836 61.1185 28.583 60.455V47.76C45.6648 48.1164 53.8707 51.3649 57.9927 54.8965C61.9114 58.2532 62.6291 62.2017 63.3754 66.3379L63.5691 67.4038C63.7116 68.1664 64.1274 68.8507 64.7382 69.3277C65.349 69.8047 66.1127 70.0417 66.8857 69.994C67.6587 69.9463 68.3877 69.6172 68.9354 69.0687C69.4832 68.5202 69.812 67.79 69.8601 67.0156C70.4031 58.2723 69.587 45.6028 63.423 35.0046C57.4401 24.7182 46.6651 16.8085 28.583 15.9813V3.18453Z" fill="#FFFEFE" />
              </svg>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- IMAGEM ONDA FUNDO -->
  <img src="IMG/onda.png" alt="Onda" id="onda">


  <!-- JS DO BOOTSTRAP  5-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- JavaScript -->
  <script src="JS/motor.js"></script>
</body>

</html>