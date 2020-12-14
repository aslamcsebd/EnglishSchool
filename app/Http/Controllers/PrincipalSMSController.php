<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\PrincipalSMS;

class PrincipalSMSController extends Controller{

   public function PrincipalSMS(){
      return view('admin.pages.principal.index');      
   }

   public function UpdatePrincipalSMS(Request $request){ 

      if($request->hasFile('image')){
         $request->validate( ["image" => 'required|image|mimes:jpeg,png', ]);

         if(!Storage::disk('public')->exists('curricular')){
            Storage::disk('public')->makeDirectory('curricular');
         } 
         
         $file = $request->file('image');
         $file_ext = $file->getClientOriginalExtension();
         echo$image = 'image_'.time().'.'.$file_ext;
         $save = 'storage/curricular/'. $image;
         Image::make($file)->fit(570,571)->save($save);

         PrincipalSMS::find($request->id)->update([
            'title'=>$request->title,    
            'leftSide'=>$request->leftSide,
            'rightSide'=>$request->rightSide,
            'name'=>$request->name,
            'image'=>$image,
         ]);
      }else{

         $image = 'default.jpg';

         PrincipalSMS::find($request->id)->update([
            'title'=>$request->title,    
            'leftSide'=>$request->leftSide,
            'rightSide'=>$request->rightSide,
            'name'=>$request->name,
         ]);
      }
      
      return redirect()->back();
   }

   public function birthday(){
      return view('frontend.pages.birthday');    
   }
}