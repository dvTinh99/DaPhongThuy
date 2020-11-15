<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\Cate;
use App\Neww;
use App\Comment;
use App\Contact;
use App\Http\Requests\ReviewRequest;
use App\Http\Requests\ContactsRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        $sale_product = Product::where('promotion_price', '>', 0)->simplePaginate(6);
        $new_product = Product::select('id', 'name', 'price', 'image_list')->skip(13)->take(4)->orderBy('id', 'desc')->get();
        $banchay_product = Product::select('id', 'name', 'price', 'image_list')->take(4)->where('status', 'Hết hàng')->get();
        $sale_product2 = Product::select('id', 'name', 'price', 'image_list', 'promotion_price')->take(4)->where('promotion_price','>',0)->get();
        $combo_product = Product::skip(41)->take(4)->get();
        $new = Neww::all();
        return view('page.home', compact('sale_product', 'new_product', 'banchay_product', 'sale_product2', 'new','combo_product'));
    }

    public function gioithieu ()
    {
        $new = Neww::all();
        return view('page.gioithieu', compact('new'));
    }

    public function contact ()
    {
        return view('page.contact');
    }

    public function shop ($id)
    {
        $type_product = Product::where('category_id', $id)->get();
        return view('page.shop', compact('type_product'));
    }

    public function product ($id){
        $product = Product::where('id', $id)->get();
        $product_deff = Product::skip(45)->take(8)->get();
        $new = Neww::all();
        $review = Comment::orderBy('id', 'desc')->get();

        return view('page.product',compact('product', 'product_deff','new','review'));
    }

    public function news ()
    {
        $new = Neww::all();
        return view('page.news', compact('new'));
    }
    public function newssingle ($id)
    {
        $new = Neww::where('id', $id)->get();
        $new_def = Neww::all();
        return view('page.news_single', compact('new', 'new_def'));
    }

    public function timkiem(Request $request)
    {
        $value_search = $request->search;
        $search = Product::where('name','like',"%$value_search%")
                            ->orWhere('price',$value_search)
                            ->paginate(8);
        return view('page.search', compact('value_search', 'search'));
    }

    public function danhgia(ReviewRequest $request)
    {
        $review =  new Comment;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->content = $request->review;
        $review->save();

        return redirect()->back();
    }

    public function lienhe()
    {
        return view('page.contact');
    }
    public function postlienhe(ContactsRequest $request)
    {
        $contact = new Contact;
        $contact->name = $request->namecontact;
        $contact->email = $request->emailcontact;
        $contact->title = $request->titlecontact;
        $contact->message = $request->messagecontact;
        $contact->save();

        return redirect()->route('lienhe');
    }

}
