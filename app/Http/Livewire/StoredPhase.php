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
    public $GroupName,$Name,$Site,$section,$Level,$Cabinet;
    public function AllocateToClient()
    {
        if (!empty($this->selectedProducts)) {
            /*Product::whereIn('id', $this->selectedProducts)
                    ->update([
                        'CurrentPhase' => 'failed',
                    ]);*/

            $this->selectedProducts = [];
            $this->doClose();
        }
    }

    public function render()
    {
        //rendering all products that are in the added phase
        $storedLights = Product::where('CurrentPhase','=','stored')->paginate(10);
        //Client details
        $MineGroupName = Client::get('GroupName');
        $MineName = Client::get('Name');
        $MineSiteName = Client::get('Site');
        $MineSectionName = Client::get('Section');
        $MineLevelName = Client::get('Level');
        $MineCabinetName = Client::get('Cabinet');

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
