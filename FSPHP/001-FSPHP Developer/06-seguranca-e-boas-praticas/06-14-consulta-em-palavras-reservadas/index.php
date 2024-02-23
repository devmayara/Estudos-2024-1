<?php

use Source\Models\UserOne;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("06.14 - Consulta em palavras reservadas");

require __DIR__ . "/../source/autoload.php";

/*
 * [ query params ]
 */
fullStackPHPClassSession("query params", __LINE__);

$user = (new UserOne())->findById(1);
$user->document = 22.22;
$user->save();
var_dump($user);

$user = (new UserOne())->find("document = :d", "d=22.22");
var_dump($user);

$list = (new UserOne())->all(2);
var_dump($list);

