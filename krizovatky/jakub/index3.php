<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8">
    <title>TINA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="dizajn3.css">
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
</head>

<body>



    <header>
        <div class="float-start">
            <a href="../../index.html"><i class="fas fa-home"></i></a>
        </div>
        <h1>Záverečné zadanie</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Príklad 1</a></li>
            <li><a href="index3.php">Príklad 2</a></li>
        </ul>
    </nav>
    
    <h1>Príklad 2</h1>
    <br>
    <button  class="btn btn-success" id="demo" onclick="demo()">Demo</button>

    <main class="container">

        <div id="canvas-wrap">
            <canvas id="myCanvas" width="900" height="750" style="border:1px solid #000000;"></canvas>

            <div id="div_znacka_krizovatka">
                <img class="znacka_krizovatka" id="znacka_krizovatka" src="znacka_krizovatka.png" alt="znacka_krizovatka">
            </div>

            <div id="div_hlavna_cesta">
                <img class="hlavna_cesta" id="hlavna_cesta" src="hlavna_cesta.png" alt="hlavna_cesta">
            </div>

            <div id="div_prednost">
                <img class="rotate90 prednost" id="prednost" src="prednost.png" alt="znacka_prednost">
            </div>

            <div id="div_hlavna_cesta2">
                <img class="hlavna_cesta" id="hlavna_cesta2" src="hlavna_cesta.png" alt="hlavna_cesta">
            </div>

            <div id="div_prednost2">
                <img class="rotate180 prednost" id="prednost2" src="prednost.png" alt="znacka_prednost">
            </div>

            <div id="div_hlavna_cesta3">
                <img class="hlavna_cesta" id="hlavna_cesta3" src="hlavna_cesta.png" alt="hlavna_cesta">
            </div>

            <div id="car_grey_div">
                <img id="car_grey" src="car_grey.png" alt="car_grey" onclick="grey_car()">
            </div>

            <div id="car_blue_div">
                <img id="car_blue" src="car_blue.png" alt="car_blue" onclick="blue_car()">
            </div>

            <div id="car_red_div">
                <img id="car_red" src="car_red.png" alt="car_red" onclick="red_car()">
            </div>
            <div id="blinker_red"></div>

        </div>


        <div class="my-3">
            <div class="alert alert-success" role="alert">
                Správne riešenie!
            </div>
            <div class="alert alert-danger" role="alert">
                Nesprávne riešenie!
            </div>
        </div>

</main>

    <div class="col-lg-12 footer">
        <p>
            Copyright<br>
            Jakub Prôčka<br>
            jakub.procka7@gmail.com
        </p>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script3.js"></script>
</body>

</html>