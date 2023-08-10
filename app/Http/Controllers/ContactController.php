<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request) {
        $contact = \DB::connection()->getSchemaBuilder()->getColumnListing((new Contact)->getTable());
        $data = Contact::all();
        return view('admin-pages.contact.index', [
            'title' => 'Contact',
            'records'=> $data,
            'contact' => $contact,
        ]);
    }
}
