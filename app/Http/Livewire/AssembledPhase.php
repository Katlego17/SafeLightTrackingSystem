<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\ProductController;
use App\Models\Product;

class AssembledPhase extends Component
{
    //PASSING A PRODUCT
    public $selectedProducts = [];
    public function changePhase()
    {
        if (!empty($this->selectedProducts)) {
            Product::whereIn('id', $this->selectedProducts)->update(['CurrentPhase' => 'stored']);
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
        //rendering all products that are in the assembled phase
        $assembledLights = Product::where('CurrentPhase','=','assembled')->get();

        return view('livewire.assembled-phase',[
            'assembledLights'=>$assembledLights
        ]);
    }
}
