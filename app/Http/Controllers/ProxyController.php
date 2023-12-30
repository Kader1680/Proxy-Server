<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ProxyController extends Controller
{


    public function handleProxyRequest(Request $request)
    {
        // Extract request details from the input
        $url = $request->input('request_url');
        $headers = $request->input('headers');
        $body = $request->input('body');

        // Forward the request to the API
        $client = new Client();
        $response = $client->request($request->method(), $url, [
            'headers' => json_decode($headers, true),
            'body' => $body,
        ]);

        // Get API response and send it back to the client
        return response($response->getBody(), $response->getStatusCode())
            ->header('Content-Type', $response->getHeaderLine('Content-Type'));
    }

}
