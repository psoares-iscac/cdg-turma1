<?php
$ficheiroDB = __DIR__ . "/aragem.sqlite";

if(!file_exists($ficheiroDB)){
    throw new RuntimeException("Base de dados não criada");
}

$bd = new PDO("sqlite:" . $ficheiroDB);
$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

