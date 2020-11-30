<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\payment_rules;
use App\paymentNumber;
use App\BlankForm;


class PaymentController extends Controller{

	public function payment(){

      //$data['payment_rules'] = payment_rules::all();
      return view('admin.pages.payment.index');      
   }

   public function update_payment_rule(Request $request){ 

      payment_rules::find($request->id)->update([           
         'information'=>$request->information,
      ]);

      // $data['payment_rules'] = payment_rules::all();
      return view('admin.pages.payment.index');
   }
   
   public function Add_Payment_Number(Request $request) {
    
      $validated = $request->validate([
         'paymentNumber'=> 'required|numeric',
         'transaction_ID'=> 'required'
      ]);

      paymentNumber::create($validated);
      return back()->with('success','Payment add successfully');
   }


   public function downloadForm(){
      return view('frontend.pages.downloadManagement');      
   }

   public function blankForm(Request $request) {

      if (paymentNumber::where('paymentNumber', $request->paymentNumber)
         ->where('transaction_ID', $request->Transaction_ID)
         ->where('status', 1)->count()  == 1 ){

         $validated = $request->validate([
            'name_eng'=> 'required',
            'father_name_eng'=> 'required',
            'mother_name_eng'=> 'required',
            'dob' => 'required'
         ]);
         BlankForm::create($validated);

         $data['name_eng'] = $request->name_eng;
         $data['father_name_eng'] = $request->father_name_eng;
         $data['mother_name_eng'] = $request->mother_name_eng;
         $data['dob'] = $request->dob;
         $data['age'] = \Carbon\Carbon::parse($data['dob'])->age;

         $pdf = PDF::loadView('frontend.pages.pdfdownload', $data);
        // return view('frontend.pages.admissionpdf',$data);
         return $pdf->setPaper('a4','potrait')->stream('invoice.pdf');

        //return back()->with('success','Payment add successfully');
      }else{
         return back()->with('fail','Please Payment first then download form');         
      }
   }
}