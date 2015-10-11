<?php

$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig');
})->bind('homepage');

$app->get('/entries', function () use ($app) {
    return $app['twig']->render('entries.html.twig');
})->bind('entries');

$app->get('/heat-sheets', function () use ($app) {
    return $app['twig']->render('heatSheets.html.twig');
})->bind('heatSheets');

$app->get('/records', function () use ($app) {
    return $app['twig']->render('records.html.twig');
})->bind('records');

$app->get('/payment', function () use ($app) {
    return $app['twig']->render('payment.html.twig');
})->bind('payment');

$app->get('/past-results', function () use ($app) {
    return $app['twig']->render('entries.html.twig');
})->bind('pastResults');

$app->get('/rules', function () use ($app) {
    return $app['twig']->render('entries.html.twig');
})->bind('rules');

$app->get('/event-order', function () use ($app) {
    return $app['twig']->render('eventOrder.html.twig');
})->bind('eventOrder');

/**
 * To add a result year, modify this array.
 * Make sure to modify the twig array as well.
 */
for ($i = 8; $i <= 14; $i++) {
    if ($i < 10) {
        $year = '200' . $i;
    } else {
        $year = '20' . $i;
    }

    $app->get('/results/' . $year, function () use ($app, $year) {
        return $app['twig']->render('results/results'.$year.'.html.twig');
    })->bind('results'.$year);
}