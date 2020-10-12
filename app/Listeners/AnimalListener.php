<?php

namespace App\Listeners;

use App\Events\AnimalNew;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;

class AnimalListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(AnimalNew $event)
    {
        $url = 'https://api.telegram.org/bot923097738:AAFr4e2s2UsR-mWrDI9rVmHCjegwUCTMGzI/sendMessage';

        $options = [            
                'chat_id' => '229728941',
                'text' => 'hola bebe, animal request',
        ];

        $response = Http::asForm()->post($url, $options);

    }
}
