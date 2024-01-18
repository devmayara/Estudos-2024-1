<?php

use Source\Intepretation\User;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.05 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";

/*
 * [ construct ] Executado automaticamente por meio do operador new
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__construct", __LINE__);

//$user = new User();
$user = new User(
    "Mayara",
    "Silva",
    "devmayara11@gmail.com"
);

var_dump($user);


/*
 * [ clone ] Executado automaticamente quando um novo objeto é criado a partir do operador clone.
 * http://php.net/manual/pt_BR/language.oop5.cloning.php
 */
fullStackPHPClassSession("__clone", __LINE__);

$mayara = $user;

$robson = $mayara;
$robson->setFirstName("Robson");
$robson->setLastName("Leite");

$mayara->setFirstName("Mayara");
$mayara->setLastName("Silva");

$robson = clone $mayara;
$robson->setFirstName("Robson");
$robson->setLastName("Leite");

var_dump(
    $mayara,
    $robson
);


/*
 * [ destruct ] Executado automaticamente quando o objeto é finalizado
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__destruct", __LINE__);