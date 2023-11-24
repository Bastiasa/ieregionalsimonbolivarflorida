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
        
        <!--TOP HEADER DECLARATION-->
        <?php require "php/templates/top-header.php"?>


        <main id="content" class="fit-width horizontal-box flex-wrap justify-content-space-around">

            <section class="center-box vertical-box">
                <h2>Noticias recientes</h2>

                <iframe src="" frameborder="0" id="news" class="corners"></iframe>
            </section>

            <section style="justify-content: center;" class="center-box vertical-box">
                <h2>Sitio Web Oficial</h2>

                <p>Bienvenido al sitio web oficial de la Institución Educativa Regional Simón Bolívar. Aquí puedes consultar noticias, documentos públicos, nuestro manual de convivencia y toda la información sobre nuestro colegio.</p>

                <h2>Dónde Encontrarnos</h2>

                <p>La Institución Educativa Regional Simón Bolívar se encuentra ubicada en el Corregimiento San Antonio de los Caballeros, en Florida, Valle del Cauca. Contine varias sedes, que brindan educación a diferentes cursos. <a href="sedes">¿Consultar información sobre las sedes?</a></p>

                <h2>Cómo contactarnos</h2>

                <p>Para contactarnos puede llenar un formulario o manualmente enviarnos un mensaje con la información que aparece en la <a href="contactarnos">pestaña para contactarnos</a>.</p>
            </section>


        </main>

        <!-- BOTTOM FOOTER DECLARATION -->
        <?php require "php/templates/bottom-footer.php"?>

        <script type="module" src="scripts/image-loader.js<?php echo request_version?>"></script>
    </body>
</html>