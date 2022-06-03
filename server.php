<?php
    $method = $_SERVER['REQUEST_METHOD'];
    $file = 'db.txt';
    if ($method == 'POST') {
        file_put_contents($file, json_encode($_POST, TRUE).PHP_EOL, FILE_APPEND);
    } elseif ($method == 'PUT') {
        $putdata = file_get_contents('php://input');
        echo $putdata;
        file_put_contents($file, $putdata.PHP_EOL, FILE_APPEND);
    } elseif ($method == 'DELETE') {
        file_put_contents($file, null);
    }

?>