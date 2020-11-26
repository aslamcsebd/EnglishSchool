<?php

namespace App\Http\Controllers\Admin\aboutus;

use App\Admin\About\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['abouts'] = About::all();
        // dd(count($data['abouts']));
        return view('admin.pages.aboutus.whoweare.index',$data);
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
       
        $request->validate([
            "title"=>"required",
            "description"=>"required",
            "image"=>"required",
        ]);
        $about = new About;
        $about->title = $request->title;
        $about->description = $request->description;


        if($request->hasFile('image'))
            {
                // dd($request->image);
            $request->validate([
                "image" => 'image|mimes:jpeg,png',
                ]);

            if(!Storage::disk('public')->exists('about'))
            {
                Storage::disk('public')->makeDirectory('about');
            } 
            
            $file = $request->file('image');
            $file_ext = $file->getClientOriginalExtension();
            $image = 'image_'.time().'.'.$file_ext;
            $save = 'storage/about/'. $image;
            Image::make($file)->fit(540,360)->save($save);
        }
        else
        {
            $image = 'default.jpg';
        }

            $about->image = $image;
            $about->save();
            Toastr::success('Success','About Added successfully');
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
        $data['item']=About::find($id);
        return view('admin.pages.aboutus.whoweare.edit',$data);

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
        $about = About::find($id);
        $about->title = $request->title;
        $about->description = $request->description;

        if($request->hasFile('image'))
        {
        $request->validate([
            "image" => 'image|mimes:jpeg,png',
            ]);

            // dd($$about->image);
        if($about->image != null)
            {
                if(Storage::disk('public')->exists('about/'.$about->image))
                {
                   if($about->image != "default.jpg")
                   {
                    Storage::disk('public')->delete('about/'.$about->image);
                   }
                }
            }
        
                $file = $request->file('image');
                $file_ext = $file->getClientOriginalExtension();
                $image = 'image_'.time().'.'.$file_ext;
                $save = 'storage/about/'. $image;
                Image::make($file)->fit(540,360)->save($save);
        } else{
            $image = $about->image;
              }

                    $about->image = $image;
        $about->save();
        Toastr::success('Success','About Updated successfully');
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        if(Storage::disk('public')->exists('about/'.$about->image))
        {
            if($about->image != "default.jpg")
            {
            Storage::disk('public')->delete('about/'.$about->image);
            }
        }
        $about->delete();
        Toastr::success('Success','About Deleted successfully');
        return redirect()->back();
    }
    
}
