<?php

$data = file_get_contents("php://input");
$evento = json_decode($data, true);

if ($evento["event"] == "PURCHASE_APPROVED") {

    $email = $evento["data"]["buyer"]["email"];
    $valor = $evento["data"]["purchase"]["price"]["value"];

    file_put_contents("vendas.txt", $email . " - " . $valor . PHP_EOL, FILE_APPEND);

}

http_response_code(200);
?>
