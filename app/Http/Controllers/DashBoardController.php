<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\Contact;

class DashBoardController extends Controller
{
    public function dashboard()
    {
        $dashboard = Bill::all();
        $count1 = Bill::where('payment', 1)->get();
        $count2 = Bill::where('payment', 2)->get();
        $contact = Contact::all();

        return view('admin.dashboard', compact('dashboard', 'count1', 'count2', 'contact'));
    }
}
