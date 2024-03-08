<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";

/**
 * BOOTSTRAP
 */
use Source\Core\Session;
use CoffeeCode\Router\Router;

$session = new Session();
$router = new Router(url(), ":");

/*
 * WEB ROUTES
 */
$router->namespace("Source\App");
$router->get("/", "Web:home");
$router->get("/sobre", "Web:about");

// blog
$router->get("/blog", "Web:blog");
$router->get("/blog/page/{page}", "Web:blog");
$router->get("/blog/{postName}", "Web:blogPost");

// auth
$router->get("/entrar", "Web:login");
$router->get("/recuperar", "Web:forget");
$router->get("/cadastrar", "Web:register");

// optin
$router->get("/confirma", "Web:confirm");
$router->get("/obrigado", "Web:success");

// services
$router->get("/termos", "Web:terms");

/*
 * ERROR ROUTES
 */
$router->namespace("Source\App")->group("/ooops");
$router->get("/{errcode}", "Web:error");

/*
 * ROUTE
 */
$router->dispatch();

/*
 * ERROR REDIRECT
 */
if ($router->error()) {
    $router->redirect("/ooops/{$router->error()}");
}

ob_end_flush();
