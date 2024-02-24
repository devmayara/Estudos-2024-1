<?php

use Source\Core\ConnectOne;
use Source\Models\UserOne;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("06.03 - Configurações do projeto");

require __DIR__ . "/../source/autoload.php";

/*
 * [ configurações ] Um acesso global a tudo que pode ser configurado no projeto.
 */
fullStackPHPClassSession("configurações", __LINE__);

var_dump(get_defined_constants(true)['user']);


/*
 * [ refatoramento ] Iniciando o desenvolvimento de uma arquitetura de projeto.
 */
fullStackPHPClassSession("refatoramento", __LINE__);

$read = ConnectOne::getInstance()->prepare("SELECT * FROM users LIMIT 1,1");
$read->execute();
var_dump($read->fetchAll());

$user = (new UserOne())->load(1);
var_dump($user);

