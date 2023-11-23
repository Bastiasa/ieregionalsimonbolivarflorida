<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>IE REGIONAL SIMÓN BOLÍVAR | Contacto</title>

        <link rel="shortcut icon" href="images/static/logo/logo-64x64.webp" type="image/x-icon">

        <link rel="stylesheet" href="style/classes.css<?php echo request_version?>">
        <link rel="stylesheet" href="default.css<?php echo request_version?>">
        <link rel="stylesheet" href="contacto.css<?php echo request_version?>">
    </head>

    <body>
        
        <header id="top-header">
            <span id="top-header__school-title">Institución Educativa Regional Simón Bolívar</span>
            
            <img id="top-header__overlay-logo" src="images/static/logo/logo-512x512.webp" alt="Escudo de la Institución Educativa Regional Simón
            Bolívar">

            <div id="top-header__black-transparent-overlay"></div>

            <img src="images/source/index/top-header/0.jpg" class="ignore-src" alt="Imagen de la Institución Educativa Regional Simón Bolívar" id="top-header__bg-image" images="<?php echo count_files_in_folder("images/source/index/top-header/")?>">
            
            <script src="scripts/index/top-header-activity.js"<?php echo request_version?>></script>
            
        </header>

        <div id="links-header" class="children-text-tranform-uppercase children-text-decoration-none">
        <a href="./">Inicio</a>
            <a href="institucional">Institucional</a>
            <a href="gobierno-escolar">Gobierno Escolar</a>
            <a href="sedes">Sedes</a>
            <a href="horarios">Horarios</a>
            <a class="disabled">Contacto</a>
        </div>

        <main id="content" class="fit-width horizontal-box flex-wrap justify-content-space-around">

            <section class="vertical-box center-box">
                <h2>Enviarnos un mensaje</h2>

                <p>
                    Puedes enviarnos un mensaje rápidamente llenando el siguiente formulario:
                </p>

                <form id="message-form" method="post" action="php/mensaje" class="vertical-box children-box-sizing-border-box">
                    <input required type="text" name="message-name" placeholder="Tu nombre completo*">
                    <input required type="email" name="message-mail" placeholder="Tu correo electrónico*">
                    <input required type="tel" name="message-tel-number" placeholder="Tu número telefónico*">
                    <textarea required name="message-content" id="" cols="30" rows="10" placeholder="Escribe tu mensaje aquí."></textarea>
                    <input type="submit" value="Enviar mensaje">
                </form>
            </section>
            
        </main>

        <footer class="default-footer" id="underground">
            <p>Institución Educativa Regional Simón Bolívar &copy;</p>
            <p>Florida, Valle del Cauca</p>
            <p>2023</p>
        </footer>

        <script type="module" src="scripts/image-loader.js<?php echo request_version?>"></script>
    </body>
</html>