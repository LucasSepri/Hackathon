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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style2.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/c9619274ba.js" crossorigin="anonymous"></script>



<body>
    <!-- CONFIGURAÇÃO -->
    
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

    <!-- FIM_CONFIGURAÇÃO -->

    <div class="fixed-bottom">
        <img src="IMG/onda.svg" alt="onda" id="onda">
    </div>

    <!-- TOPO -->
    <div class="container-fluid d-flex justify-content-center">
        <div class="topo">
            <a href="../index.php">
                <img src="IMG/voltar.svg" style="width: 5%;"></a>
            <h1>CANDIDATURA</h1>
        </div>
    </div>
    <div class="fixed-bottom">



        <!-- CONTAINER PAI -->
        <div class="container-fluid mb-5" style="display: flex; ">

            <!-- CONTAINER ESQ (FOTO, CATEGORIA, NOME) -->
            <div class="container">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-75 m-auto" src="IMG/camera.svg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <form>
                            <div>
                                <label for="arquivo">Enviar arquivo</label>
                                <input type="file" name="arquivo" id="arquivo">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown mt-3 w-100">

                    
                    <div class="titulo-votar" style="font-family: candal;">
                        
                        <select name="" id="">
                            <option value="">CATEGORIAS</option>
                            <option value="">REPRESENTANTE</option>
                            <option value="">GREMIO</option>
                            <option value="">CORDENADOR</option>
                        </select>
                    </div>
                   
                </div>
                <div class="inputform">
                    <input class="form-control w-50 mx-auto mt-3" type="text" placeholder="NOME" id="forme">
                </div>
            </div>

            <!-- CONTAINER DIR(TEXT AREA, INSCREVER-SE) -->
            <div class="container">
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="16"
                        placeholder="DESCRIÇÃO SOBRE"></textarea>
                    <a href="../index.php"><button type="button" class="btn btn-secondary btn-lg btn-block w-50 mx-auto mt-3"
                        style="font-size: 2em;">INSCREVA-SE</button></a>
                </div>
            </div>
        </div>
        <div>
            <img src="IMG/etec_info.png" style="width: 35%;">
        </div>





        <script>
            function dark() {
                document.body.classList.toggle('dark');
                document.querySelector('#onda').classList.toggle('dark');
                document.querySelector('#p').classList.toggle('dark');
            }

            const chk = document.getElementById('chk')
            chk.addEventListener('change', () => {
                dark();
            })
        </script>


        <script>
            document.getElementsByClassName("tablink")[0].click();

            function openCity(evt, cityName) {
                var i, x, tablinks;
                x = document.getElementsByClassName("city");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].classList.remove("w3-light-grey");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.classList.add("w3-light-grey");
            }
        </script>
</body>























<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>