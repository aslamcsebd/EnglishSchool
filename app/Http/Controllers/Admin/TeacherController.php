<?php

namespace App\Http\Controllers\Admin;
use App\Admin\Doctor;
use App\Admin\Category;
use App\teacherList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['doctors']= Doctor::all();
        $data['categories'] = Category::all();
        // dd($data['doctors']);
        return view('admin.pages.doctor.all',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::all();
        return view('admin.pages.teacher.create',$data);
    }


    public function addTeacher(Request $request){

        // echo $request->designation_id;
        // echo $request->teacherName;
        // echo $request->qualification;


        if ($request->hasFile('photo')){
            if($files=$request->file('photo')){
                $photoName=$request->teacherName.".".$files->getClientOriginalExtension();
                $files->move('teacherPhoto/', $photoName);

            teacherList::insert([
               'designation_id'=>$request->designation_id,
               'teacherName'=>$request->teacherName,
               'qualification'=>$request->qualification,
               'photo'=>$photoName
            ]);
           }    
        }
        return back()->with('teacher', 'Info Save Successfully');
    } 

    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "categories"=>"required",
            "desc"=>"required",
            "degree"=>"required",
            "education"=>"required",
            "experiences"=>"required",
            "address"=>"required",
            "phone"=>"required",
            "email"=>"required|email"
            ]);
            //   dd($request->all());
            $doctor = new Doctor;
            $doctor->name = $request->name;
            $doctor->desc = $request->desc;
            $doctor->degree = $request->degree;
            $doctor->education = $request->education;
            $doctor->Experiences = $request->experiences;
            $doctor->address = $request->address;
            $doctor->phone = $request->phone;
            $doctor->email = $request->email;
            $doctor->website = $request->website;
            $doctor->fb = $request->fb;
            $doctor->twitter = $request->twitter;
            $doctor->instagram = $request->instagram;
            $doctor->speech = $request->speech;
            
            if($request->hasFile('image'))
            {
            $request->validate([
                "image" => 'image|mimes:jpeg,png,jpg',
                ]);

            if(!Storage::disk('public')->exists('doctorImage'))
            {
                Storage::disk('public')->makeDirectory('doctorImage');
            } 
            
            $file = $request->file('image');
            $file_ext = $file->getClientOriginalExtension();
            $image = 'image_'.time().'.'.$file_ext;
            $save = 'storage/doctorImage/'. $image;
            Image::make($file)->fit(570,571)->save($save);
        }
        else
        {
            $image = 'default.jpg';
        }

            $doctor->image = $image;
            if($request->status == "on")
            {

                $doctor->status=1;
            }else{
                $doctor->status=0;

            }
            
            $doctor->save();
            $doctor->categories()->attach($request->categories);
            Toastr::success('Success','Doctor added successfully');
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
        $data['item'] = Doctor::find($id);
         $data['categories'] = Category::all();
        return view('admin.pages.doctor.edit',$data);
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
            "name"=>"required",
            "categories"=>"required",
            "desc"=>"required",
            "degree"=>"required",
            "education"=>"required",
            "experiences"=>"required",
            "address"=>"required",
            "phone"=>"required",
            "email"=>"required|email"
            ]);
          //dd($request->all());
            $doctor = Doctor::find($id);
            $doctor->name = $request->name;
            $doctor->desc = $request->desc;
            $doctor->degree = $request->degree;
            $doctor->education = $request->education;
            $doctor->Experiences = $request->experiences;
            $doctor->address = $request->address;
            $doctor->phone = $request->phone;
            $doctor->email = $request->email;
            $doctor->website = $request->website;
            $doctor->fb = $request->fb;
            $doctor->twitter = $request->twitter;
            $doctor->instagram = $request->instagram;
            $doctor->speech = $request->speech;
           
            
            if($request->hasFile('image'))
            {
            $request->validate([
                "image" => 'image|mimes:jpeg,png,jpg',
                ]);

            if($doctor->image != null)
                {
                    
                    if(Storage::disk('public')->exists('doctorImage/'.$doctor->image))
                    {
                       
                        Storage::disk('public')->delete('doctorImage/'.$doctor->image);
                      
                    }
                }
            
            $file = $request->file('image');
            $file_ext = $file->getClientOriginalExtension();
            $image = 'image_'.time().'.'.$file_ext;
            $save = 'storage/doctorImage/'.$image;
            Image::make($file)->fit(570,571)->save($save);
        }
        else
        {
            $image = $doctor->image;
        }

            $doctor->image = $image;
            // dd($image);
            if($request->status == "on")
            {

                $doctor->status=1;
            }else{
                $doctor->status=0;

            }
            
            $doctor->save();
            $doctor->categories()->sync($request->categories);
            Toastr::success('Success','Doctor Updated successfully');
            return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $doctor = Doctor::find($id);
        if(Storage::disk('public')->exists('doctorImage/'.$doctor->image))
            {
                if($doctor->image != "default.jpg")
                {
                Storage::disk('public')->delete('doctorImage/'.$doctor->image);
                }
            }
            foreach($doctor->categories as $cat)
            {

                $doctor->categories()->detach($cat->id);
            }
            $doctor->delete();
            Toastr::success('Success','Doctor Deleted successfully');

        return redirect()->back();
    }
}
