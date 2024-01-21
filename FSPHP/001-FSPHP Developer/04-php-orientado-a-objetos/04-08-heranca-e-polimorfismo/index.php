<?php

use Source\Inheritance\Address;
use Source\Inheritance\Event\Event;
use Source\Inheritance\Event\EventLive;
use Source\Inheritance\Event\EventOnline;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.08 - Herança e polimorfismo");

require __DIR__ . "/source/autoload.php";

/*
 * [ classe pai ] Uma classe que define o modelo base da estrutura da herança
 * http://php.net/manual/pt_BR/language.oop5.inheritance.php
 */
fullStackPHPClassSession("classe pai", __LINE__);

$event = new Event(
    "Workshop FSPHP",
    new DateTime("2024-05-20 16:00"),
    "2997",
    "4"
);

var_dump($event);

$event->register("Mayara silva", "devmayara11@gmail.com");
$event->register("Robson leite", "cursos@upinside.com");


/*
 * [ classe filha ] Uma classe que herda a classe pai e especializa seuas rotinas
 */
fullStackPHPClassSession("classe filha", __LINE__);

$address = new Address(
    "Rua dos eventos",
    "1245"
);
$event = new EventLive(
    "Workshop FSPHP",
    new DateTime("2024-05-20 16:00"),
    "2997",
    "4",
    $address
);

var_dump($event);

$event->register("Mayara silva", "devmayara11@gmail.com");
$event->register("Robson leite", "cursos@upinside.com");


/*
 * [ polimorfismo ] Uma classe filha que tem métodos iguais (mesmo nome e argumentos) a class
 * pai, mas altera o comportamento desses métodos para se especializar
 */
fullStackPHPClassSession("polimorfismo", __LINE__);

$event = new EventOnline(
    "Workshop FSPHP",
    new DateTime("2024-05-20 16:00"),
    "197",
    "http://upinside.com.br/aovivo",
);

var_dump($event);

$event->register("Mayara silva", "devmayara11@gmail.com");
$event->register("Robson leite", "cursos@upinside.com");

