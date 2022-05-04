<?php

function get_connection() {
    $config = require 'config.php';

    return new PDO(
        $config['database_dsn'],
        $config['database_user'],
        $config['database_pass']
    );
};

function get_pets()
{
    $pdo = get_connection();

    $result = $pdo->query('SELECT * FROM pet LIMIT 3');
    $pets = $result->fetchAll();

    return $pets;
}

function get_pet($id)
{
    $pdo = get_connection();
    $query = 'SELECT * FROM pet WHERE id = '.$id;
    $result = $pdo->query($query);

    return $result->fetch();
}

function save_pets($petsToSave) {
    $json = json_encode($petsToSave, JSON_PRETTY_PRINT);
    file_put_contents('data/pets.json', $json);
};
