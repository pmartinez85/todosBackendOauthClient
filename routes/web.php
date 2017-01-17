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

Route::group(['middleware' => 'auth'], function () {
//          Route::get('/link1', function ()    {
//             Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    Route::get('flexboxlayout2', 'Flexboxlayout2Controller@index')->name('flexboxlayout2');

    Route::get('flexboxlayout', 'FlexboxlayoutController@index')->name('flexboxlayout');

    Route::get('csstables', 'CsstablesController@index')->name('csstables');

    Route::get('float', 'FloatController@index')->name('float');

    Route::get('box', 'BoxController@index')->name('box');

    Route::get('tasks', 'TasksController@index')->name('tasks');

});

Route::get('/redirect', function () {


    $query = http_build_query([
        //dades de l'aplicació Client
        'client_id' => '2',
        'redirect_uri' => 'http://oauthclient.dev:8081/auth/callback',
        'response_type' => 'code',
        'scope' => '',  //scope son els permisos que li donem al usuari...de moment va buit
    ]);
            //Aqui va la URL del nostre servidor(TodosBackend)
    return redirect('http://localhost:8082/oauth/authorize?'.$query);
});

Route::get('/auth/callback', function () {
    $http = new GuzzleHttp\Client;

    $response = $http->post('http://localhost:8082/oauth/token', [
        'form_params' => [
            'grant_type' => 'authorization_code',
            'client_id' => '2',
            'client_secret' => 'JkjJBmF8bHDugbNCLl0qJRI9mK7yTwX6rs40lMnO',
            'redirect_uri' => 'http://oauthclient.dev:8081/auth/callback',
            'code' => Request::input('code'),
        ],
    ]);

    $json = json_decode((string) $response->getBody(), true);
    $access_token = $json["access_token"];

    //TODO guardar access_token a base de dades
    $response2 = $http->get('http://localhost:8082/api/v1/task', [
        'headers' => [
            'X-Requested-With' => 'XMLHttpRequest',
            'Authorization' => 'Bearer ' . $access_token
        ],
    ]);
    $json2 = json_decode((string) $response2->getBody(), true);
    dd($json2);
});