<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\ProductController;
use App\Models\Product;

class AddedPhase extends Component
{


    public function render()
    {

        //rendering all products that are in the added phase
        $addedLights = Product::where('CurrentPhase','=','added')->get();

        return view('livewire.added-phase',[
            'addedLights'=>$addedLights
        ]);
    }
}
