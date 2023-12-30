<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProxyController;





// routes/web.php
// use App\Http\Controllers\ProxyController;

Route::get('/', function () {
    return view('proxy');
});

Route::post('/', [ProxyController::class, 'handleProxyRequest']);




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// Route::post('/proxy', [ProxyController::class, 'handleProxy']);
// Route::get('/proxy', [ProxyController::class, 'formProxy']);

// routes/web.php
// Route::post('/proxy', 'ProxyController@handleProxyRequest');


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::post('/', function (Request $request) {
//     // Access request data (URL, headers, body)
//     $request_url = $request->input('request_url');
//     $headers = $request->headers->all();
//     $body = $request->getContent();

//     // Handle API request (use Guzzle or any HTTP client library)
//     $client = new GuzzleHttp\Client();
//     $response = $client->request('POST', $request_url, [
//         'headers' => $headers,
//         'body' => $body,
//     ]);

//     // Return response data to client
//     return $response->getBody()->getContents();
// });
