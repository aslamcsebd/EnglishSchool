<?php

namespace App\Http\Controllers\Admin;

use App\Admin\facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class facilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['facilities'] = facility::all();
        return view('admin.pages.facilities.index',$data);
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
        ]);
        $facilities = new facility();
        $facilities->title = $request->title;
        $facilities->description = $request->description;
        $facilities->icon = $request->icon;
        $facilities->save();
        Toastr::success('Success','Facilities Stored successfully');
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
        
        $data['item']= facility::find($id);
        return view('admin.pages.facilities.edit',$data);
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
           ]);
           $facilities = facility::find($id);
           $facilities->title = $request->title;
           $facilities->description = $request->description;
           $facilities->icon = $request->icon;
           $facilities->save();
           Toastr::success('Success','Facilities Updated successfully');
           return redirect()->route('facilities.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facilities = facility::find($id);
        $facilities->delete();
        Toastr::success('Success','Facilities Deleted successfully');
        return redirect()->route('facilities.index');
    }
}
