<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Nossa Senhora</title>
</head>
<body>

    <header>
        <nav class="nav-bar">
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="#" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Projetos</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> Sobre</a></li>
                </ul>
            </div>

            <!--<div class="login-button">
                <h1>Sempre mais alto!</h1>
            </div>-->

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="img/menu_white_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="#" class="nav-link">Início</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Projetos</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
            </ul>

            <div class="login-button">
                <button><a href="#">Entrar</a></button>
            </div>
        </div>
    </header>

    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">  
            <input type="radio" name="radio-btn" id="radio3">  
            <input type="radio" name="radio-btn" id="radio4">  



            <div class="slide first">
                <img src="img/img1.jpg" alt="imagem1">
            </div>
            
            <div class="slide first">
                <img src="img/img2.jpeg" alt="imagem2">
            </div>

            <div class="slide first">
                <img src="img/img3.jpg" alt="imagem3">
            </div>

            <div class="slide first">
                <img src="img/img4.png" alt="imagem4">
            </div>




            <div class="navigation-auto">
                <div class="atuo-btn1"></div>
                <div class="atuo-btn2"></div>
                <div class="atuo-btn3"></div>
                <div class="atuo-btn4"></div>
            </div>

        </div>

        <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>


    </div>

    <script src="js/script.js"></script>
    
</body>
</html>