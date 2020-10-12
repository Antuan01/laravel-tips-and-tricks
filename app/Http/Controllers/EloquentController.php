<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class EloquentController extends Controller
{
    public function example()
    {
        $all = Product::all();

        $all = Product::where()
            ->orderBy()
            ->groupBy()
            //and so on 
            ->get();

        $fw = Product::firstWhere('active', 1);

        $nofirst_then_callback = Product::where('price_d', '>', 100)
            ->firstOr(['id', 'status'], function () {
            // ...
        });


        $fof = Product::findOrFail(1);

        $model = Product::where('legs', '>', 100)->firstOrFail();

        $product = Product::firstOrCreate(); // Creates if Not

        $product = Product::firstOrNew(); // Instantiates if Not

        $product = Product::updateOrCreate(); // plz

        $product = Product::find(23)->delete();

        $product = Product::destroy(23);
    }    

    public function collectionExample()
    {
        /*
        The cursor method allows you to iterate through your database
        records using a cursor, which will only execute a single query.
        When processing large amounts of data, the cursor method may 
        be used to greatly reduce your memory usage:*/

        foreach (Flight::where('foo', 'bar')->cursor() as $flight) {
            //
        }
    }

}
