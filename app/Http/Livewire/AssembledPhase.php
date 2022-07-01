<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\ProductController;
use App\Models\Product;

class AssembledPhase extends Component
{
    public function render()
    {
        //rendering all products that are in the assembled phase
        $assembledLights = Product::where('CurrentPhase','=','assembled')->get();

        return view('livewire.assembled-phase',[
            'assembledLights'=>$assembledLights
        ]);
    }
}
