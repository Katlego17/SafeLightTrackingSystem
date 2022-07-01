<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\ProductController;
use App\Models\Product;

class SoldPhase extends Component
{
    public function render()
    {
        //rendering all products that are in the added phase
        $soldLights = Product::where('CurrentPhase','=','sold')->get();

        return view('livewire.sold-phase',[
            'soldLights'=>$soldLights
        ]);
    }
}
