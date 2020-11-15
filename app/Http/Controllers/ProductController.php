<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cate;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller {

	public function getAdd(){
		$parent = Cate::select('id','name','parent_id')->get()->toArray();
		return view('admin.product.add')->with('parent',$parent);
	}
	public function postAdd(Request $request){
		$this->validate($request, [
	        'name' => 'required',
	        'price' => 'required',
	        'fImages' => 'required',
    	]);
    	$file_name = $request->file('fImages')->getClientOriginalName();
		$product = new Product;
		$product->category_id = $request->sltParent;
		$product->name = $request->name;
		$product->price = $request->price;
		$product->promotion_price = $request->promotion_price;
		$product->material = $request->material;
		$product->meaning = $request->txtMeaning;
		$product->size = $request->size;
		$product->status = $request->rdoStatus;
		$product->image_list = $file_name;
		$request->file('fImages')->move('resources/upload/',$file_name);

		$product->save();
		return redirect()->route('admin.product.getadd')->with(['messages'=>'Add Product Complete']);

	}

	public function getEdit($id){
		$cate = Cate::select('id','name','parent_id')->get()->toArray();
		$product = Product::findOrFail($id);
		$product_image = Product::find($id)->fImages;

		return view('admin.product.edit', compact('cate', 'product', 'product_image'));

	}
	public function postEdit(ProductRequest $request,$id){
		$file_names = $request->file('fImages')->getClientOriginalName();
		$product = Product::findOrFail($id);
		$product->category_id = $request->sltParent;
		$product->name = $request->name;
		$product->price = $request->price;
		$product->promotion_price = $request->promotion_price;
		$product->image_list = $file_names;
		$request->file('fImages')->move('resources/upload/',$file_names);
		$product->save();

		return redirect()->route('admin.product.list')->with(['messages'=>'Update Product Complete']);

	}

	public function ProductList(){
		$product = Product::all();
		return view('admin.product.list')->with('product',$product);
	}
	public function ProductDelete($id){

		$delete = Product::find($id);
		$delete->delete();
		return redirect()->route('admin.product.list')->with(['flash_message'=>'Delete Complete !!']);
	}

}
