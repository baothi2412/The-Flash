<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FeedbackController extends Controller
{
    public function index(Request $request) {
        return view('admin-pages.feedback.index', [
            'title' => 'Feedbacks'
        ]);
    }
}
