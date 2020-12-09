<?php

namespace App\Http\Controllers\Admin;

use App\Admin\facility;
use App\facilities_description;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class facilityController extends Controller{

    public function index()
    {
        $data['facilities'] = facility::all();
        return view('admin.pages.facilities.index',$data);
    }

   public function create(){
   
   }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
         'title'=>'required',
        ]);
        $facilities = new facility();
        $facilities->title = $request->title;
        $facilities->icon = $request->icon;
        $facilities->save();
        Toastr::success('Success','Facilities Title Stored successfully');
        return redirect()->back();

    }

   public function add_facilities_description(Request $request) {

      $facilities_ID = $request->facilities_ID;

      if (is_array($request->description)) {
         for($i = 0; $i <= count($request->description) - 1; $i++){
            facilities_description::create([ 
               'facilities_ID' => $facilities_ID, 
               'descriptions' => $request->description[$i] ]);
         }
      }
      return back()->with('description','Description add successfully');
   }



    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        
        $data['item']= facility::find($id);
        return view('admin.pages.facilities.edit',$data);
    }

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

    public function destroy($id)
    {
        $facilities = facility::find($id);
        $facilities->delete();
        Toastr::success('Success','Facilities Deleted successfully');
        return redirect()->route('facilities.index');
    }
}
