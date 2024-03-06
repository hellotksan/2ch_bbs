<?php

$user = "root";
$pass = "password";

//DBと接続
try {
    $pdo = new PDO('mysql:host=localhost;dbname=2chan-bbs', $user, $pass);
    // echo "DBとの接続に成功しました";
} catch (PDOException $error) {
    echo $error->getMessage();
}
