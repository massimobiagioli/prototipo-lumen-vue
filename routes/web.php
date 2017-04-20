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
    
    // Ricava elenco scripts
    $scripts = [];
    $fileList = glob(base_path('public') . '/static/js/*.js');
    foreach ($fileList as $file) {
        $type = explode('.', basename($file))[0];
        $scripts[$type] = '/static/js/' . basename($file);
    }
    
    // Ricava elenco css
    $styles = array_map(function($style) {
        return '/static/css/' . basename($style);
    }, glob(base_path('public') . '/static/css/*.css'));
    
    // Effettua render della view
    return view('index', [
        'styles' => $styles,
        'scripts' => $scripts
    ]);
});
