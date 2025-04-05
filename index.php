<?php 

    $guestName = $_GET["name"];

?>

<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./img/icons/favicon/favicon_pronto.png" type="image/x-icon">
        <link rel="stylesheet" media="screen and (max-width: 600px)" href="./styles/mobile-style.css">
        <link rel="stylesheet" media="screen and (min-width: 601px)" href="./styles/normal-style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Outfit:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <title>Thomaz & Nilanda</title>
    </head>
    <body>
        <header>
            <div class="menu-nav">
                <div class="menu">
                    <div class="hamburguer-icon">
                        <img id="open-menu" src="./img/icons/burger-menu-svgrepo-com.svg" alt="menu">
                    </div>
                    <div class="hamburguer-menu" id="menu">
                        <div class="content">
                            <div class="content-child">
                                <div class="close-button">
                                    <img id="close-menu" src="./img/icons/close-svgrepo-com.svg" alt="close-menu">
                                </div>
                                <div class="menu-list">
                                    <ul>
                                        <li>Início</li>
                                        <li>Convite</li>
                                        <li>Informações</li>
                                        <li>Presentear</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="counter">
                                <div class="timers">
                                    <p id="days">00</p> <span>dias</span>
                                </div>
                                <div class="timers">
                                    <p id="hours">00</p> <span>horas</span> 
                                </div>
                                <div class="timers">
                                    <p id="minutes">00</p> <span>minutos</span> 
                                </div>
                                <div class="timers">
                                    <p id="seconds">00</p> <span>segundos</span> 
                                </div>
                            </div>
                        </div>
                        <div class="styled" id="styled-container"></div>
                    </div>
                </div>
                <div class="logo">
                    <img src="./img/logo_site_casamento.png" alt="T&N">
                </div>
                <div class="adjust"></div>
            </div>
        </header>
        <nav>
            <div class="max-container">
                <div class="container-title">
                    <img src="./img/title-principal.png" alt="Thomaz e Nilanda">
                </div>
                <div class="container-citation">
                    <div class="citation">
                        <p>“Assim, eles já não são dois, mas sim uma só carne.</p>
                        <p>Portanto, o que Deus uniu, ninguém separa.”</p>
                    </div>
                    <div class="reference">
                        <p>- Mateus 19:6</p>
                    </div>
                </div>
            </div>
            <div class="invite">
                <div class="invite-container">
                    <div class="text-invite">
                        <p>Com a bênção de Deus e de nossos pais</p>
                        <p>Temos a alegria de convidar:</p>
                    </div>
                    <div class="invited-name">
                        <h1><?php echo($guestName); ?></h1>
                    </div>
                    <div class="text-invite">
                        <p>Para testemunhar e celebrar conosco</p>
                        <p>O sacramento do matrimônio,</p>
                        <p>No qual entregaremos nossas vidas</p>
                        <p>Um ao outro diante do altar do Senhor.</p>
                    </div>
                    <div class="invite-party">
                        <p>* Após a cerimônia haverá recepção</p>
                    </div>
                </div>
            </div>
        </nav>
        <footer>
            
        </footer>
        <div class="bigger-screen">
            <h1>Conteúdo disponível apenas em dispositivos mobile.</h1>
            <p>&copy Dev. Thomaz Torres</p>
        </div>
        <script src="./scripts/menu.js"></script>
        <script src="./scripts/timer.js"></script>
    </body>
</html>