<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\news;

class NewsController extends Controller
{
   public function news()
    {
      $data['allNews'] = News::all();
      return view('admin.pages.news.index', $data);      
    }

    public function editNews(Request $request){ 

      News::find($request->id)->update([
         'title'=>$request->title,    
         'message'=>$request->message,
      ]);

      $data['allNews'] = News::all();
      return view('admin.pages.news.index', $data); 

   }


}
