<?php
header('Content-Type: application/json');

$scripts = glob("*.lua");
echo json_encode($scripts);