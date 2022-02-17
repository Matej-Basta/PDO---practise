<?php


try{
    $connection = new PDO(
        'mysql:dbname=world;host=localhost;charset=utf8', // connection string
        'root', // username
        '' // password
    );
} catch (PDOException $e) {
    echo "Connection failer: " . $e->getMessage();
}

echo "end";