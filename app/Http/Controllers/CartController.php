<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use App\Customer;
use App\Bill;
use App\BillDetail;
use App\Http\Requests;
use App\Http\Requests\CheckRequest;

class CartController extends Controller
{
    public function muahang ($id)
    {
        $product_buy = Product::where('id', $id)->first();
        Cart::add(array('id' => $id, 'name' => $product_buy->name, 'qty' => 1, 'price' => $product_buy->price, 'options' => array('img' => $product_buy->image_list, 'stt' => $product_buy->status) ));

        return redirect()->route('giohang');
    }

    public function giohang ()
    {
        $content = Cart::content();
        $subtotal = Cart::subtotal(0, '.', ',');

        return view('page.cart',compact('content', 'subtotal'));
    }

    public function xoahang ($id)
    {
        Cart::remove($id);
        return redirect()->route('giohang');
    }

    public function capnhat (Request $request)
    {
        Cart::update($request->row, $request->qty);
        $cat = explode('.', Cart::subtotal());
        $total = $cat['0'];

        echo $total;
    }

    public function logincart ()
    {
        return view('page.login_cart');
    }

    public function checkout ()
    {
        $content = Cart::content();
        $subtotal = Cart::subtotal(0,'.',',');

        return view('page.checkout',compact('content', 'subtotal'));
    }

    public function postcheckout (CheckRequest $request)
    {
        $cart = Cart::content();
        try{
            $customer = new Customer;
            $customer->name = $request->namecheck;
            $customer->email = $request->emailcheck;
            $customer->address = $request->location;
            $customer->phonenumber = $request->phone;
            $customer->save();

            $bill = new Bill;
            $bill->customer_id = $customer->id;
            $bill->date_order = date('Y-m-d H:i:s');
            $bill->total = Cart::subtotal(0, ',', '');
            $bill->payment = $request->optradio;
            $bill->note = $request->note;
            $bill->save();

            foreach ($cart as $val) {
                $billDetail = new BillDetail;
                $billDetail->bill_id = $bill->id;
                $billDetail->product_id = $val->id;
                $billDetail->quantity = $val->qty;
                $billDetail->price = $val->price;
                $billDetail->save();
            }
            Cart::destroy();

            return redirect()->route('checkout')->with(['messages' => 'Mua hàng thành công']);

        } catch (Exception $e) {
            return redirect()->route('checkout')->with(['messages' => 'Mua hàng không thành công']);
        }
    }
}
