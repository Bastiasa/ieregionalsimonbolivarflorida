<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>IE REGIONAL SIMÓN BOLÍVAR</title>

        <link rel="shortcut icon" href="images/static/logo/logo-64x64.webp" type="image/x-icon">

        <link rel="stylesheet" href="style/classes.css<?php echo request_version?>">
        <link rel="stylesheet" href="default.css<?php echo request_version?>">
        <link rel="stylesheet" href="index.css<?php echo request_version?>">
    </head>

    <body>
        
        <header id="top-header">
            <span id="top-header__school-title">Institución Educativa Regional Simón Bolívar</span>
            
            <img id="top-header__overlay-logo" src="images/static/logo/logo-512x512.webp" alt="Escudo de la Institución Educativa Regional Simón Bolívar">

            <div id="top-header__black-transparent-overlay"></div>

            <img src="images/source/index/top-header/0.jpg" class="ignore-src" alt="Imagen de la Institución Educativa Regional Simón Bolívar" id="top-header__bg-image" images="<?php echo count_files_in_folder("images/source/index/top-header/")?>">
            
            <script src="scripts/index/top-header-activity.js"<?php echo request_version?>></script>
            
        </header>

        <div id="links-header" class="children-text-tranform-uppercase children-text-decoration-none">
            <a class="disabled">Inicio</a>
            <a href="institucional">Institucional</a>
            <a href="gobierno-escolar">Gobierno Escolar</a>
            <a href="sedes">Sedes</a>
            <a href="horarios">Horarios</a>
            <a href="contacto">Contacto</a>
        </div>

        <main id="content" class="fit-width horizontal-box flex-wrap justify-content-space-around">

            <div class="center-box vertical-box">
                <h2>Sitio Web Oficial</h2>

                <p>Bienvenido al sitio web oficial de la Institución Educativa Regional Simón Bolívar. Aquí puedes consultar noticias, documentos públicos, nuestro manual de convivencia y toda la información sobre nuestro colegio.</p>

                <h2>Dónde Encontrarnos</h2>

                <p>La Institución Educativa Regional Simón Bolívar se encuentra ubicada en el Corregimiento San Antonio de los Caballeros, en Florida, Valle del Cauca. Puede consultar la ubicación aquí:</p>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497.8709822733329!2d-76.30135979784733!3d3.3580191251805496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3a0d0942120935%3A0x2ea0238da908ada7!2sInstituci%C3%B3n%20Educativa%20Regional%20Sim%C3%B3n%20Bolivar!5e0!3m2!1ses!2sco!4v1700700678122!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="center-box vertical-box">
                <h2>Noticias recientes</h2>

                <iframe src="" frameborder="0" id="news" class="corners"></iframe>

                <h2>Información de contacto</h2>

                <table>
                    <tr>
                        <td>Número de teléfono</td>
                        <td><a href="tel:<?php echo school_data["telefono"]?>"><?php echo school_data["telefono"]?></a></td>
                    </tr>

                    <tr>
                        <td>Correo electrónico</td>
                        <td><a href="mailto:<?php echo school_data["correo_electronico"]?>"><?php echo school_data["correo_electronico"]?></a></td>
                    </tr>
                </table>
            </div>

            
        </main>

        <footer class="default-footer" id="underground">
            <p>Institución Educativa Regional Simón Bolívar &copy;</p>
            <p>Florida, Valle del Cauca</p>
            <p>2023</p>
        </footer>

        <script type="module" src="scripts/image-loader.js<?php echo request_version?>"></script>
    </body>
</html>