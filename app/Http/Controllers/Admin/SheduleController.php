<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Shedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['shedules']= Shedule::all();
        return view('admin.pages.shedule.index',$data);
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
            "day_to"=>'required',
            "time_to"=>'required',
            "time_from"=>'required',
            "period_to"=>'required',
            "period_from"=>'required',
        ]);
        if($request->day_from != null)
        {

            $day = $request->day_to. "-".$request->day_from;
        }else{
            $day = $request->day_to;

        }
        $time = $request->time_to . $request->period_to . "-" . $request->time_from.$request->period_from;
        // dd($day."=======".$time);
        $shedule = new Shedule;
        $shedule->day = $day;
        $shedule->time = $time;
        $shedule->save();
        Toastr::success('Success','Shedule added successfully');
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
        $data['item'] = Shedule::find($id);
        return view('admin.pages.shedule.edit',$data);
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
        $request->validate([
            "day"=>'required',
            "time"=>'required',
            
        ]);
        $shedule = Shedule::find($id);
        $shedule->day = $request->day;
        $shedule->time = $request->time;
        $shedule->save();
        Toastr::success('Success','Shedule Updated successfully');
        return redirect()->route('shedule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shedule = Shedule::find($id);
        $shedule->delete();
        Toastr::success('Success','Shedule Deleted successfully');
        return redirect()->back();
    }
}
