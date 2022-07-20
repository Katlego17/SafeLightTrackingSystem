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
        // Form validation
        $this->validate($request, [
            'GroupName' => 'required',
            'Name' => 'required',
            'Site' => 'required',
            'Section' => 'required',
            'Level' => 'required',
            'Cabinet' => 'required'
         ]);
        //  Store data in database
        Client::create($request->all());
        return back()->with('success', 'Client has been added.');
    }
}
