<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('book', function () {
    $client = \Softonic\GraphQL\ClientBuilder::build('http://127.0.0.1:8000/graphql');

    $books = '
        query {
            books {
                id
                title
                author
            }
        }
    ';

    $variables = [
        'idFoo' => 'foo',
        'idBar' => 'bar',
    ];
    $response = $client->query($books, $variables);

    dd($response);
});
