<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Client;

class StoredPhase extends Component
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
            $date = date('d/m/Y');//$date = date('Y-m-d H:i:s');
            Product::whereIn('id', $this->selectedProducts)->update(['CurrentPhase' => 'sold','DateSold' => $date]);
            $this->selectedProducts = [];
        }
    }

    //Allocatng A PRODUCT
    public $GroupName,$Name,$Site,$Section,$Level,$Cabinet,$client_id;
    public function AllocateToClient()
    {
        //DD($this->GroupName);
        //Need to make sure about
        if (!empty($this->selectedProducts)) {
            Product::whereIn('id', $this->selectedProducts)
                    ->update([
                        'GroupName' => $this->GroupName,
                        'Name' => $this->Name,
                        'Site' => $this->Site,
                        'Section' => $this->Section,
                        'Level' => $this->Level,
                        'Cabinet' => $this->Cabinet
                    ]);

            $this->selectedProducts = [];
            $this->doClose();
        }
    }

    public function render()
    {
        //rendering all products that are in the added phase
        $storedLights = Product::where('CurrentPhase','=','stored')->paginate(10);
        //Client details
        $MineGroupName = Client::get();
        $MineName = Client::get();
        $MineSiteName = Client::get();
        $MineSectionName = Client::get();
        $MineLevelName = Client::get();
        $MineCabinetName = Client::get();

        return view('livewire.stored-phase',[
            'storedLights'=>$storedLights,

            'MineGroupName'=>$MineGroupName,
            'MineName'=>$MineName,
            'MineSiteName'=>$MineSiteName,
            'MineSectionName'=>$MineSectionName,
            'MineLevelName'=>$MineLevelName,
            'MineCabinetName'=>$MineCabinetName
        ]);
    }
}
