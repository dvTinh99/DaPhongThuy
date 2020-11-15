<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;

class BillController extends Controller
{
    public function billlist()
    {
        $customers = Customer::all();

        return view('admin.bill.index', compact('customers'));
    }

    public function getView($id)

    {
        $customerInfo = DB::table('customers')
                        ->join('bills', 'customers.id', '=', 'bills.customer_id')
                        ->select('customers.*', 'bills.id', 'bills.total', 'bills.note', 'bills.payment')
                        ->where('customers.id', '=', $id)
                        ->first();

        $billInfo = DB::table('bills')
                    ->join('billdetails', 'bills.id', '=', 'billdetails.bill_id')
                    ->leftjoin('products', 'billdetails.product_id', '=', 'products.id')
                    ->where('bills.customer_id', '=', $id)
                    ->select('bills.*', 'billdetails.*', 'products.name')
                    ->get();
        return view('admin.bill.edit', compact('customerInfo' , 'billInfo'));
    }
    public function delete($id)
    {
        $delete = Customer::find($id);
        $delete->delete();

        return redirect()->route('admin.bill.list');
    }
}
