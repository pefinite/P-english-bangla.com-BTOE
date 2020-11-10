<?php
$data = file_get_contents("php://input");

$file = fopen("btoe.txt", "a");
fwrite($file, $data . "\n");