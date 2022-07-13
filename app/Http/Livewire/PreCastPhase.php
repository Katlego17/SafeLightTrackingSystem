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
            $date = date('d/m/Y');//$date = date('Y-m-d H:i:s');
            Product::whereIn('id', $this->selectedProducts)->update(['CurrentPhase' => 'casted','DateCasted' => $date]);
            $this->selectedProducts = [];
        }
    }

    //FAILING A PRODUCT
    public $DateSentToEngineer,$Comments,$EngineerName,$RecycledCheck,$EnoughVoltCheck,$BubblesCheck,$MeshShotCheck,$DiodeCheck,$WiringCheck,$BoardOutputCheck;
    public function FailPhase()
    {
        if (!empty($this->selectedProducts)) {
            $date = date('d/m/Y');
            if ($this->DateSentToEngineer == null)
                        {
                            $this->DateSentToEngineer = $date;
                        }
            Product::whereIn('id', $this->selectedProducts)
                    ->update([
                        'CurrentPhase' => 'failed',
                        'DateFailed' => $this->DateSentToEngineer,
                        'EnoughVoltCheck' => $this->EnoughVoltCheck,
                        'WiringCheck' => $this->WiringCheck,
                        'BoardOutputCheck' => $this->BoardOutputCheck,
                        'DiodeCheck' => $this->DiodeCheck,
                        'MeshShotCheck' => $this->MeshShotCheck,
                        'BubblesCheck' => $this->BubblesCheck,
                        'RecycledCheck' => $this->RecycledCheck,
                        'DateSentToEngineer' => $this->DateSentToEngineer,
                        'EngineerName' => $this->EngineerName,
                        'Comments' => $this->Comments
                    ]);
            $this->selectedProducts = [];
            $this->doClose();
        }
    }

    public function render()
    {
        //rendering all products that are in the added phase
        $precastedLights = Product::where('CurrentPhase','=','precasted')->paginate(10);

        return view('livewire.pre-cast-phase',[
            'precastedLights'=>$precastedLights
        ]);


    }
}
