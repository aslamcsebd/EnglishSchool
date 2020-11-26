<?php

namespace App\Http\Controllers\Admin\aboutus;

use Illuminate\Http\Request;
use App\Admin\About\Missions;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['abouts'] = Mission::all();
        // dd(count($data['abouts']));
        $data['missions']= Missions::all();
        return view('admin.pages.aboutus.mission.index',$data);
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
            "title"=>"required",
            "description"=>"required",
            "image"=>"required",
        ]);
        $mission = new Missions;
        $mission->title = $request->title;
        $mission->description = $request->description;


        if($request->hasFile('image'))
            {
                // dd($request->image);
            $request->validate([
                "image" => 'image|mimes:jpeg,png',
                ]);

            if(!Storage::disk('public')->exists('mission'))
            {
                Storage::disk('public')->makeDirectory('mission');
            } 
            
            $file = $request->file('image');
            $file_ext = $file->getClientOriginalExtension();
            $image = 'image_'.time().'.'.$file_ext;
            $save = 'storage/mission/'. $image;
            Image::make($file)->fit(540,360)->save($save);
        }
        else
        {
            $image = 'default.jpg';
        }

            $mission->image = $image;
            $mission->save();
            Toastr::success('Success','Mission Added successfully');
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
        $mission = Missions::find($id);
        $mission->title = $request->title;
        $mission->description = $request->description;

        if($request->hasFile('image'))
        {
        $request->validate([
            "image" => 'image|mimes:jpeg,png',
            ]);

            // dd($$about->image);
        if($mission->image != null)
            {
                if(Storage::disk('public')->exists('mission/'.$mission->image))
                {
                   if($mission->image != "default.jpg")
                   {
                    Storage::disk('public')->delete('mission/'.$mission->image);
                   }
                }
            }
        
                $file = $request->file('image');
                $file_ext = $file->getClientOriginalExtension();
                $image = 'image_'.time().'.'.$file_ext;
                $save = 'storage/mission/'. $image;
                Image::make($file)->fit(540,360)->save($save);
        } else{
            $image = $mission->image;
              }

                    $mission->image = $image;
        $mission->save();
        Toastr::success('Success','Mission Updated successfully');
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
        $mission = Missions::find($id);
        if(Storage::disk('public')->exists('mission/'.$mission->image))
            {
                if($mission->image != "default.jpg")
                {
                Storage::disk('public')->delete('mission/'.$mission->image);
                }
            }
        $mission->delete();
        Toastr::success('Success','Mission Deleted successfully');
        return redirect()->back();
    }
}
