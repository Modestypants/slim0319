<?php

//Autoloader
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;

require_once dirname(__DIR__) . '/vendor/autoload.php';

// creation de l'application
$app = new App();

// Creation d'une route
$app->get("/hello", function (ServerRequestInterface $request, ResponseInterface $response, ?array $arg) {

    // on retourne une reponse
    return $response->getBody()->write('<h1>Bonjour</h1>');
});

// création et renvoi de la reponse au navigateur
$app->run();
