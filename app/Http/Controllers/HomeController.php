<?php

namespace App\Http\Controllers;

use App\Admin\Doctor;
use App\Admin\About\About;
use App\Admin\Curriculam;
use App\Admin\facility;
use App\Admin\Gallery;
use App\Admin\Notice;
use App\news;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $data['about'] = About::first();
        $data['directors'] = Doctor::where('status',1)->latest()->get();
        $data['facilities'] = facility::latest()->get();
        $data['curries'] = Curriculam::latest()->get();
        $data['notices'] = Notice::latest()->get();
        $data['galleries'] = Gallery::latest()->get();
        //$data['notices'] = News::all();

        // $cat = 'Chairman';
        // $associateDogs = Doctor::whereHas(array('categories' => function($query)
        // {
        //     $query->where('name', '=', 'Teacher');
        
        // }))->get();
        // Doctor::wherehas('categories',function($q)
        // {
        //     $q->where('id', '1');
        
        // })->get();
        
        
        
        // Doctor::with(['categories' => function($query) use ($cat) {
        //     $query->whereIn('name', "Principle");
        // }])->get();
        // dd($associateDogs);
        
        
        return view('frontend.pages.home',$data);
    }

    public function aboutUs ()
    {   $data['directors'] = Doctor::where('status',1)->latest()->get();
        $data['about'] = About::first();
        $data['facilities'] = facility::latest()->get();
        return view('frontend.pages.about',$data);
    }
    public function curricular ()
    {
        $data['curries'] = Curriculam::latest()->get();
        return view('frontend.pages.curricularactivities',$data);
    }
    public function gallery ()
    {
        $data['galleries'] = Gallery::paginate(20);
        return view('frontend.pages.gallery',$data);
    }

    public function contact ()
    {
        
        return view('frontend.pages.contact');
    }
}
