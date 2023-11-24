<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>IE REGIONAL SIMÓN BOLÍVAR | Gobierno escolar</title>

        <link rel="shortcut icon" href="images/static/logo/logo-64x64.webp" type="image/x-icon">


        <link rel="stylesheet" href="style/classes.css<?php echo request_version?>">
        <link rel="stylesheet" href="default.css<?php echo request_version?>">
        <link rel="stylesheet" href="index.css<?php echo request_version?>">
    </head>

    <body>
        
        <!-- TOP HEADER DECLARATION -->
        <?php require "php/templates/top-header.php"?>


        <?php

            function echo_person(array $haystack, string $female_attr, string $male_attr) {
                foreach ($haystack["m"] as $person_name) {
                    echo "<tr><td>$person_name</td> <td>$male_attr</td></tr>";
                }

                foreach ($haystack["f"] as $person_name) {
                    echo "<tr><td>$person_name</td> <td>$female_attr</td></tr>";
                }
            }

            function echo_people_in_group(array $haystack, string $female_attr, string $male_attr, string $group) {

                echo "<tr><th colspan=\"3\">$group</th></tr>";

                foreach ($haystack["m"] as $person_name) {
                    echo "<tr><td>$person_name</td> <td>$male_attr</td></tr>";
                }

                foreach ($haystack["f"] as $person_name) {
                    echo "<tr><td>$person_name</td> <td>$female_attr</td></tr>";
                }
            }

            define("consejo_directivo",school_data["consejo_directivo"]);
        
        ?>

        <main id="content" class="fit-width horizontal-box flex-wrap justify-content-space-around">

            <section class="center-box vertical-box">
                <h2>Consejo directivo</h2>

                <table>
                    <tr>
                        
                    </tr>

                    <?php

                        #Rector

                        echo_person(consejo_directivo["rectoria"], "Rectora", "Rector");

                        #Consejo Directivo

                        echo_people_in_group(consejo_directivo["coordinacion"], "Coordinadora", "Coordinador", "Coordinación");
                        echo_people_in_group(consejo_directivo["psicologia"], "Psicóloga", "Psicólogo", "Psicología");
                        echo_people_in_group(consejo_directivo["secretaria"], "Secretaria", "Secretario", "Secretaría");
                        echo_people_in_group(consejo_directivo["tecnico_operativo"], "Técnica operativa", "Técnico operativo", "Técnico operativo");
                    
                    ?>
                </table>
            </section>


            <section class=" center-box vertical-box">
                <h2>Consejo académico</h2>

                <table>

                </table>
            </section>


            
        </main>
        
        <!-- BOTTOM FOOTER DECLARATION -->
        <?php require "php/templates/bottom-footer.php"?>

        <script type="module" src="scripts/image-loader.js<?php echo request_version?>"></script>
    </body>
</html>