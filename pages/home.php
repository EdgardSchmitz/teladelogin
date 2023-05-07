
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Tela inicial</title>
</head>
<body>


    <header>
        <div class="titulo">
            <h2>Sistema Inicializado ...</h2>
        </div>
        <div id="data_hora"></div>
        
    </header>

    <nav class="menu_lateral">

        <ul>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><span class="material-symbols-outlined">
                        home
                        </span></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><span class="material-symbols-outlined">
                        nights_stay
                        </span></span>
                    <span class="txt-link">Tempo</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><span class="material-symbols-outlined">
                        newspaper
                        </span></span>
                    <span class="txt-link">Noticias</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><span class="material-symbols-outlined">
                        folder_supervised
                        </span></span>
                    <span class="txt-link">Arquivos </span>
                </a>
            </li>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><span class="material-symbols-outlined">
                        inventory
                        </span></span>
                    <span class="txt-link">projetos</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><span class="material-symbols-outlined">
                        logout
                        </span></span>
                    <span class="txt-link">Sair</span>
                </a>
            </li>
        </ul>

    </nav>

    <div class="video_aovivo">

<div class="aovivo">
    <h1 class="text-aovivo">Monitorando Espaço e Terra ... </h1>
    <iframe width="350" height="228" src="https://www.youtube.com/embed/4_OT4xFrjmM?autoplay=1&mute=1" title="🌎 LIVE: NASA Live Stream of Earth from Space (ISS)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<div class="aovivo">
    <h1 class="text-aovivo">Cameras ao redor do mundo</h1>
    <iframe width="350" height="228" src="https://www.youtube.com/embed/NpeZcVgHlcI?autoplay=1&mute=1" title="THE WORLD LIVE SHOWCASE - new partner and cameras showcase version  | earthTV" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<div class="aovivo">
    <h1 class="text-aovivo">Noticias</h1>
    <iframe width="350" height="228" src="https://www.youtube.com/embed/9Auq9mYxFEE?autoplay=1&mute=1" title="Watch Sky News live" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
 
    </div>
    

    <script language=javascript type="text/javascript">
        now = new Date
        document.getElementById('data_hora').innerHTML=now.getDate() + " / " + now.getDay() + " / " + now.getFullYear();
        </script>
        
</body>
</html>