<?php
    function count_files_in_folder(string $path) : int {
        return sizeof(scandir($path)) - 2;
    }

    define("request_version", "?v=".file_get_contents("version.txt"));

    $school_data =  json_decode(file_get_contents("data.json"), true);

    $formatted_phone_number = $school_data["telefono"];

    $phone_number = substr($formatted_phone_number, 3, strlen($formatted_phone_number));
    
    $count = 0;
    $formatted_phone_number = "";

    foreach (str_split($phone_number) as $char) {
        
        if($count >= 3) {
            $count = 0;
            $formatted_phone_number .= "-".$char;
        } else {
            $formatted_phone_number .= $char;
        }

        $count++;
    }

    $formatted_phone_number = "+57 ".$formatted_phone_number;
    $school_data["telefono_formateado"] = $formatted_phone_number;

    define("school_data", $school_data);
    
    $absolute_path = ($_SERVER["DOCUMENT_ROOT"].$_SERVER["REQUEST_URI"]);

    function showForbbiden() : void {
        echo "<h2 style=\"text-align:center;\">Forbbiden<h2>";
        echo "<h4 style=\"text-align:center;\">404</h4>";
    }

    if(is_dir($absolute_path)) {
        if(file_exists($absolute_path."/index.php")) {
            require $absolute_path."/index.php";
        } elseif(file_exists($absolute_path."index.php")) {
            require $absolute_path."index.php";
        } else {
            showForbbiden();
        }
    }  else {
        
        if(!str_ends_with($absolute_path, ".php")){$absolute_path .= ".php";}

        if(file_exists($absolute_path)){ require $absolute_path;}
        else {showForbbiden();}
    }

?>