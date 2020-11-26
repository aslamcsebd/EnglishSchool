<?php

namespace App\Http\Controllers\Admin\aboutus;

use Illuminate\Http\Request;
use App\About\Administration;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['admins'] = Administration::all();
        return view('admin.pages.aboutus.administration.index',$data);
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
            "name"=>"required",
            "degree"=>"required",
            "role"=>"required",
        ]);
        $admin = new Administration();
        $admin->name = $request->name;
        $admin->degree = $request->degree;
        $admin->role = $request->role;

        if($request->hasFile('image')){
            $request->validate([
                "image" => 'image|mimes:jpeg,png',
                ]);

            if(!Storage::disk('public')->exists('administration'))
            {
                Storage::disk('public')->makeDirectory('administration');
            } 
            
            $file = $request->file('image');
            $file_ext = $file->getClientOriginalExtension();
            $image = 'image_'.time().'.'.$file_ext;
            $save = 'storage/administration/'. $image;
            Image::make($file)->fit(571,570)->save($save);
        } else
        {
            $image = 'default.jpg';
        }

            $admin->image = $image;
            $admin->save();
            Toastr::success('Success','Administrator Added successfully');
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
        //
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
        // dd($request->all());
        $request->validate([
            "name"=>"required",
            "degree"=>"required",
            "role"=>"required",
        ]);
        $admin = Administration::find($id);
        $admin->name = $request->name;
        $admin->degree = $request->degree;
        $admin->role = $request->role;

        if($request->hasFile('image'))
        {
        $request->validate([
            "image" => 'image|mimes:jpeg,png',
            ]);

            // dd($$about->image);
        if($admin->image != null)
            {
                if(Storage::disk('public')->exists('administration/'.$admin->image))
                {
                   if($admin->image != "default.jpg")
                   {
                    Storage::disk('public')->delete('administration/'.$admin->image);
                   }
                }
            }
        
                $file = $request->file('image');
                $file_ext = $file->getClientOriginalExtension();
                $image = 'image_'.time().'.'.$file_ext;
                $save = 'storage/administration/'. $image;
                Image::make($file)->fit(571,570)->save($save);
            } else{
                $image = $admin->image;
                }

            $admin->image = $image;
            $admin->save();
            Toastr::success('Success','Administrator Updated successfully');
            return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $admin = Administration::find($id);
        if(Storage::disk('public')->exists('administration/'.$admin->image))
            {
                if($admin->image != "default.jpg")
                {
                Storage::disk('public')->delete('administration/'.$admin->image);
                }
            }
        $admin->delete();
        Toastr::success('Success','Administrator Deleted successfully');
        return redirect()->back();

    }
}
