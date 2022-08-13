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
    <link rel="stylesheet" href="CSS/style.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/c9619274ba.js" crossorigin="anonymous"></script>


    <style>
        @charset "utf-8";
        @import url('https://fonts.googleapis.com/css2?family=Candal&display=swap');

        body {
            overflow-y: hidden;
            background-color: #18547D;
        }

        /* BACKGROUND */
        #onda {
            width: 100%;
        }

        /* TOPO */
        h1 {
            position: relative;
            margin-top: 2%;
            margin-left: 28%;
            display: inline-flex;
            color: aliceblue;
            font-family: candal;
            font-size: 3.5em;
            text-align: center;
        }

        .topo {
            width: 100%;
            height: 90px;

        }

        .topo img {
            width: 30%;
            margin-top: -5%;
        }

        .login {
            float: right;
            text-decoration: none;
            font-size: 1.5em;
            display: inline-flex;
            color: #FFFFFF;
        }

        .login:hover {
            color: #C1CBD1;
        }

        /* CONTAINER PAI */
        .container-fluid {
            margin-bottom: -5%;
            width: 100%;
            position: relative;
            z-index: 99912;
        }

        /* CONTAINERs COM CONTEÚDO */
        .container {
            margin: auto;
            right: 6%;
            border-radius: 30px;
            position: relative;
            z-index: 9991;
            margin-top: 2%;
            padding: 1%;
            width: 50%;
            height: auto;
        }

        /* CONTEÚDO ESQUERDO */
        .card {
            background-color: #202E4F;
            max-width: 50%;
            height: 60%;
            margin: auto;
            border-radius: 30px;
            padding-top: 8%;
            box-shadow: 0px 10px 30px black;
        }

        input[type="file"] {
            display: none;
        }

        label {
            margin: auto;
            padding: 10px 5px;
            width: 100%;
            border-radius: 10px;
            background-color: #F3F3F3;
            color: #202E4F;
            text-transform: uppercase;
            text-align: center;
            font-family: candal;
            display: block;
            margin-top: 10px;
            cursor: pointer;
        }

        .inputform input {
            border-radius: 10px;
            box-shadow: 0px 10px 30px black;
            text-align: center;
            font-size: 1.3em;
            font-family: candal;
        }

        .btn {
            background-color: #202E4F;
            margin: auto;
            width: auto;
            border-radius: 10px;
            border-color: #202E4F;
            box-shadow: 0px 10px 30px black;
            text-align: center;
            font-family: candal;
        }

        /* CONTEÚDO DIREITO */

        .form-group textarea {
            box-shadow: 0px 10px 30px black;
            border-radius: 30px;
            padding: 3%;
            font-family: candal;
        }


        /* config */
        .w3-dropdown-click {
            float: right;
            margin-right: 3%;
        }

        #teste.dark {
            background-color: #ffff;


        }

        body.dark {
            background: #ffffff;
        }

        .checkbox {
            opacity: 0;
            position: absolute;
        }

        .label {
            background-color: #202E4F;
            border-radius: 50px;
            cursor: pointer;
            margin: auto;
            top: 5vw;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0px;
            position: relative;
            width: 263.97px;
            height: 95.87px;

        }

        .label .bola {
            background-color: rgb(0, 0, 0);
            border-radius: 50%;
            position: absolute;


            width: 95.87px;
            height: 95.87px;
            transform: translateX(0px);
            transition: transform 0.2s linear;
        }

        .checkbox:checked+.label .bola {
            transform: translateX(163px);
        }

        .fa-moon {
            color: #ffffff;
            padding: 2px;
            width: 300px;
        }

        .fa-sun {
            color: #f39c12;
            padding: 2px;
        }

        #h2.dark {
            color: #fff;
        }

        #p.dark {
            color: #fff;
        }

        .fas {
            z-index: 10;
            margin: 8px;
            font-size: 80px;
        }



        .icon-config {
            position: absolute;
            left: 92%;
            top: 12px;
            cursor: pointer;
        }

        .config {
            position: absolute;
            z-index: 99;
            right: 0px;
            top: -4px;
            width: 475.42px;
            height: 673.4px;


            background: #F3F3F3;

            border-radius: 30px 0px 30px 30px;

            filter: drop-shadow(-19px 26px 16px rgba(0, 0, 0, 0.25));
        }

        .relatar {
            background: #202E4F;
            border-radius: 30px;
            margin: 10px;

        }

        .problema {
            width: 383px;
            height: 233px;

            color: #202E4F;
            background: #ffffff;
            border-radius: 30px;
        }

        .perfil-circulo {
            width: 106.4px;
            height: 106.4px;
            top: 25.63px;

            background: #202E4F;
        }
    </style>
</head>



<body>
    <!-- CONFIGURAÇÃO -->
    <img src="img/config.png" onclick="document.getElementById('id03').style.display='block'" class="icon-config">

    <div id="id03" class="config" style="display: none;">

        <img src="IMG/x.svg" class="w3-button w3-right w3-white w3-border"
            onclick="document.getElementById('id03').style.display='none'">

        <div class="perfil-circulo"><img src="" alt="perfil"></div>
        <p>Nome Usuario</p>

        <div class="relatar">
            <h1>RELATAR PROBLEMA</h1>
            <textarea class="problema"></textarea>
            <img src="IMG/enviar.svg">
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
            <a href="index.php">
                <img src="IMG/voltar.svg" style="width: 5%;"></a>
            <h1>CANDIDATURA</h1>
        </div>
    </div>
    <div class="fixed-bottom">



        <!-- CONTAINER PAI -->
        <div class="container-fluid" style="display: flex;">

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

                    <button class="btn btn-secondary btn-block btn-lg w-50 m-auto dropdown-toggle" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h7> CATEGORIAS</h7>
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">GRÊMIO</a>
                        <a class="dropdown-item" href="#">REPRESENTANTE</a>
                        <a class="dropdown-item" href="#">DIRETORIA</a>
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
                    <button type="button" class="btn btn-secondary btn-lg btn-block w-50 mx-auto mt-3"
                        style="font-size: 2em;">INSCREVA-SE</button>
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