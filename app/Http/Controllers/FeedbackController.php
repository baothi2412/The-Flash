<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request) {
        return view('admin-pages.feedback.index', [
            'title' => 'Feedbacks'
        ]);
    }
}
