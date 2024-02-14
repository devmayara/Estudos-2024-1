<?php

use Source\Models\UserModel;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.11 - Carregando e atualizando");

require __DIR__ . "/../source/autoload.php";

/*
 * [ save update ] Salvar o usuário ativo (Active Record)
 */
fullStackPHPClassSession("save update", __LINE__);

$model = new UserModel();

$user = $model->load(4);

if ($user != $model->load(4)) {
    $user->save();
    echo "<p class='trigger accept'>Atualizado!</p>";
} else {
    echo "<p class='trigger warning'>Já atualizado!</p>";
}

var_dump($user);

