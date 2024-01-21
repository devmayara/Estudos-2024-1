<?php

use Source\Members\Config;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.09 - Membros de uma classe");

require __DIR__ . "/source/autoload.php";

/*
 * [ constantes ] http://php.net/manual/pt_BR/language.oop5.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

$config = new Config();
echo "<p>". $config::COMPANY ."</p>";

var_dump(
    Config::COMPANY
//    Config::DOMAIN,
//    Config::SECTOR
);

$reflection = new Reflection(Config::class);

//var_dump($config, $reflection->getConstants());


/*
 * [ propriedades ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("propriedades", __LINE__);

Config::$company = "UpInside";
Config::$domain = "upinside.com.br";
Config::$sector = "Educação";

$config::$sector = "tecnologia";

//var_dump($config, $reflection->getMethods(), $reflection->getDefaultProperties());


/*
 * [ métodos ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("métodos", __LINE__);

$config::setConfig("", "", "");
Config::setConfig("UpInside", "upinside.com.br", "Educação");

var_dump($config, $reflection->getMethods(), $reflection->getDefaultProperties());


/*
 * [ exemplo ] Uma classe trigger
 */
fullStackPHPClassSession("exemplo", __LINE__);



