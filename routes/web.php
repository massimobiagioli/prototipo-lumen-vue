<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    
    // TODO: glob files in static/js e static/css    
    
    $styles = [
        'style1'
    ];
    
    $scripts = [
        'script1',
        'script2'
    ];
    
    $data = [
        'styles' => $styles,
        'scripts' => $scripts
    ];
    
    return view('index', $data);
});
