<!DOCTYPE html>
<html lang="en">

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
    <img src="img/onda.svg" alt="onda" id="onda">

    <!-- BOX ESQUERDA -->
    <div class="box">

        <!-- PAINEL DE CONTROLE -->
        <div class="painel">

            <!-- TITULO PAINEL -->
            <div class="painelDeControle" style="display: inline-flex; font-family: candal; font-size: 0.8em; color: aliceblue; padding-top: 7%;">
                <img src="img/Config.png" alt="..." style="margin: 5%;">
                <p style="padding-top: 8%;">PAINEL DE CONTROLE</p>
            </div>
            <hr style="background-color: #f0f8ff;">
            <div>

                <!-- LISTA DO PAINEL DE CONTROLE -->
                <ul class="menuesq">
                    <a href="" style="text-decoration: none;">
                        <li>PROBLEMAS E RECLAMAÇÕES</li>
                    </a>
                    <a href="" style="text-decoration: none;">
                        <li>ADICIONAR CATEGORIA</li>
                    </a>
                    <a href="" style="text-decoration: none;">
                        <li>EDITAR USUÁRIO</li>
                    </a>
                    <a href="" style="text-decoration: none;">
                        <li>NOTIFICAÇÕES</li>
                    </a>
                </ul>
            </div>

            <!-- BOTÃO INICIO -->
            <div>
                <br><br>
                <a href="index.php">
                    <button type="button" class="btn btn-lg" style="margin-inline: 14%; margin-top: 100%; padding-bottom: 6%;"><img src="img/home.svg" alt="..." style="width: 25%; margin-top: -4%;"> INÍCIO</button></a>
            </div>
        </div>
    </div>

    <!-- BOX CENTRO -->
    <div class="box2">

        <!-- FOUMULARIO -->
        <form>
            <div class="form-group mt-4">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="NOME DO CANDIDATO">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="NOME DA CHAPA">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">INFORMAÇÕES DO CANDIDATO</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">INFORMAÇÕES DA CHAPA</label>
                <textarea class="form-control" id="exampleFormControlTextarea2" rows="8"></textarea>
            </div>
        </form>
    </div>

    <!-- LOGO INFERIOR -->
    <div class="etec">
        <img src="IMG/etec_info.png" style="width: 50%;">
    </div>

    <!-- BOX DIREITO -->
    <div class="box3">

        <!-- CONTAINER SUPERIOR -->
        <div class="container d-flex">
            <img src="img/Config.png" class="rounded my-2" alt="..." style="max-width: 40%;">
            <p style="font-family: candal; margin: auto;">INFORMAÇÕES</p>

            <!-- CONTAINER INFERIOR -->
        </div>

        <!-- CONTAINER INFERIOR -->
        <div class="containerbaixo">
            <p style="text-align: center; padding-top: 0.5em; font-family: candal; font-size: 1.5em;">PARTICIPANTES</p>
            <hr>

            <!-- CAIXA OPÇÃO SELECT -->
            <div>
                <select class="selectadmin" multiple>
                    <option>MICHAEL JACKSON</option>
                    <option>PERRY O ORNITORRINCO</option>
                    <option>TIRIRICA</option>
                    <option>TICOLIRO</option>
                    <option>SMITH</option>
                    <option>SMITH</option>
                    <option>SMITH</option>
                    <option>SMITH</option>
                    <option>SMITH</option>
                    <option>SMITH</option>
                </select>
            </div>

            <!-- GRUPO DE BOTOES INFERIOR -->
            <input class="btn" type="button" value="EDITAR">
            <input class="btn" type="submit" value="ADICIONAR">
            <input class="btn" type="reset" value="DELETAR">
        </div>
    </div>




    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>