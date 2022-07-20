<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PhaseController;
use App\Http\Controllers\MineGroupNameController;
use App\Http\Controllers\ProductsPDFController;
use App\Models\User;
use App\Models\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
        $usertype=Auth::user()->usertype;//getting user type auth helps me check the usertype

        if ($usertype=='AdminUser')
        {
            $activeuser = User::where('usertype','=','NormalUser')->get();
            $usercount = $activeuser->count();

            return view('admin.dashboard',['usercount'=>$usercount]);
        }
        elseif ($usertype=='NormalUser')
        {
            //counting all products
            $allproducts = Product::get();
            $allproductscount = $allproducts->count();
            /*---------------------------*/
            //counting all failed products
            $allfailedproducts = Product::where('CurrentPhase','=','failed')->get();
            $allfailedproductscount = $allfailedproducts->count();
            /*---------------------------*/
            //counting all added products
            $alladdedproducts = Product::where('CurrentPhase','=','added')->get();
            $alladdedproductscount = $alladdedproducts->count();
            /*---------------------------*/
            //counting all precasted products
            $allprecastedproducts = Product::where('CurrentPhase','=','precasted')->get();
            $allprecastedproductscount = $allprecastedproducts->count();
            /*---------------------------*/
            //counting all casted products
            $allcastedproducts = Product::where('CurrentPhase','=','casted')->get();
            $allcastedproductscount = $allcastedproducts->count();
            /*---------------------------*/
            //counting all postcasted products
            $allpostcastedproducts = Product::where('CurrentPhase','=','postcasted')->get();
            $allpostcastedproductscount = $allpostcastedproducts->count();
            /*---------------------------*/
            //counting all assembled products
            $allassembledproducts = Product::where('CurrentPhase','=','assembled')->get();
            $allassembledproductscount = $allassembledproducts->count();
            /*---------------------------*/
            //counting all stored products
            $allstoredproducts = Product::where('CurrentPhase','=','stored')->get();
            $allstoredproductscount = $allstoredproducts->count();
            /*---------------------------*/
            //counting all sold products
            $allsoldproducts = Product::where('CurrentPhase','=','sold')->get();
            $allsoldproductscount = $allsoldproducts->count();
            /*---------------------------*/
            //counting all commissioned products
            $allcommissionedproducts = Product::where('CurrentPhase','=','commissioned')->get();
            $allcommissionedproductscount = $allcommissionedproducts->count();
            /*---------------------------*/
            return view('user.dashboard',[
                'allproductscount'=>$allproductscount,
                'allfailedproductscount'=>$allfailedproductscount,
                'alladdedproductscount'=>$alladdedproductscount,
                'allprecastedproductscount'=>$allprecastedproductscount,
                'allcastedproductscount'=>$allcastedproductscount,
                'allpostcastedproductscount'=>$allpostcastedproductscount,
                'allassembledproductscount'=>$allassembledproductscount,
                'allstoredproductscount'=>$allstoredproductscount,
                'allsoldproductscount'=>$allsoldproductscount,
                'allcommissionedproductscount'=>$allcommissionedproductscount
            ]);
        }
        else
        {
            return view('404');
        }
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('addproduct', [ProductController::class, 'showProductAdder'])->name('addproduct');
Route::post('/p', [ProductController::class, 'AddProduct'])->name('AddProduct');

Route::get('showproduct', [ProductController::class, 'showProducts'])->name('showproduct');

Route::get('addclient', [ClientController::class, 'showClientAdder'])->name('addclient');

Route::post('/c', [ClientController::class, 'AddClient'])->name('AddClient');
//adding a mine group name
Route::post('/addclientdetails', [ClientController::class, 'AddClient'])->name('addclientdetails');

//Phases
Route::get('phases', [PhaseController::class, 'showPhases'])->name('phases');

Route::get('addedphase', [PhaseController::class, 'showaddedphase'])->name('addedphase');
Route::get('precastphase', [PhaseController::class, 'showprecastphase'])->name('precastphase');
Route::get('castphase', [PhaseController::class, 'showcastphase'])->name('castphase');
Route::get('postcastphase', [PhaseController::class, 'showpostcastphase'])->name('postcastphase');
Route::get('assembledphase', [PhaseController::class, 'showassembledphase'])->name('assembledphase');
Route::get('storedphase', [PhaseController::class, 'showstoredphase'])->name('storedphase');
Route::get('soldphase', [PhaseController::class, 'showsoldphase'])->name('soldphase');
Route::get('commissionedphase', [PhaseController::class, 'showcommissionedphase'])->name('commissionedphase');

Route::get('failed', [PhaseController::class, 'showfailed'])->name('failed');

//pdf printing
Route::get('generate-pdf', [ProductsPDFController::class, 'generateProductsPDF'])->name('generate-pdf');
//Phases
Route::get('generate-addedlights-pdf', [ProductsPDFController::class, 'generateaddedlightsPDF'])->name('generate-addedlights-pdf');
Route::get('generate-precastedlights-pdf', [ProductsPDFController::class, 'generateprecastedlightsPDF'])->name('generate-precastedlights-pdf');
Route::get('generate-castedlights-pdf', [ProductsPDFController::class, 'generatecastedlightsPDF'])->name('generate-castedlights-pdf');
Route::get('generate-postcastedlights-pdf', [ProductsPDFController::class, 'generatepostcastedlightsPDF'])->name('generate-postcastedlights-pdf');
Route::get('generate-assembledlights-pdf', [ProductsPDFController::class, 'generateassembledlightsPDF'])->name('generate-assembledlights-pdf');
Route::get('generate-storedlights-pdf', [ProductsPDFController::class, 'generatestoredlightsPDF'])->name('generate-storedlights-pdf');
Route::get('generate-soldlights-pdf', [ProductsPDFController::class, 'generatesoldlightsPDF'])->name('generate-soldlights-pdf');
Route::get('generate-commissionedlights-pdf', [ProductsPDFController::class, 'generatecommissionedlightsPDF'])->name('generate-commissionedlights-pdf');
Route::get('generate-failedlights-pdf', [ProductsPDFController::class, 'generatefailedlightsPDF'])->name('generate-failedlights-pdf');




