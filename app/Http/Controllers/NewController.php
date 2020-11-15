<?php

namespace App\Http\Controllers;
use App\Neww;
use Illuminate\Http\Request;
use App\Http\Requests\NewRequest;


class NewController extends Controller
{
    public function getAdd ()
    {
        return view('admin.new.add');
    }
    public function postAdd(NewRequest $request)
    {
        $file_name = $request->file('fImagesnew')->getClientOriginalName();
        $news = new Neww;
        $news->name = $request->namenew;
        $news->content = $request->content;
        $news->image = $file_name;
        $request->file('fImagesnew')->move('resources/upload/news/',$file_name);
        $news->save();

        return redirect()->route('admin.new.getadd')->with(['messages' => 'Add New Complete']);
    }
    public function Newlist ()
    {
        $listnew = Neww::all();
        return view('admin.new.list',compact('listnew'));
    }

}
