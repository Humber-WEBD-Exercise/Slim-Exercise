<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    $args['send']= false;

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->post('/send', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    $args['send']= true;
    $args['obj']= $request->getParsedBody()['user'];


    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
