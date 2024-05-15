<?php

use App\Models\Medecin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExcelImportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
    
//     if (Route::currentRouteName() == 'submit') {
//         // Vider les sessions lorsque la route '/' est directement accédée
//         Session::forget('filtered_data');
//         Session::forget('filtered_localites');
//     }
//     $data = Medecin::paginate(10);
//     $localites = Medecin::select('localite')->distinct()->pluck('localite');
//     return view('welcome', compact('data','localites'));
// })->name('home')->middleware('clearSessionOnGet');


Route::get('/', function () {
   
   
        // Vérifiez si les sessions existent
        $data = Session::get('filtered_data', Medecin::paginate(10));
        $localites = Session::get('filtered_localites', Medecin::select('localite')->distinct()->pluck('localite'));
    
        return view('welcome', compact('data', 'localites'));
   
})->name('home');
Route::post('/clear-sessions', function () {
    Session::forget('filtered_data');
    Session::forget('filtered_localites');
    return response()->json(['status' => 'success']);
})->name('clear.sessions');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::post('/import', [ExcelImportController::class, 'import']);
Route::post('/submit', [ExcelImportController::class, 'submit'])->name('submit');
