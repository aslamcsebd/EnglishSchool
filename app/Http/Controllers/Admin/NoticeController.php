<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class NoticeController extends Controller
{
    public function index()
    {
        $data['notices'] = Notice::latest()->get();
        $data['notices'] = Notice::latest()->get();
        return view('admin.pages.notice.index',$data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
         'title'=>'required',
         'description'=>'required',
         'date'=>'required',
        ]);
        $notice = new Notice();
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->date = $request->date;
        $notice->save();
        Toastr::success('Success','Notice Added Succesfully');
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // dd($id);
        $data['notice'] = Notice::find($id);
        return view('admin.pages.notice.edit',$data);
        
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'date'=>'required',
           ]);

           $notice =  Notice::find($id);
           $notice->title = $request->title;
           $notice->description = $request->description;
           $notice->date = $request->date;
           $notice->save();
           Toastr::success('Success','Notice Updated Succesfully');
           return redirect()->route('notice.index');
           
    }

    public function destroy($id)
    {
        $notice =  Notice::find($id);
        $notice->delete();
        Toastr::success('Success','Notice Deleted Succesfully');
        return redirect()->route('notice.index');
    }
}
