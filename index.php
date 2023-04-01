<?php

// $db = new SQLite3('site.db');
$db = new PDO("sqlite:site.db", "", "", [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);
// $db->exec('CREATE TABLE users(nome VARCHAR(15), sobrenome VARCHAR(20))');
// $db->exec('INSERT INTO users(nome, sobrenome) VALUES("Rodrigo", "Henrique")');
// $db->exec("SELECT * FROM users");

// $query = $db->query("SELECT rowid, * FROM users");
// $query = $db->prepare("INSERT INTO users(nome, sobrenome) VALUES(:NOME, :SOBRENOME)");
$prepare = $db->prepare("SELECT rowid, * FROM users WHERE rowid = :ID");

/* $users = $query->execute([
    ":NOME"       => "Gomes",
    ":SOBRENOME"  => "Guimarães"
]); */

$prepare->execute([":ID" => 3]);
var_dump($prepare->fetchObject());

/* foreach($users as $user){
    // O comando abaixo só é possível ser relizado graças a consiguração da linha 4.
    echo $user->sobrenome;
} */
// print_r($users);

