<?php

namespace App\Http\Controllers\Admin\Dental_college;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Admin\Dental_college\DentalCollegeCategory;

class DentalCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['cats']=DentalCollegeCategory::all();
        return view('admin.pages.dentalcollege.categories',$data);
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
              'name'=>'required',
        ]);
        $cat = new DentalCollegeCategory();
        $cat->name = $request->name;
        if($request->hasFile('image'))
            {
                // dd($request->image);
            $request->validate([
                "image" => 'image|mimes:jpeg,png',
                ]);

            if(!Storage::disk('public')->exists('dentalcategory'))
            {
                Storage::disk('public')->makeDirectory('dentalcategory');
            } 
            
            $file = $request->file('image');
            $file_ext = $file->getClientOriginalExtension();
            $image = 'image_'.time().'.'.$file_ext;
            $save = 'storage/dentalcategory/'. $image;
            Image::make($file)->fit(540,360)->save($save);
        }
        else
        {
            $image =  null;
        }

        $cat->image = $image;
        $cat->save();
        Toastr::success('Success','Dental College Category added successfully');
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
        $data['item']= DentalCollegeCategory::find($id);
        return view('admin.pages.dentalcollege.catedit',$data);
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
            'name'=>'required',
      ]);
      $cat = DentalCollegeCategory::find($id);
      $cat->name = $request->name;

      if($request->hasFile('image'))
        {
        $request->validate([
            "image" => 'image|mimes:jpeg,png',
            ]);

            // dd($$about->image);
        if($cat->image != null)
            {
                if(Storage::disk('public')->exists('dentalcategory/'.$cat->image))
                {
                    Storage::disk('public')->delete('dentalcategory/'.$cat->image);
                }
                
            }
                $file = $request->file('image');
                $file_ext = $file->getClientOriginalExtension();
                $image = 'image_'.time().'.'.$file_ext;
                $save = 'storage/dentalcategory/'. $image;
                Image::make($file)->fit(540,360)->save($save);
        } else{
                $image = $cat->image;
              }

                $cat->image = $image;
                $cat->save();
                    Toastr::success('Success','Dental College Category Update successfully');
                    return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = DentalCollegeCategory::find($id); 

        if(Storage::disk('public')->exists('dentalcategory/'.$cat->image))
        {
            
            Storage::disk('public')->delete('dentalcategory/'.$cat->image);
           
        }
        $cat->delete();
        Toastr::success('Success','Dental College Category Deketed successfully');
        return redirect()->back();
    }
}
