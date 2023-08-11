<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Models\Club;
use App\Models\User;
use App\Models\Player;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PositionMatchController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\MatchController;
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
    $club = \DB::connection()->getSchemaBuilder()->getColumnListing((new User)->getTable());
    $data = User::all();
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
    Route::prefix('/feedbacks')->group(function() {
        Route::get('/', [FeedbackController::class, 'index']);

    });
    //Contact
    Route::prefix('/contacts')->group(function() {
        Route::get('/', [ContactController::class, 'index']);

    });
    Route::prefix('/players')->group(function() {
        Route::get('/', [PlayerController::class, 'index']);

    });
    Route::prefix('/clubs')->group(function() {
        Route::get('/', [ClubController::class, 'index']);

    });
    Route::prefix('/position')->group(function() {
        Route::get('/', [PositionMatchController::class, 'index']);

    });
    Route::prefix('/tournaments')->group(function() {
        Route::get('/', [TournamentController::class, 'index']);

    });
    Route::prefix('/matches')->group(function() {
        Route::get('/', [MatchController::class, 'index']);

    });

});

// Prefix /api khi gọi lên server lấy api
Route::prefix('/api')->group(function() {

    // Sign in, sign out
    Route::prefix('/account')->group(function() {
        Route::post('/sign-in', [AccountController::class, 'signInCheck']);
    //     // Route::post('/sign-up', [AccountController::class, 'signUp']);
    });

    // Routes cần xác thực user
    Route::middleware(['jwt.auth'])->prefix('/user')->group(function () {
        Route::post('/store', [UserController::class, 'store']);
    });

});
