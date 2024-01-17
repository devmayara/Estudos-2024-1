<?php

use classes\App\Template as AppTemplate;
use classes\Web\Template as WebTemplate;
use source\Qualifield\User;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__ . "/classes/App/Template.php";
require __DIR__ . "/classes/Web/Template.php";

$appTemplate = new AppTemplate();
$webTemplate = new WebTemplate();

var_dump(
    $appTemplate,
    $webTemplate
);


/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__ . "/source/Qualifield/User.php";

$user = new User();

//$user->firstName = "Mayara";
//$user->lestName = "Silva";

//$user->setfirstName("Mayara");
//$user->setlestName("Silva");

var_dump(
    $user,
    get_class_methods($user)
);

echo "<p>O email de {$user->getFirstName()} é {$user->getEmail()}</p>";


/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$mayara = $user->setUser(
    "Mayara",
    "Silva",
    "devmayara11@gmail.com"
);

if (!$mayara) {
    echo "<p class='trigger error'>{$user->getError()}</p>";
}

var_dump($user);

