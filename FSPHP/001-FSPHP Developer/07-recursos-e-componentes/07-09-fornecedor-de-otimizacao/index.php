<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.09 - Fornecedor de otimização");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ optimizer ] https://packagist.org/packages/coffeecode/optimizer
 */
fullStackPHPClassSession("optimizer", __LINE__);

$seo = new \Source\Support\Seo();
$seo->render(
    "Full Stack PHP",
    "A melhor e mais completa formação php do Brasil",
    "https://www.upinside.com.br/fsphp",
    "https://www.upinside.com.br/fsphp/images/cover.png"
);

var_dump($seo->optimizer()->debug(), $seo->optimizer()->data());

