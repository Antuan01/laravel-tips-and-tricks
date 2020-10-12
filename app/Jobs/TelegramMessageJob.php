<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;


class TelegramMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $url = 'https://api.telegram.org/bot923097738:AAFr4e2s2UsR-mWrDI9rVmHCjegwUCTMGzI/sendPhoto';

        //918926707 samuels tg_id

        $options = [            
                'chat_id' => '229728941',
                'caption' => 'Que hermosa la naturaleza',
                'photo' => 'https://antuan-test.s3.amazonaws.com/Selection_691.png',
        ];

        $response = Http::asForm()->post($url, $options);

        \Log::info($response->ok() ? "Todo fino" : "ay papa");
    }
}
