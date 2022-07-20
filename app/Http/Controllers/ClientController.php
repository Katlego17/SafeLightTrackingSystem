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
        /*$minegroupnames = MineGroupName::get();
        $minenames = MineName::get();
        $minesection = MineSection::get();
        $minelevel = MineLevel::get();
        $minesite = MineSite::get();
        $minecabinet = MineCabinet::get();*/

        $minegroupnames = Client::get('GroupName');
        $minenames = Client::get('Name');
        $minesection = Client::get('Section');
        $minelevel = Client::get('Level');
        $minesite = Client::get('Site');
        $minecabinet = Client::get('Cabinet');

        return view('user.addclient',[
            'minegroupnames'=>$minegroupnames,
            'minenames'=>$minenames,
            'minesection'=>$minesection,
            'minelevel'=>$minelevel,
            'minesite'=>$minesite,
            'minecabinet'=>$minecabinet
        ]);
    }

    public function ClientViewer()
    {
        return view('user.clientviewer');
    }

    // Store Product data
    public function AddClient(Request $request)
    {
        /*//ADDING GROUPNAME WITH MINE NAME RELATED
        $GroupName= new MineGroupName;
        $GroupName->MineGroupName=$request->GroupName;//assigning group name here
        $GroupName->save();//saving groupname

        $MineName = [new MineName(['MineName' => $request->MineName])];//assigning mine name
        /*$MineSite = [new MineSite(['MineSiteName' => $request->MineSite])];//assigning mine site name
        $MineSection = [new MineSection(['MineSection' => $request->MineSection])];//assigning mine name
        $MineLevel = [new MineLevel(['MineLevel' => $request->MineLevel])];//assigning mine name
        $MineCabinet = [new MineCabinet(['MineCabinet' => $request->MineCabinet])];//assigning mine name

        $GroupName->minenames()->saveMany($MineName);//saving mine name with related groupname*/

        $Details = new Client([
            'GroupName' => $request->GroupName,
            'Name' => $request->MineName,
            'Site' => $request->MineSite,
            'Section' => $request->MineSection,
            'Level' => $request->MineLevel,
            'Cabinet' => $request->MineCabinet
        ]);
        $Details->save();

        return back()->with('success', 'Client details has been added.');
    }
}
