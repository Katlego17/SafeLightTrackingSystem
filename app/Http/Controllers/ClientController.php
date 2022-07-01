<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
{
    public function showClientAdder()
    {
        return view('user.addclient');
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
