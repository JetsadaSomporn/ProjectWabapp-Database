<?php

use App\Http\Controllers\{
    HomeController,
    ProfileController,
    postcRUDController,
    enrollController,
    AdminController
};
use App\Http\Controllers\AdminControllerแ;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('jobinfo', postcRUDController::class);
    Route::get('enroll', [enrollController::class, 'enroll']);
    //Test route check how create job
    Route::get('createjob', [postcRUDController::class, 'create'])->name('create'); //fetch and input worktype
    Route::post('createjob2', [postcRUDController::class, 'create2'])->name('create2'); // fetch and create question
    Route::post('store', [postcRUDController::class, 'store'])->name('store'); // insert on to DB

    Route::get('enroll', [enrollController::class, 'enroll']);
    Route::post('ansQuestion',[enrollController::class, 'ansQuestion'])->name('ansQuestion'); //this route is for answer question and store data like email tel. resume
    Route::post('summarizeData',[enrollController::class, 'sumarizeData'])->name('summarize');
    Route::post('submit-response', [enrollController::class, 'submitResponse'])->name('submit_summary');//this route is for answer question and store data like email tel. resume

});
Route::middleware(['auth', 'user-access:poser'])->group(function () {
    Route::get('/poser', [HomeController::class, 'poserHome'])->name('poser.home');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    

});

Route::get('/adminUser', [AdminController::class, 'showUsers'])->name('adminUser');
Route::get('/searchUser', [AdminController::class, 'searchUser'])->name('searchUser');
Route::get('/admin/delete/{idUser}', [AdminController::class,'delete'])->name('delete');
Route::get('/admin', [AdminController::class, 'adminHome'])->name('admin.home');
Route::get('admin/{text}', [AdminController::class, 'admint'])->name('adminUser');


require __DIR__.'/auth.php';
