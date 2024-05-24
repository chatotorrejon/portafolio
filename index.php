
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ALFREDO DE LOPE BURGOA">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/javascript.js"></script>
    <title>PAGINA PRINCIPAL</title>
</head>
<body>
    <div id="invisiblecuepo1">
        <header>
            <div class="marquee">
                <p>¡Bienvenidos a mi portafolio!</p>
            </div>
        </header>

        <nav>
            <ul>
                <li><a href="#clinica">CLINICA</a></li>
                <li><a href="#entrenador">ENTRENADOR</a></li>
                <li><a href="#miblock">MI BLOCK</a></li>
            </ul>
        </nav>

        <main>
            <section class="introduction">
                <h1>Hola, soy ALFREDO DE LOPE BURGOA</h1>
                <p>Bienvenido a mi portafolio. Aquí encontrarás información sobre mis proyectos y habilidades.</p>
            </section>

            <section class="projects">
                <h2>Mis Proyectos</h2>
                <div class="project-grid">
                    <div class="project">
                        <h3 id="clinica">CLINICA</h3>
                        <p>Hecho con html, php, bootstrap, css, javascript.</p>
                        <a href="https://yotorrejon.000webhostapp.com/clinica/index.php" target="_blank">Ver más</a>
                    </div>
                    <div class="project">
                        <h3 id="entrenador">ENTRENADOR</h3>
                        <p>Hecho con html, css, javascrip, php.</p>
                        <a href="https://yotorrejon.000webhostapp.com/entrenador/index.php" target="_blank">Ver más</a>
                    </div>
                    <div class="project">
                        <h3 id="miblock">MI BLOCK</h3>
                        <p>Hecho con html, css, javascrip, php.</p>
                        <a href="pagina3.html">Ver más</a>
                    </div>
                </div>
            </section>
        </main>
        <div>
            <marquee id="marquesina1"  scrolldelay="0" direction="left" loop="infinite" 10s></a>
				<a href="https://www.facebook.com/?locale=es_ES" target="_blank"><img src="img/_Pngtree_facebook_logo_social_media_icon_3654753-removebg-preview.png"></img>
				<a href="https://www.instagram.com/" target="_blank"><img src="img/instagram_2111463-removebg-preview.png"></img></a>
				<a href="https://x.com/?lang=es" target="_blank"><img src="img/twitter-3270924_1920-removebg-preview.png"></img></a>
				<a href="https://www.whatsapp.com/?lang=es_LA" target="_blank"><img src="img/whatsapp_733585-removebg-preview.png"></img></a>
				<a href="https://www.youtube.com/" target="_blank"><img src="img/youtube_4494485-removebg-preview.png"></img></a>
				<a href="https://www.facebook.com/?locale=es_ES" target="_blank"><img src="img/_Pngtree_facebook_logo_social_media_icon_3654753-removebg-preview.png"></img></a>
				<a href="https://www.instagram.com/" target="_blank"><img src="img/instagram_2111463-removebg-preview.png"></img></a>
				<a href="https://www.whatsapp.com/?lang=es_LA" target="_blank"><img src="img/whatsapp_733585-removebg-preview.png"></img></a>
				<a href="https://www.youtube.com/" target="_blank"><img src="img/youtube_4494485-removebg-preview.png"></img></a>
			</marquee>
        </div>    
        <?php include 'log/footer.php'; ?>
    </div>
    
</body>
</html>