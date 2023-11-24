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
        
        <!--TOP HEADER DECLARATION-->
        <?php require "php/templates/top-header.php"?>

        <main id="content" class="fit-width horizontal-box flex-wrap justify-content-space-around">

            <section class="vertical-box center-box">
                <h2>Envíanos un mensaje</h2>

                <p>
                    Llene el formulario para enviarnos un mensaje rápidamente:
                </p>

                <form id="message-form" method="post" action="enviar-mensaje" class="vertical-box children-box-sizing-border-box">
                    <input required type="text" name="message-name" placeholder="Tu nombre completo*">
                    <input required type="email" name="message-mail" placeholder="Tu correo electrónico*">
                    <input required type="tel" name="message-tel-number" placeholder="Tu número telefónico*">
                    <textarea required name="message-content" id="" cols="30" rows="10" placeholder="Escribe tu mensaje aquí."></textarea>
                    <input type="submit" value="Enviar mensaje">
                </form>
            </section>

            <section id="contact-table-container" class="vertical-box center-box">
                <h2>Información de contacto</h2>

                <table>
                    <tr>
                        <th>Correo electrónico</th>
                        <td><a href="mailto:<?php echo school_data["correo_electronico"]?>"><?php echo school_data["correo_electronico"]?></a></td>
                    </tr>

                    <tr>
                        <th>Número de teléfono</th>
                        <td><a href="tel:<?php echo school_data["telefono"]?>"><?php echo school_data["telefono_formateado"]?></a></td>
                    </tr>
                </table>
            </section>
            
        </main>

        <!-- BOTTOM FOOTER DECLARATION -->
        <?php require "php/templates/bottom-footer.php"?>

        <script type="module" src="scripts/image-loader.js<?php echo request_version?>"></script>
    </body>
</html>