<?php
/** @var \App\Core\Application $app */

$app->router->get('/api/status', function() use ($app) {
    return $app->response->json(['status' => 'online', 'version' => '0.2']);
});
