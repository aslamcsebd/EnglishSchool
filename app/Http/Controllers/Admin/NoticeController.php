<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['notices'] = Notice::latest()->get();
        return view('admin.pages.notice.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $data['notice'] = Notice::find($id);
        return view('admin.pages.notice.edit',$data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice =  Notice::find($id);
        $notice->delete();
        Toastr::success('Success','Notice Deleted Succesfully');
        return redirect()->route('notice.index');
    }
}
