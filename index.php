<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/sobre", "Web:about");
$route->get("/portifolio", "Web:portfolio");
$route->get("/servicos", "Web:services");
$route->get("/equipe", "Web:team");
$route->get("/localizacao","Web:location");
$route->get("/blog","Web:blog");
$route->get("/contato","Web:contact");
$route->get("/perfil","Web:profile");
$route->get("/faq","Web:faq");
$route->get("/livros","Web:books");

$route->group("/app");
$route->get("/", "App:home");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
