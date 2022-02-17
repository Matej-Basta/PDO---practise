<?php


try{
    $connection = new PDO(
        'mysql:dbname=world;host=localhost;charset=utf8', // connection string
        'root', // username
        '' // password
    );
} catch (PDOException $e) {
    echo "Connection failer: " . $e->getMessage();
    exit();
}

$query = "
    SELECT `cities`.*
    FROM `cities`
    WHERE `name` = 'New York';
";

$statement = $connection->prepare($query);
$success = $statement->execute();

$statement->setFetchMode(PDO::FETCH_OBJ);
$all_results = $statement->fetchAll();


var_dump($all_results);

echo $success ? "yes" : "no";

