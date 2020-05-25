<?php
$host = 'mysql';
$db = 'dummy';//getenv('MYSQL_DATABASE');
echo "---------------".$db;
$user = 'dummy';//getenv('MYSQL_USER');
$pass = 'dummy';//getenv('MYSQL_PASSWORD');
try {
    $dbh = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);
} catch (PDOException $e) {
    echo 'РџРѕРґРєР»СЋС‡РµРЅРёРµ РЅРµ СѓРґР°Р»РѕСЃСЊ: ' . $e->getMessage();
    exit;
}






