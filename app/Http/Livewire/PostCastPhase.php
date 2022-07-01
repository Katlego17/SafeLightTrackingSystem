<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\ProductController;
use App\Models\Product;

class PostCastPhase extends Component
{
    public function render()
    {
        //rendering all products that are in the added phase
        $postcastedLights = Product::where('CurrentPhase','=','postcasted')->get();

        return view('livewire.post-cast-phase',[
            'postcastedLights'=>$postcastedLights
        ]);
    }
}
