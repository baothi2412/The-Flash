<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Models\Club;
use App\Models\User;
use App\Http\Controllers\FeedbackController;

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
    $club = \DB::connection()->getSchemaBuilder()->getColumnListing((new Club)->getTable());
    $data = Club::all();
    return view('test', [
        'club' => $club,
        'title' => 'TEST',
        'records' => $data
    ]);
});


// Trả về view login cho admin page
Route::get('/admin/login', [AccountController::class, 'login'])->name('login');
// Check khi bấm nút submit
Route::post('/admin/loginCheck', [AccountController::class, 'loginCheck']);

// Prefix /admin cho request admin page
Route::middleware(['auth'])->prefix('/admin')->group(function () {
    // Admin home page
    Route::get('/', function () {
        return view(
            'admin-pages.home',
            [
                'title' => 'Home'
            ]
        );
    });

    Route::get('/logout', [AccountController::class, 'logout']);

    // Feedbacks
    Route::get('/feedbacks', [FeedbackController::class, 'index']);
});

// Prefix /api khi gọi lên server lấy api
Route::prefix('/api')->group(function() {

    // Sign in, sign out
    // Route::prefix('/account')->group(function() {
    //     // Route::post('/sign-in', [AccountController::class, 'signInCheck']);
    //     // Route::post('/sign-up', [AccountController::class, 'signUp']);
    // });

    // Routes cần xác thực user
    Route::middleware(['auth:api'])->group(function () {
        
    });

});