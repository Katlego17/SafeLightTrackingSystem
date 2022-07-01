<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\ProductController;
use App\Models\Product;

class PreCastPhase extends Component
{
    public function render()
    {
        //rendering all products that are in the added phase
        $precastedLights = Product::where('CurrentPhase','=','precasted')->get();

        return view('livewire.pre-cast-phase',[
            'precastedLights'=>$precastedLights
        ]);
    }
}
