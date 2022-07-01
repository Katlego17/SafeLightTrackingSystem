<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ProductsTableComponent extends Component
{
    use WithPagination;

    public $sortBy = "DateAdded";

    public $sortDirection = 'asc';
    public $perPage = 10;
    public $search = '';


    public function render()
    {
        $items = Product::query()
        ->where('SerialNumber','like','%'.$this->search.'%')
        ->Orwhere('ElectronicBoardID','like','%'.$this->search.'%')
        ->Orwhere('BatteryID','like','%'.$this->search.'%')
        ->Orwhere('DateAdded','like','%'.$this->search.'%')
        ->Orwhere('DatePreCasted','like','%'.$this->search.'%')
        ->Orwhere('DateCasted','like','%'.$this->search.'%')
        ->Orwhere('DatePostCasted','like','%'.$this->search.'%')
        ->Orwhere('DateAssembled','like','%'.$this->search.'%')
        ->Orwhere('DateStored','like','%'.$this->search.'%')
        ->Orwhere('DateSold','like','%'.$this->search.'%')
        ->Orwhere('DateCommissioned','like','%'.$this->search.'%')
        ->Orwhere('DateFailed','like','%'.$this->search.'%')
        ->Orwhere('EngineerName','like','%'.$this->search.'%')
        ->Orwhere('Comments','like','%'.$this->search.'%')
        ->Orwhere('DateSentToEngineer','like','%'.$this->search.'%')
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);

        return view('livewire.products-table-component',[
            'items'=> $items
        ]);
    }

    public function sortBy($field)
    {
        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }

        return $this->sortBy = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
