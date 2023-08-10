<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index(Request $request) {
        $feedbacks = \DB::connection()->getSchemaBuilder()->getColumnListing((new Feedback)->getTable());
        $data = Feedback::all();
        return view('admin-pages.feedback.index', [
            'title' => 'Feedbacks',
            'records'=> $data,
            'feedbacks' => $feedbacks,
        ]);
    }
}
