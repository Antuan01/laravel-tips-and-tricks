<?php

namespace App\Utils;
use Illuminate\Support\Facades\Http;

class TelegramApi
{
    protected $url;

    public function __construct($token)
    {
        $this->url = 'https://api.telegram.org/bot' . $token;
    }
 //To make requests, you may use the get, post, put, patch, and delete methods.
 
 //$response->body() : string;
 //$response->json() : array|mixed;
 //$response->status() : int;
 //$response->ok() : bool;
 //$response->successful() : bool;
 //$response->failed() : bool;
 //$response->serverError() : bool;
 //$response->clientError() : bool;
 //$response->header($header) : string;
 //$response->headers() : array;
 
     public function sendMessage($tid, $message)
     {
         $response = Http::post($this->url . 'sendMessage', [
                 'chat_id' => $tid,
                 'text' => $message,
                 'parse_mode' => 'HTML',
         ]);
 
         if($response->failed()){
             \Log::info($request->body());
         }
     } 
 }
    