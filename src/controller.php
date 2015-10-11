<?php
$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig');
})->bind('homepage');

$app->get('wintertrackfest/', function () use ($app) {
    return $app['twig']->render('wintertrackfest/index.html.twig');
})->bind('wintertrackfest_homepage');

$app->get('wintertrackfest/entries', function () use ($app) {
    return $app['twig']->render('wintertrackfest/entries.html.twig');
})->bind('entries');

$app->get('wintertrackfest/heat-sheets', function () use ($app) {
    return $app['twig']->render('wintertrackfest/heatSheets.html.twig');
})->bind('heatSheets');

$app->get('wintertrackfest/records', function () use ($app) {
    return $app['twig']->render('wintertrackfest/records.html.twig');
})->bind('records');

$app->get('wintertrackfest/payment', function () use ($app) {
    return $app['twig']->render('wintertrackfest/payment.html.twig');
})->bind('payment');

$app->get('wintertrackfest/past-results', function () use ($app) {
    return $app['twig']->render('wintertrackfest/entries.html.twig');
})->bind('pastResults');

$app->get('wintertrackfest/rules', function () use ($app) {
    return $app['twig']->render('wintertrackfest/rules.html.twig');
})->bind('rules');

$app->get('wintertrackfest/event-order', function () use ($app) {
    return $app['twig']->render('wintertrackfest/eventOrder.html.twig');
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

    $app->get('wintertrackfest/results/' . $year, function () use ($app, $year) {
        return $app['twig']->render('wintertrackfest/results/results'.$year.'.html.twig');
    })->bind('results'.$year);
}