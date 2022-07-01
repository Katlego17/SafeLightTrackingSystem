<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\ProductController;
use App\Models\Product;

class StoredPhase extends Component
{
    public function render()
    {
        //rendering all products that are in the added phase
        $storedLights = Product::where('CurrentPhase','=','stored')->get();

        return view('livewire.stored-phase',[
            'storedLights'=>$storedLights
        ]);
    }
}
