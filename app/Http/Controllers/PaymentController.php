<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\payment_rules;
use App\paymentNumber;
use App\BlankForm;
use App\Admin\Admission;

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

   public function add_payment_rules(Request $request) {

      if (is_array($request->payment_rules)) {
         for($i = 0; $i <= count($request->payment_rules) - 1; $i++){
            payment_rules::create([ 'payment_rules' => $request->payment_rules[$i] ]);
         }
       }

      return back()->with('payment_rules','Payment Rules add successfully');
   }


   public function downloadForm(){
      return view('frontend.pages.downloadManagement');      
   }

   public function blankForm(Request $request) {

      if (paymentNumber::where('paymentNumber', $request->paymentNumber)
         ->where('transaction_ID', $request->Transaction_ID)
         ->where('status', 1)->count()  == 1 ){

         paymentNumber::where('paymentNumber', $request->paymentNumber)
         ->where('transaction_ID', $request->Transaction_ID)
         ->where('status', 1)->update([
            "status" => false
         ]);


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
         return $pdf->setPaper('a4','potrait')->stream('invoice.pdf');

        //return back()->with('success','Payment add successfully');
      }else{
         return back()->with('fail','Please Payment first then download form');         
      }
   }


   public function fillUpForm(Request $request){



      if (paymentNumber::where('paymentNumber', $request->paymentNumber)
         ->where('transaction_ID', $request->Transaction_ID)
         ->where('status', 1)->count()  == 1 ){

          paymentNumber::where('paymentNumber', $request->paymentNumber)
         ->where('transaction_ID', $request->Transaction_ID)
         ->where('status', 1)->update([
            "status" => false
         ]);


                 
        //   dd($id);
        $data['app'] = Admission::find($request->id);
        $data['age'] = \Carbon\Carbon::parse($data['app']->dob)->age;
        // dd($data['age']);
        $pdf = PDF::loadView('frontend.pages.admissionpdf', $data);
        // return view('frontend.pages.admissionpdf',$data);
        return $pdf->setPaper('a4','potrait')->stream('invoice.pdf');
        // return redirect()->back();
      }
   }
}