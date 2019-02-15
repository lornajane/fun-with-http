<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Slim\App();

// receive and return some data here
$app->map(['GET', 'POST'], '/check', function ($request, $response, $args) {
    // query parameters
    $get_params = $request->getQueryParams();
    // body params, using Content-Type to figure out if it's form or JSON
    $post_params = $request->getParsedBody();

    // accept header sets response format
    $accept = $request->getHeader('Accept')[0];

    // build the array of parameters and sources
    $all_params = [];

    if ($get_params) {
        $all_params['GET'] = $get_params;
    }

    if ($post_params) {
        $all_params['POST'] = $post_params;
    }

    switch ($accept) {
        case 'application/json':
            return $response->withJson($all_params);
            break;
        default: // plain text
            return $response->getBody()->write(print_r($all_params, true));
    }

});

$app->get('/', function ($request, $response, $args) {
    return $response->getBody()->write("Hello World");
});

$app->get('/talks', function ($request, $response, $args) {
    $client = new \GuzzleHttp\Client();

    $response = $client->request("GET", "http://api.joind.in");
    error_log($response->getBody());

    return $response->getBody()->write("OK");
});

$app->run();
