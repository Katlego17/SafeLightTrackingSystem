<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\ProductController;
use App\Models\Product;

class CastPhase extends Component
{
    //PASSING A PRODUCT
    public $selectedProducts = [];
    public function changePhase()
    {
        if (!empty($this->selectedProducts)) {
            Product::whereIn('id', $this->selectedProducts)->update(['CurrentPhase' => 'postcasted']);
            $this->selectedProducts = [];
        }
    }

    //FAILING A PRODUCT
    public function FailPhase()
    {
        if (!empty($this->selectedProducts)) {
            Product::whereIn('id', $this->selectedProducts)->update(['CurrentPhase' => 'failed']);
            $this->selectedProducts = [];
        }
    }

    public function render()
    {
        //rendering all products that are in the added phase
        $castedLights = Product::where('CurrentPhase','=','casted')->get();


        return view('livewire.cast-phase',[
            'castedLights'=>$castedLights
        ]);
    }
}
