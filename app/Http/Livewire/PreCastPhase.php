<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\ProductController;
use App\Models\Product;

class PreCastPhase extends Component
{
    //PASSING A PRODUCT
    public $selectedProducts = [];
    public function changePhase()
    {
        if (!empty($this->selectedProducts)) {
            Product::whereIn('id', $this->selectedProducts)->update(['CurrentPhase' => 'casted']);
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
        $precastedLights = Product::where('CurrentPhase','=','precasted')->get();

        return view('livewire.pre-cast-phase',[
            'precastedLights'=>$precastedLights
        ]);
    }
}
