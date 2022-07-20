<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MineGroupName;
use App\Models\MineName;
use App\Models\MineSite;
use App\Models\MineSection;
use App\Models\MineLevel;
use App\Models\MineCabinet;

class MineGroupNameController extends Controller
{

    public function AddMineGroup(Request $request)
    {
        //ADDING GROUPNAME WITH MINE NAME RELATED
        $GroupName= new MineGroupName;
        $GroupName->MineGroupName=$request->GroupName;//assigning group name here
        $GroupName->save();//saving groupname

        $MineName = [new MineName(['MineName' => $request->MineName])];//assigning mine name

        $GroupName->minenames()->saveMany($MineName);//saving mine name with related groupname



        return back()->with('success', 'Mine Group Name has been added.');
    }
}
