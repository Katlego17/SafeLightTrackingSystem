<?php

namespace App\Http\Livewire;

use App\Http\Controllers\ProductController;
use App\Models\Product;

use Livewire\Component;

class CommissionedPhase extends Component
{
    public function render()
    {
        //rendering all products that are in the added phase
        $commissionedLights = Product::where('CurrentPhase','=','commissioned')->paginate(10);

        return view('livewire.commissioned-phase',[
            'commissionedLights'=>$commissionedLights
        ]);
    }
}
