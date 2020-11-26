<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\news;

class NewsController extends Controller
{
   public function news()
    {
      $news = News::all();
      return view('admin.pages.news.index', compact('news'));      
    }

    public function editNews(Request $request){ 

      News::find($request->id)->update([
         'title'=>$request->title,    
         'message'=>$request->message,
      ]);

      echo $request->id;
   }


}
