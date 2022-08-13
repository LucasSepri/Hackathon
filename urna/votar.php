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

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/c9619274ba.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <a href="index.php" class="voltar"><img src="IMG/voltar.svg" href="index.php"></a>
    <div class="titulo-votar">
        <h1 class="titulo-votar">SELECIONAR</h1>
        <select name="" id="">
            <option value="">REPRESENTANTE</option>
            <option value="">GREMIO</option>
            <option value="">CORDENADOR</option>
        </select>
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
            <img id="submit" src="IMG/enviar.svg">
        </div>

        <input type="checkbox" class="checkbox" id="chk">

        <label class="label" for="chk">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="bola"></div>
        </label>
    </div>

    </div>




    <div class="row cards">
        <div class="col s3 m3">
            <div class="card-votar">
                <img src="IMG/botao-info.svg" style="position: absolute;" >
                
                <img src="IMG/perfil/chereque.png" id="img">
                <h1>CHEREQUE</h1>
            </div>
        </div>
        <div class="col s3 m3">
            <div class="card-votar">

                <img src="IMG/perfil/the-rock.png" id="img">
                <h1>THE ROCK</h1>
            </div>
        </div>
        <div class="col s3 m3">
            <div class="card-votar">

                <img src="IMG/perfil/knuckles.png" id="img">
                <h1>KNUCKLES</h1>
            </div>
        </div>
        <div class="col s3 m3">
            <div class="card-votar">

                <img src="IMG/perfil/messi-careca.png" id="img">
                <h1>MESSI CARECA</h1>
            </div>
        </div>
        <div class="col s3 m3">
            <div class="card-votar">

                <img src="IMG/perfil/lula.png" id="img">
                <h1>LULA LIVRE</h1>
            </div>
        </div>
        <div class="col s3 m3">
            <div class="card-votar">

                <img src="IMG/perfil/ratatoio.png" id="img">
                <h1>RATATOIO</h1>
            </div>
        </div>
    </div>
    <div class="row cards">
        <div class="col s3 m3">
            <div class="card-votar">

                <img src="IMG/perfil/frizaaa.png" id="img">
                <h1>FRIZAAA</h1>
            </div>
        </div>
        <div class="col s3 m3">
            <div class="card-votar">

                <img src="IMG/perfil/jimin.png" id="img">
                <h1>JUNIN DO BTS</h1>
            </div>
        </div>
        <div class="col s3 m3">
            <div class="card-votar">

                <img src="IMG/perfil/cj.png" id="img">
                <h1>CJ</h1>
            </div>
        </div>
        <div class="col s3 m3">
            <div class="card-votar">

                <img src="IMG/perfil/rusbe.png" id="img">
                <h1>RUSBÉ</h1>
            </div>
        </div>
        <div class="col s3 m3">
            <div class="card-votar">

                <img src="IMG/perfil/sonico.png" id="img">
                <h1>SONICO</h1>
            </div>
        </div>
        <div class="col s3 m3">
            <div class="card-votar-branco">

                <h1>BRANCO</h1>
            </div>
        </div>
    </div>





    <!-- PARTE DE BAIXO -->
    <div>
        <img src="IMG/etec_info.png" id="info">
        <div class="setas">
            <img src="IMG/esquerda.svg">
            <a href="finalizar/index.html"><img src="IMG/finalizar.svg"></a>
        </div>
        <img src="IMG/onda.png" id="onda">
        <!-- <img src="IMG/ondaclara.png" alt="Onda" id="onda"> -->
    </div>


    <!-- JS DO BOOTSTRAP  5-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="JS/motor.js"></script>
</body>

</html>