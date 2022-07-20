<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Client;

class ViewClients extends Component
{
    use WithPagination;

    public $sortBy = "Name";

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
        $clients = Client::query()
        ->where('GroupName','like','%'.$this->search.'%')
        ->Orwhere('Name','like','%'.$this->search.'%')
        ->Orwhere('Site','like','%'.$this->search.'%')
        ->Orwhere('Section','like','%'.$this->search.'%')
        ->Orwhere('Level','like','%'.$this->search.'%')
        ->Orwhere('Cabinet','like','%'.$this->search.'%')
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);

        return view('livewire.view-clients',[
            'clients'=>$clients
        ]);
    }
}
