<?php

use Source\Models\UserOne;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.03 - Gestão de dependências");

/*
 * [ get composer ]
 */
fullStackPHPClassSession("get composer", __LINE__);

require __DIR__ . "/../vendor/autoload.php";

var_dump(get_defined_constants(true)['user']);

$user = (new UserOne())->findById(1);
var_dump($user);

