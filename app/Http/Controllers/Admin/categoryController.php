<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::all();
        return view('admin.pages.doctor-category.index',$data);
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
            "cat_name"=>"required"
        ]);
        $category = new Category;
        $category->name = $request->cat_name;
        $category->description = $request->cat_desc;
        $category->save();
        Toastr::success("success",'Doctor Category succesfully added');
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
        $data['item'] = Category::find($id);
        return view('admin.pages.doctor-category.edit',$data);
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
        // dd($id);
        $request->validate([
            "cat_name"=>"required"
        ]);
    $category = Category::find($id);
    $category->name = $request->cat_name;
    $category->description = $request->cat_desc;
    $category->save();
    Toastr::success("success",'Doctor Category succesfully Updated');
    return redirect()->route('teacher-category.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $category = Category::find($id);
        $category->delete();
        Toastr::success("success",'Doctor Category succesfully Deleted');
        return redirect()->back();
    }
    public function home()
    {
        return view('admin.pages.category.index');
    }
    public function catup($id){
        $data['item'] = Category::find($id);
        return view('admin.pages.doctor-category.create',$data);
    }
}
