<?php

    define('API_VER', 'v');

    array_key_exists(API_VER, $_REQUEST) ? $v = $_REQUEST[API_VER] : $v = '1.0.0';

    if (file_exists("{$v}.php")) {
        if (is_dir(dirname(__FILE__) . "/{$v}")) {
            require dirname(__FILE__) . "/{$v}.php";
        } else {
            $error = new stdClass();
            $error->error = true;
            $error->description = 'INVALID_API_VERSION';
            echo json_encode($error);
            exit;
        }
    } else {
        $error = new stdClass();
        $error->error = true;
        $error->description = 'INVALID_API_VERSION';
        echo json_encode($error);
        exit;
    }
?>
