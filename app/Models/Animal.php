<?php

namespace App\Models;

use App\Events\AnimalNew;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age'];

    //scoped 
    public function scopeOld($query)
    {
        return $query->where('age', '>', 5);
    }

    //events
    //Holy ****
    // protected $dispatchesEvents = [
    //     'saved' => AnimalNew::class,
    // ];

}
