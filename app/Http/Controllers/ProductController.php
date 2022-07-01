<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Database\DBAL\TimestampType;

class ProductController extends Controller
{
    public function showProductAdder()
    {
        return view('user.addproduct');
    }
    public function showProducts()
    {
        return view('user.viewproduct');
    }
    // Store Product data
    public function AddProduct(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'SerialNumber' => 'required',
            'ElectronicBoardID' => 'required',
            'BatteryID' => 'required',
            'DateAdded' => 'required'
         ]);
        //  Store data in database
        Product::create($request->all());
        //
        return back()->with('success', 'Product has been added.');
    }
}
