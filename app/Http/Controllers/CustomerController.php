<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function list()
    {
        $customer = Customer::all();

        return view('admin.customer.list', compact('customer'));
    }
}
