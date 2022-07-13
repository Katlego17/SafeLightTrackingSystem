<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\ProductController;
use App\Models\Product;

class AddedPhase extends Component
{
    //selecting all
    public $selectAll = false;
    public function updatedSelectAll($value)
    {
        if ($value)
        {
            $this->selectedProducts = Product::pluck('id');
        }
        else
        {
            $this->selectedProducts = [];
        }

    }


    //PASSING A PRODUCT
    public $selectedProducts = [];

    public function changePhase()
    {
        if (!empty($this->selectedProducts)) {
            $date = date('d/m/Y');//$date = date('Y-m-d H:i:s');
            Product::whereIn('id', $this->selectedProducts)->update(['CurrentPhase' => 'precasted','DatePreCasted' => $date]);
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
        $addedLights = Product::where('CurrentPhase','=','added')->paginate(10);

        return view('livewire.added-phase',[
            'addedLights'=>$addedLights
        ]);
    }
}
