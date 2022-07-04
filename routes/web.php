<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PhaseController;
use App\Models\User;
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
            return view('user.dashboard');
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




