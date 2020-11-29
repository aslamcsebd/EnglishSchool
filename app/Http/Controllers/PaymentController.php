<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

   public function blankForm(Request $request) {

      $validated = $request->validate([
         'name_eng'=> 'required',
         'father_name_eng'=> 'required',
         'mother_name_eng'=> 'required'
         // 'paymentNumber'=> 'required'
         // 'Transaction_ID'=> 'required'
      ]);

      BlankForm::create($validated);
      return back()->with('success','Payment add successfully');
   }
}
