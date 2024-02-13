<?php

use Source\Models\UserModel;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.09 - Métodos de busca e leitura");

require __DIR__ . "/../source/autoload.php";

/*
 * [ load ] Por primary key (id)
 */
fullStackPHPClassSession("load", __LINE__);

$model = new UserModel();

$user = $model->load(1);
var_dump($user, "{$user->first_name} {$user->last_name}");


/*
 * [ find ] Por indexes da tabela (email)
 */
fullStackPHPClassSession("find", __LINE__);

$user = $model->find("joão32@email.com.br");
var_dump($user, "{$user->first_name} {$user->last_name}");


/*
 * [ all ] Retorna diversos registros
 */
fullStackPHPClassSession("all", __LINE__);

$all = $model->all(limit: 5);
/**
 * @var UserModel $user
 */
foreach ($all as $user) {
    var_dump($user, "{$user->first_name} {$user->last_name}");
}

