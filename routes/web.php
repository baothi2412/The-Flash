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
use App\Http\Controllers\ClientPlayerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PositionMatchController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\FixturesController;

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

// Route::get('send-mail', function () {

//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];

//     \Mail::to('nhsona21171@cusc.ctu.edu.vn')->send(new \App\Mail\SoccerVerseMail($details));

//     dd("Email is Sent.");
// });

Route::get('/app/test', function () {
    $club = \DB::connection()->getSchemaBuilder()->getColumnListing((new User)->getTable());
    $data = User::all();
    return view('test', [
        'club' => $club,
        'title' => 'TEST',
        'records' => $data
    ]);
});

$sharedData = ['title' => 'Soccer'];

Route::get('/', [ClientPlayerController::class,'player_client']);
Route::get('player', [ClientPlayerController::class,'player']);
Route::get('player-details/{id}', [ClientPlayerController::class,'player_details']);
Route::get('match-results', [MatchController::class, 'matches']);
Route::get('match-results-details', fn() => view('client-pages.match-results-details.index', $sharedData));

Route::get('fixtures', [FixturesController::class,'fixture']);

Route::get('point-table', fn() => view('client-pages.point-table.index', $sharedData));
Route::get('contact', fn() => view('client-pages.contact.index', $sharedData));
Route::get('feedback', fn() => view('client-pages.feedback.index', $sharedData));
Route::get('squad', fn() => view('client-pages.squad.index', $sharedData));
Route::get('aboutus', fn() => view('client-pages.aboutus.index', $sharedData));

Route::prefix('/feedback')->group(function() {
    Route::post('/submit', [FeedbackController::class, 'submit']);
});
Route::prefix('/contact')->group(function() {
    Route::post('/submit', [ContactController::class, 'submit']);
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
    Route::prefix('/feedbacks')->group(function () {
        Route::get('/', [FeedbackController::class, 'index']);
    });
    //Contact
    Route::prefix('/contacts')->group(function () {
        Route::get('/', [ContactController::class, 'index']);

    });
    Route::prefix('/players')->group(function () {
        Route::get('/', [PlayerController::class, 'index']);

    });
    Route::prefix('/clubs')->group(function () {
        Route::get('/', [ClubController::class, 'index']);

    });
    Route::prefix('/position')->group(function () {
        Route::get('/', [PositionMatchController::class, 'index']);

    });
    Route::prefix('/tournaments')->group(function () {
        Route::get('/', [TournamentController::class, 'index']);

    });
    Route::prefix('/matches')->group(function () {
        Route::get('/', [MatchController::class, 'index']);
    });

    Route::prefix('/goals')->group(function () {
        Route::get('/', [GoalController::class, 'index']);
    });

});

// Prefix /api khi gọi lên server lấy api
Route::prefix('/api')->group(function () {

    // Sign in, sign out
    Route::prefix('/account')->group(function () {
        Route::post('/sign-in', [AccountController::class, 'signInCheck']);
        // Route::post('/sign-up', [AccountController::class, 'signUp']);
    });

    // Routes cần xác thực user
    Route::middleware(['jwt.auth'])->group(function () {
        Route::prefix('/user')->group(function () {
            Route::post('/store', [UserController::class, 'store']);
            Route::put('/update', [UserController::class, 'update']);
            Route::get('/{id}', [UserController::class, 'detail']);
            Route::delete('/delete/{id}', [UserController::class, 'delete']);
            Route::get('/all', [UserController::class, 'all']);
        });

        Route::prefix('/player')->group(function () {
            Route::post('/store', [PlayerController::class, 'store']);
        });

        Route::prefix('/club')->group(function () {
            Route::post('/store', [ClubController::class, 'store']);
            Route::post('/update', [ClubController::class, 'update']);
        });

        Route::prefix('/tournament')->group(function() {
            Route::post('/store', [TournamentController::class, 'store']);
            Route::put('/update', [TournamentController::class, 'update']);
            Route::get('/{id}', [TournamentController::class, 'detail']);
            Route::delete('/delete/{id}', [TournamentController::class, 'delete']);
        });
    });
});
