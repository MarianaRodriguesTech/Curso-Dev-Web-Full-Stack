<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- icone -->
<link rel="shortcut icon" href="img/icons8-trem-ios-17-filled-96.png" type="image/x-icon">
    <!-- fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!-- Link css  -->
    <link rel="stylesheet" href="style.css">
    <!-- fim link css -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Expresso Polar</title>
</head>

<body>
        <!-- DARK-MODE -->
        <input type="checkbox" name="#" id="toggle" class="toggle-btn">
        <label for="toggle" class="toggle-label"></label>

    <h1 class="titulo-principal">O Expresso Polar</h1>

    <p> O filme conta a história de um jovem que, na véspera de Natal, avista um trem misterioso com destino ao Polo Norte parar fora de sua janela e é convidado a bordo por seu condutor. O menino se junta a várias outras crianças enquanto embarcam em uma jornada para visitar o Papai Noel se preparando para o Natal.</p>

    <div class="capafilme">
    <img class="filmecapa" src="https://m.media-amazon.com/images/S/pv-target-images/d72f77d4a76bafe27c417c52510c7f37c1a28166de3ff63c50fab39e224c121e.jpg" alt="">
    </div>

    <h2>Conheça os personagens:</h2>

    <div class="form">
        <form action="#" method="post">

            <select name="personagem" id="#">
                <option value="heroi">Herói</option>
                <option value="condutor"> O Condutor</option>
                <option value="heroina">A Heroína</option>
                <option value="billy">Billy</option>
                <option value="lenny">Lenny</option>
                <option value="smokeysteamer">Smokey e Steamer</option>
            </select>
            <input type="submit" value="Ver imagem">
        </form>
    </div>


  <div class="php">
 <?php

 if ($_SERVER["REQUEST_METHOD"] == "POST"){

    switch($_POST["personagem"]){

        case "heroi":
            $titulo = "Herói";
            $imagem = "https://i0.wp.com/eoh.com.br/wp-content/uploads/expressopolar-e1450109389418.png?fit=488%2C276&ssl=1";
            break;
        case "condutor":
            $titulo = "Condutor";
            $imagem = "https://www.termometrooscar.com/uploads/1/4/8/8/1488234/4202862_orig.jpg";
            break;
        case "heroina":
            $titulo = "Heroína";
            $imagem = "https://img.buzzfeed.com/buzzfeed-static/static/2021-11/16/2/enhanced/937a2ffed9ca/enhanced-9444-1637029295-11.jpg?crop=360:257;0,0";
            break;
        case "billy":
            $titulo = "Billy";
            $imagem = "https://play-lh.googleusercontent.com/proxy/cIowCV_ZmeljpSBwpyPMo4UdjpmTCjvl1XpJ8OCGrpdhNAlBf7p_Ii942AB1h_xFb_ptKWYElNo4Tu_pPTllslF1fCmKUxidURGok6nLtNKcWKuzuw=s1920-w1920-h1080";
            break;
        case "lenny":
            $titulo = "Lenny";
            $imagem = "https://play-lh.googleusercontent.com/-9pB0c5WNSgV1EHeE5bDEdkPJJtOpd4yQe3dDrcgrMqZnqWq5j5vTvGb7QuiIVpQf70LIKvkQRIRYE3YGw=s1280-w1280-h720";
            break;
        case "smokeysteamer":
            $titulo = "Smokey e Steamer";
            $imagem = "img/SmokeySteamer.png";
            break;
            default:
            $titulo = "";
            $imagem = "";
    }
    
    if($titulo && $imagem){
        echo "<h2>$titulo</h2>";
        echo "<img src='$imagem' alt='$titulo'>";
    }else{
        echo "<p> Por favor, selecione um personagem.</p>";
    }
}
    ?>

</div>
<footer>Desenvolvido por Mariana Rodrigues | &copy; 2024</footer>
<script src="main.js"></script>
</body>
</html>