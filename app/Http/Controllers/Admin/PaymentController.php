<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\payment_rules;


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

   
   
}
