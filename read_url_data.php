<?php

$uri = file_get_contents("php://input");
$data = "";
while (!$data) {
    $data = file_get_contents($uri);
}
print_r($data);