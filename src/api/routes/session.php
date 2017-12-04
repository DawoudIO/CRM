<?php
/* contributor Philippe Logel */

// Person APIs

$app->group('/session', function () {
    $this->get('/lock', function ($request, $response, $args) {
    	$_SESSION['iLoginType'] = "Lock";
        return $response->withStatus(200)->withJson(['status' => "success"]);
    });
});
