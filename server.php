<?php

$list = json_decode(file_get_contents('list.json'), true);

header('Content-Type: application/json');

echo json_encode($list);