@extends('admin.pages.main')
@section('content')
<div class="row pt-5">

   <div class="col-lg-3 col-6">
      <div class="small-box bg-primary text-center">
         <div class="inner">            
            @php $app = App\teacherList::all()->count(); @endphp
            <h3>{{$app}}</h3>
            <p>Total Teacher</p>
         </div>
         <div class="icon">
            <i class="ion ion-bag"></i>
         </div>
         <a href="{{route("teacher.create")}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>

   <div class="col-lg-3 col-6">
      <div class="small-box bg-secondary text-center">
         <div class="inner">            
            @php $app = App\Admin\facility::all()->count(); @endphp
            <h3>{{$app}}</h3>
            <p>All Facilities</p>
         </div>
         <div class="icon">
            <i class="ion ion-bag"></i>
         </div>
         <a href="{{ route("facilities.index") }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>

   <div class="col-lg-3 col-6">
      <div class="small-box bg-info text-center">
         <div class="inner">            
            @php $app = App\Admin\Admission::all()->count(); @endphp
            <h3>{{$app}}</h3>
            <p>All Applications</p>
         </div>
         <div class="icon">
            <i class="ion ion-bag"></i>
         </div>
         <a href=" {{route("admission.all")}} " class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>

   <div class="col-lg-3 col-6">
      <div class="small-box bg-warning text-center">
         <div class="inner">            
            @php $app = App\Admin\Notice::all()->count(); @endphp
            <h3>{{$app}}</h3>
            <p>All Notice</p>
         </div>
         <div class="icon">
            <i class="ion ion-bag"></i>
         </div>
         <a href=" {{route("notice.index")}} " class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>

   <div class="col-lg-3 col-6">
      <div class="small-box bg-white text-center">
         <div class="inner">            
            @php $app = App\Admin\Gallery::all()->count(); @endphp
            <h3>{{$app}}</h3>
            <p>All Gallery</p>
         </div>
         <div class="icon">
            <i class="ion ion-bag"></i>
         </div>
         <a href=" {{route("gallery.index")}} " class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>

   <div class="col-lg-3 col-6">
      <div class="small-box bg-success text-center">
         <div class="inner">            
            @php $app = App\paymentNumber::all()->count(); @endphp
            <h3>{{$app}}</h3>
            <p>All Payment</p>
         </div>
         <div class="icon">
            <i class="ion ion-bag"></i>
         </div>
         <a href="{{ url('payment') }} " class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>

   <div class="col-lg-3 col-6">
      <div class="small-box bg-danger text-center">
         <div class="inner">            
            @php $app = App\PrincipalSMS::all()->count(); @endphp
            <h3>{{$app}}</h3>
            <p>Principal's Message</p>
         </div>
         <div class="icon">
            <i class="ion ion-bag"></i>
         </div>
         <a href=" {{ url('PrincipalSMS') }} " class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>

   <div class="col-lg-3 col-6">
      <div class="small-box bg-light text-center">
         <div class="inner">            
            @php $app = App\birthday::all()->count(); @endphp
            <h3>{{$app}}</h3>
            <p>Student's Birthday</p>
         </div>
         <div class="icon">
            <i class="ion ion-bag"></i>
         </div>
         <a href=" {{ url('birthdayToday') }} " class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>

   <div class="col text-center mt-5">
      <h1>Victory Loves Preparation</h1>
   </div>





</div>

@endsection
