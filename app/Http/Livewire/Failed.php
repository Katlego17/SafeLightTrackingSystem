<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class Failed extends Component
{
    use WithPagination;

    public $sortBy = "DateAdded";

    public $sortDirection = 'asc';
    public $perPage = 10;
    public $search = '';

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

    public function render()
    {
        $items = Product::query()
        ->where('CurrentPhase','=','failed')
        ->Where(function($query) {
            $query->where('SerialNumber','like','%'.$this->search.'%');
            $query->where('ElectronicBoardID','like','%'.$this->search.'%');
            $query->where('BatteryID','like','%'.$this->search.'%');
            $query->where('DateAdded','like','%'.$this->search.'%');//add the other searched columns after this
            $query->where('SerialNumber','like','%'.$this->search.'%');
            $query->where('SerialNumber','like','%'.$this->search.'%');
            $query->where('SerialNumber','like','%'.$this->search.'%');
        })
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);

        return view('livewire.failed',[
            'items'=> $items
        ]);
    }
}
