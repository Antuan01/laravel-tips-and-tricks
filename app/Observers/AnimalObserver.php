<?php

namespace App\Observers;

use App\Models\Animal;
use Illuminate\Support\Facades\Http;

class AnimalObserver
{
    /**
     * Handle the animal "created" event.
     *
     * @param  \App\Models\Animal  $animal
     * @return void
     */
    public function created(Animal $animal)
    {
        // $response = Http::get('http://test.com');

        $url = 'https://api.telegram.org/bot923097738:AAFr4e2s2UsR-mWrDI9rVmHCjegwUCTMGzI/sendPhoto';

        //918926707

        $options = [            
                'chat_id' => '229728941',
                'caption' => 'Que hermosa la naturaleza',
                'photo' => 'https://antuan-test.s3.amazonaws.com/Selection_691.png',
        ];

        $response = Http::asForm()->post($url, $options);

        \Log::info($response->ok() ? "Todo fino" : "ay papa");
    }

    /**
     * Handle the animal "updated" event.
     *
     * @param  \App\Models\Animal  $animal
     * @return void
     */
    public function updated(Animal $animal)
    {
        //
    }

    /**
     * Handle the animal "deleted" event.
     *
     * @param  \App\Models\Animal  $animal
     * @return void
     */
    public function deleted(Animal $animal)
    {
        //
    }

    /**
     * Handle the animal "restored" event.
     *
     * @param  \App\Models\Animal  $animal
     * @return void
     */
    public function restored(Animal $animal)
    {
        //
    }

    /**
     * Handle the animal "force deleted" event.
     *
     * @param  \App\Models\Animal  $animal
     * @return void
     */
    public function forceDeleted(Animal $animal)
    {
        //
    }
}
