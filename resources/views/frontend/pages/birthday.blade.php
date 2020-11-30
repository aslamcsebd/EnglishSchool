@extends('frontend.master')
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Today's</span> Birthday</h2>                
            </div>
         </div>
         <div class="row justify-content-center">
               <img src="{{ asset('image/birthday.png') }}" alt="" class="responsive text-center" width="300" height="100">
         </div>
         <div class="row justify-content-center">
            <div class="text-center">
               @php
                  $birthdays = App\birthday::all();
               @endphp

               <style type="text/css">
                  h1{ font-size: 25px; }
                  .name{font-weight: 600; color: #fda638; }
               </style>

               @foreach($birthdays as $birthday)
                    <h1>{{$birthday->title}}</h1>
                    <h1 class="name">{{$birthday->name}}</h1>
               @endforeach
           </div>
        </div>
        </div>
    </div>
</section>
@endsection