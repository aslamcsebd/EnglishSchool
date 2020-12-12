<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Curriculam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class CurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['curries'] = Curriculam::all();
        return view('admin.pages.curricularactivities.index',$data);
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
        $curri = new Curriculam;
        $curri->title = $request->title;
        $curri->description = $request->description;
        $curri->time_to = $request->time_to;
        $curri->time_from = $request->time_from;
        if($request->hasFile('image'))
            {
            $request->validate([
                "image" => 'required|image|mimes:jpeg,png',
                ]);

                // if(!Storage::disk('public')->exists('curricular'))
                // {
                //     Storage::disk('public')->makeDirectory('curricular');
                // } 
            
            $file = $request->file('image');
            $file_ext = $file->getClientOriginalExtension();
            $image = 'image_'.time().'.'.$file_ext;
            $save = 'storage/curricular/'. $image;
            Image::make($file)->fit(570,571)->save($save);
        }
        else
        {
            $image = 'default.jpg';
        }

            $curri->image = $image;
            $curri->save();
            Toastr::success('Success','Curricular Added successfully');
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
        $data['item'] = Curriculam::find($id);
        return view('admin.pages.curricularactivities.edit',$data);
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
            'title'=>'required',
            'description'=>'required',
          ]);
          $curri = Curriculam::find($id);
          $curri->title = $request->title;
          $curri->description = $request->description;
          $curri->time_to = $request->time_to;
          $curri->time_from = $request->time_from;



          if($request->hasFile('image'))
          {
          $request->validate([
              "image" => 'required|image|mimes:jpeg,png',
              ]);

              if($curri->image != null)
                {
                    if(Storage::disk('public')->exists('curricular/'.$curri->image))
                    {
                        if($curri->image != "default.jpg")
                        {
                            Storage::disk('public')->delete('curricular/'.$curri->image);
                        }
                    }
                }
          
          $file = $request->file('image');
          $file_ext = $file->getClientOriginalExtension();
          $image = 'image_'.time().'.'.$file_ext;
          $save = 'storage/curricular/'. $image;
          Image::make($file)->fit(570,571)->save($save);
      }
      else
      {
          $image = 'default.jpg';
      }
            $curri->image = $image;
            $curri->save();
            Toastr::success('Success','Curricular Updated successfully');
            return redirect()->route('curricular.index');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $curri = Curriculam::find($id);
        if(Storage::disk('public')->exists('curricular/'.$curri->image))
            {
                if($curri->image != "default.jpg")
                {
                Storage::disk('public')->delete('curricular/'.$curri->image);
                }
            }
           
           
        $curri->delete();
        Toastr::success('Success','Curricular Deleted successfully');
        return redirect()->back();
    }
}
