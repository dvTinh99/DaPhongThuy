<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function list()
    {
        $contact = Contact::all();

        return view('admin.contact.list', compact('contact'));
    }
}
