<?php namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Requests\CateRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Cate;
class CateController extends Controller {
	// Add Category
	public function getAdd(){
		$parent = Cate::select('id','name','parent_id')->get()->toArray();
		return view('admin.cate.add')->with('parent',$parent);

	}
	public function postAdd(CateRequest $request){
		$category = new Cate;
		$category->name = $request->NameCate;
		$category->parent_id = $request->sltParent;
		$category->save();
		return redirect()->route('admin.cate.getadd')->with(['messages'=>'Add Category Complete']);

	}
	// End Add
	// List Category
	public function Catelist(){
		$category = Cate::select('id','name','parent_id')->get()->toArray();
		return view('admin.cate.list')->with('category',$category);
	}
	// End List Category
	// Delete Category
	public function Catedelete($id){
		$del = Cate::where('parent_id',$id)->count();
		if($del == 0){
			$delete = Cate::findOrFail($id);
			$delete->delete();
			return redirect()->route('admin.cate.list')->with(['messages'=>'Success Complete Delete Category']);
		}else{
			return redirect()->route('admin.cate.list')->with(['messages'=>'Delete fail']);
		}
	}
	// END DELETE CATEGORY
	// EDIT CATEGORY
	public function getEdit($id){
		$data = Cate::findOrFail($id)->toArray();
		$parent = Cate::select('id','name','parent_id')->get()->toArray();
		return view('admin.cate.edit', compact('data', 'parent', 'id'));
	}
	public function postEdit(CateRequest $request,$id){
		$cate = Cate::findOrFail($id);
		$cate->name = $request->NameCate;
		$cate->name = $request->sltParent;
		$cate->save();

		return redirect()->route('admin.cate.list')->with(['messages'=>'Update Conplete!!']);
	}


}

