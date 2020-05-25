<?php
$host = 'mysql';
$db = getenv('MYSQL_DATABASE');
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');
try {
    $dbh = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
    exit;
}



