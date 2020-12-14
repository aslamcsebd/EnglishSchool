<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Gallery;
use App\birthday;
use App\Admin\GalleryImageList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['galleries'] = Gallery::all();
        return view('admin.pages.gallery.index');
    }

    public function birthdayToday(){
        return view('admin.pages.birthday.index');
    }


    public function addBirthday(Request $request){

        $request->validate([
            'dob'=>'required',
            'name'=>'required',
            'class'=>'required',
            'classId'=>'required'
        ]);

        birthday::create([
            'dob' => $request->dob,
            'name' => $request->name,
            'class' => $request->class,
            'classId' => $request->classId,
        ]);
        return back()->with('addBirthday','Birthday Add successfully');
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery_title(Request $request){

        Gallery::create(['gallery_title' => $request->gallery_title]);
        return back()->with('gallery_title','Gallery Title add successfully');
    }

    public function addGalleryImage(Request $request){

        $gallery_title_id = $request->gallery_title_id;

        $images = $request->file('imageFile');
      
        if ($request->hasFile('imageFile')){
            foreach ($images as $image) {
                $random = substr(sha1(mt_rand()),17,10);
                $imageName = $random.".".$image->getClientOriginalExtension();
                $image->move('galleryImage/', $imageName);

                GalleryImageList::create(['gallery_title_id' => $gallery_title_id, 'photo' => $imageName ]);
            }
      }

        return back()->with('addGalleryImage','Gallery Image add successfully');
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
            'title'=>'required',
            'image' => 'required|mimes:jpg,jpeg,png,bmp,tiff |max:1024'
        ]);
        $gallery = new Gallery;
        $gallery->title = $request->title;

        //dd($request->all());
        if($request->hasFile('image'))
            {
           

                if(!Storage::disk('public')->exists('galleryImage'))
                {
                    Storage::disk('public')->makeDirectory('galleryImage');
                } 
            
            $file = $request->file('image');
            $file_ext = $file->getClientOriginalExtension();
            $image = 'image_'.time().'.'.$file_ext;
            $save = 'storage/galleryImage/'. $image;
            Image::make($file)->fit(570,571)->save($save);
        }
        else
        {
            $image = 0;
        }

            $gallery->image = $image;
            $gallery->save();
            Toastr::success('Success','Image saved successfully');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
