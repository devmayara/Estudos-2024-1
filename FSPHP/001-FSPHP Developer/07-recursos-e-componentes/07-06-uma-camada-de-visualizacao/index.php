<?php

use Source\Core\View;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.06 - Uma camada de visualização");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ plates ] https://packagist.org/packages/league/plates
 */
fullStackPHPClassSession("plates", __LINE__);

$plates = new League\Plates\Engine( __DIR__ . "/../assets/views", "php");
var_dump(get_class_methods($plates));

//$plates->addFolder("test", __DIR__ . "/../assets/views/test", true);
//
//if (empty($_GET["id"])) {
//    $data = [
//        "title" => "Usuários do Sistema",
//        "list" => (new \Source\Models\User())->all(5)
//    ];
//    $plates->addData($data);
//
//    echo $plates->render("test::list", $data);
//} else {
//    $data = [
//        "title" => "Editar Usuário",
//        "user" => (new \Source\Models\User())->findById($_GET["id"])
//    ];
//    $plates->addData($data);
//
//    echo $plates->render("test::user", $data);
//}


/*
 * [ synthesize ] Sintetizando rotina e abstraíndo o recurso (componente)
 */
fullStackPHPClassSession("synthesize", __LINE__);

$view = new View();
$view->path("test", __DIR__ . "/../assets/views/test");

if (empty($_GET["id"])) {
    echo $view->render("test::list", [
        "title" => "Usuários do Sistema",
        "list" => (new \Source\Models\UserOne())->all(5)
    ]);
} else {
    echo $view->render("test::user", [
        "title" => "Editar Usuário",
        "user" => (new \Source\Models\UserOne())->findById($_GET["id"])
    ]);
}


