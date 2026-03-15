<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = file_get_contents("php://input");
    $json = json_decode($data, true);

    file_put_contents("log.txt", $data . PHP_EOL, FILE_APPEND);

    http_response_code(200);
    echo "OK";

} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
