<?php

use Source\Models\User;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("06.13 - Verificando password com hash");

require __DIR__ . "/../source/autoload.php";

/*
 * [ hash ]
 */
fullStackPHPClassSession("hash", __LINE__);

$user = (new user())->findById(1);
$user->password = 123456789;
$user->save();

var_dump(
    $user,
    password_get_info(123456789),
    password_get_info(passwd(123456789))
);

