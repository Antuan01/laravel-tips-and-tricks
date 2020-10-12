<?php

namespace App\Observers;

use App\Models\Animal;
use App\Jobs\TelegramMessageJob;

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
        TelegramMessageJob::dispatch()->delay(now()->addMinutes(1));

        // dispatch(new TelegramMessageJob())->delay(now()->addMinutes(1));
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
