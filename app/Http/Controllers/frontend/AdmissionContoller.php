<?php

namespace App\Http\Controllers\frontend;

use App\Admin\Admission;
use Barryvdh\DomPDF\Facade as PDF;
use App\Mail\AdmissionMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;


class AdmissionContoller extends Controller
{
    public function index()
    {
        return view('frontend.pages.admission');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([ 
        "admission_type" => "required",            
        'email'=>'required|email|unique:admissions',
        "name_eng" => "required",
        "name_bng" => "required",
        "dob" => "required",
        "nationality" => "required",
        "religion" => "required",
        "father_name_eng" => "required",
        "father_name_bng" => "required",
        "mother_name_eng" => "required",
        "mother_name_bng" => "required",
        "per_add" => "required",
        "mailing_add" => "required",
        "sla" => "required",
        "moi" => "required",
        "last_place" => "required",
        "find_out" => "required",
        "curricular" => "required",
        "challanged" => "required",
        "father_occupation" => "required",
        "mother_occupation" => "required",
        "father_nid" => "required",
        "mother_nid" => "required",
        "father_contact" => "required",
        "mother_contact" => "required",
        "transports" => "required",
        ]);
        $admission = new Admission; 
        $admission->admission_type = $request->admission_type;
        $admission->email = $request->email;
        $admission->name_eng = $request->name_eng;
        $admission->name_bng = $request->name_bng;
        $admission->dob = $request->dob;
        $admission->nationality = $request->nationality;
        $admission->religion = $request->religion;
        $admission->father_name_eng = $request->father_name_eng;
        $admission->father_name_bng = $request->father_name_bng;
        $admission->mother_name_eng = $request->mother_name_eng;
        $admission->mother_name_bng = $request->mother_name_bng;
        $admission->per_add = $request->per_add;
        $admission->mailing_add = $request->mailing_add;
        $admission->sla = $request->sla;
        $admission->moi = $request->moi;
        $admission->last_place = $request->last_place;
        $admission->find_out = $request->find_out;
        $admission->curricular = $request->curricular;
        $admission->challanged = $request->challanged;
        $admission->father_occupation = $request->father_occupation;
        $admission->mother_occupation = $request->mother_occupation;
        $admission->father_nid = $request->father_nid;
        $admission->mother_nid = $request->mother_nid;
        $admission->father_contact = $request->father_contact;
        $admission->mother_contact = $request->mother_contact;
        $admission->transports = $request->transports;
        $admission->father_fb = $request->father_fb;
        $admission->mother_fb = $request->mother_fb;
        
        $admission->save();
        Toastr::success('Success','We will inform you within 24 hours . Check your email');
        // Mail::send(['text'=>'mail'],['name'=>'Forkan'],function($mssg){
        //      $mssg->to('forkanalam295@gmail.com','to Forkan')->subject('Testing Email');
        //      $mssg->from('793c39ca34-fed76a@inbox.mailtrap.io','forkan');
        // });
        //Mail::to($request->email)->send(new AdmissionMail());
        
        return back()->with('success','Information add successfully');
        //return redirect()->back(); 
    }
    public function all(){
        $data['applications'] = Admission::latest()->get();
        return view('admin.pages.admissonapplication.index',$data);

    }
    public function delete($id){
        //   dd($id);
        $app = Admission::find($id);
        $app->delete();
        Toastr::success('Success','Application Deleted Succesfully');
        return redirect()->back(); 

    }
    public function pdf($id){
        //   dd($id);
        $data['app'] = Admission::find($id);
        $data['age'] = \Carbon\Carbon::parse($data['app']->dob)->age;
        // dd($data['age']);
        $pdf = PDF::loadView('frontend.pages.admissionpdf', $data);
        // return view('frontend.pages.admissionpdf',$data);
        return $pdf->setPaper('a4','potrait')->stream('invoice.pdf');
        // return redirect()->back();
    }

}
