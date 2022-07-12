<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class FailedProductInfoFiller extends Component
{
    public $selectedProducts=[];
    public $show;

    protected $listeners = ['showModal' => 'showModal'];

    public function mount() {
        $this->selectedProducts = 7;
        $this->show = false;
    }

    public function showModal() {
        $this->selectedProducts = 5;

        $this->doShow();
    }

    public function doShow() {
        $this->show = true;
    }

    public function doClose() {
        $this->show = false;
    }

    public function doSomething() {
        // Do Something With Your Modal
        if (!empty($this->selectedProducts)) {
            Product::whereIn('id', $this->selectedProducts)->update(['CurrentPhase' => 'failed']);
            $this->selectedProducts = [];
        }
        // Close Modal After Logic
        $this->doClose();
    }

    public function render()
    {
        return view('livewire.failed-product-info-filler');
    }
}
