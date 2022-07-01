<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\ProductController;
use App\Models\Product;

class CastPhase extends Component
{
    public function render()
    {
        //rendering all products that are in the added phase
        $castedLights = Product::where('CurrentPhase','=','casted')->get();


        return view('livewire.cast-phase',[
            'castedLights'=>$castedLights
        ]);
    }
}
