<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age: 1728000');
header('Content-Length:0');
header('Content-Type: text/plain');
$con = mysqli_connect("freedb.tech", "freedbtech_modarhamadeh", "modarhah092651", "freedbtech_testing") or die("could not connect DB");
?>
