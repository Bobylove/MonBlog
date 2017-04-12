<?php
$db = readline('Collez la chaîne de connexion à votre BDD : ');
$url = parse_url($db);

$host = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$database = substr($url["path"], 1);
$port = $url["port"];

echo "\n------------------\n";
echo "heroku config:set DB_USERNAME={$username} DB_PASSWORD={$password} DB_HOST={$host} DB_PORT={$port} DB_DATABASE={$database}";
echo "\n------------------\n";