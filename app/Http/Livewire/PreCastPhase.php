<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\ProductController;
use App\Models\Product;

class PreCastPhase extends Component
{
    //Modal pop up
    public $show;
    public $selectedProducts = [];
    protected $listeners = ['showModal' => 'showModal'];

    public function mount() {
        #$this->selectedProducts = $selectedProducts;
        $this->show = false;
    }

    public function showModal() {
        $selectedProducts=$this->selectedProducts;

        $this->doShow();
    }

    public function doShow() {
        $this->show = true;
    }

    public function doClose() {
        $this->show = false;
    }
    //PASSING A PRODUCT

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
