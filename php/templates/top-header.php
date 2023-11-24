
<header id="top-header">
    <span id="top-header__school-title">Institución Educativa Regional Simón Bolívar</span>
    
    <img id="top-header__overlay-logo" src="images/source/logo-512x512.webp" alt="Escudo de la Institución Educativa Regional Simón Bolívar">

    <div id="top-header__black-transparent-overlay"></div>

    <img src="images/source/index/top-header/0.jpg" class="ignore-src" alt="Imagen de la Institución Educativa Regional Simón Bolívar" id="top-header__bg-image" images="<?php echo count_files_in_folder("images/source/index/top-header/")?>">
    
    <script src="scripts/index/top-header-activity.js"<?php echo request_version?>></script>
</header>

<?php
    
    $request_uri = ($_SERVER["REQUEST_URI"]);
    $last_slash = strrchr($request_uri, '/');
    $current = substr($request_uri, strlen($request_uri) - strlen($last_slash), strlen($request_uri));

    $current = str_replace('/','', $current);

    $links = array(
        "./",
        "institucional",
        "gobierno-escolar",
        "sedes",
        "horarios",
        "contactarnos"
    );

    echo '<div id="links-header" class="children-text-tranform-uppercase children-text-decoration-none">';

    foreach ($links as $link) {

        $link_name = ($link == "./") ? "Inicio" : str_replace("-", " ", ucwords($link));

        echo "<a";
        if ($link == $current || ($current == "" && $link == "./")) {
            echo " class=\"disabled\">$link_name";
        } else {
            echo " href=\"$link\">$link_name";
        }

        echo "</a>";
    }

    echo '</div>';
    

?>