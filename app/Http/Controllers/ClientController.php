<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;
use App\Models\MineGroupName;
use App\Models\MineName;
use App\Models\MineSection;
use App\Models\MineSite;
use App\Models\MineLevel;
use App\Models\MineCabinet;

class ClientController extends Controller
{
    public function showClientAdder()
    {
        //get already existing data from here
        $minegroupnames = MineGroupName::get();
        $minenames = MineName::get();
        $minesection = MineSection::get();
        $minelevel = MineLevel::get();
        $minesite = MineSite::get();
        $minecabinet = MineCabinet::get();

        return view('user.addclient',[
            'minegroupnames'=>$minegroupnames,
            'minenames'=>$minenames,
            'minesection'=>$minesection,
            'minelevel'=>$minelevel,
            'minesite'=>$minesite,
            'minecabinet'=>$minecabinet
        ]);
    }

    // Store Product data
    public function AddClient(Request $request) {
        dd(7);
        //ADDING GROUPNAME WITH MINE NAME RELATED
        $GroupName= new MineGroupName;
        $GroupName->MineGroupName=$request->GroupName;//assigning group name here
        $GroupName->save();//saving groupname

        $MineName = [new MineName(['MineName' => $request->MineName])];//assigning mine name

        $GroupName->minenames()->saveMany($MineName);//saving mine name with related groupname



        return back()->with('success', 'Mine Group Name has been added.');
    }
}
