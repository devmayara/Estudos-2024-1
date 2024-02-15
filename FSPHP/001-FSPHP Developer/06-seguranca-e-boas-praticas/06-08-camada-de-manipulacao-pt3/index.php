<?php

use Source\Core\Message;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("06.08 - Camada de manipulação pt3");

require __DIR__ . "/../source/autoload.php";

/*
 * [ validate helpers ] Funções para sintetizar rotinas de validação
 */
fullStackPHPClassSession("validate", __LINE__);

$message = new Message();

$email = "dev@mayara.com";
if (!is_email($email)) {
    echo $message->error("Email");
} else {
    echo $message->success("Email");
}

$password = "123456789123456789123456789";
if (!is_password($password)) {
    echo $message->error("Senha");
} else {
    echo $message->success("Senha");
}


/*
 * [ navigation helpers ] Funções para sintetizar rotinas de navegação
 */
fullStackPHPClassSession("navigation", __LINE__);

var_dump([
    url("/blog/titulo-do-artigo"),
    url("blog/titulo-do-artigo")
]);

if (empty($_GET)) {
//    redirect("https://www.upinside.com.br/");
    redirect("?f=true");
}


/*
 * [ class triggers ] São gatilhos globais para criação de objetos
 */
fullStackPHPClassSession("triggers", __LINE__);

var_dump(user()->load(1));

echo message()->error("Um erro#");
echo message()->warning("Um aviso#");

session()->set("user", user()->load(2));
var_dump(session()->all());

