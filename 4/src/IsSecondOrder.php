<?php
$file = $_GET['file'];

$data = file_get_contents($file);
var_dump($data);
?>